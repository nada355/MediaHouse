<?php

namespace App\Http\Livewire\Admin;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class AdminAddProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stack_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;
    public $images;
    public $scategory_id;



    public function mount()
    {
        $this->stack_status = 'instock';
        $this->featured = 0;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name,'-');
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required|unique:products',
            'short_description'=>'required',
            'description'=>'required',
            'regular_price'=>'required|numeric',
            'sale_price'=>'numeric',
            'SKU'=>'required',
            'stack_status'=>'required',
            'quantity'=>'required|numeric',
            'image'=>'required|mimes:jpeg,jpg,png',
        ]);
    }

    public function addProduct()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:products',
            'short_description'=>'required',
            'description'=>'required',
            'regular_price'=>'required|numeric',
            'sale_price'=>'numeric',
            'SKU'=>'required',
            'stack_status'=>'required',
            'quantity'=>'required|numeric',
            'image'=>'required|mimes:jpeg,jpg,png',

        ]);

        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->SKU;
        $product->stack_status = $this->stack_status;
        $product->featured= $this->featured;
        $product->quantity = $this->quantity;
        $imageName = $this->image->getClientOriginalName();
        $this->image->storeAs('products',$imageName.'.'. $this->image->extension());
        $product->image = $imageName;
        if ($this->images)
        {
            $imagesname = '';
            foreach($this->images as $key=>$image)
            {

                $imaName = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $image->StoreAs('products',$imaName. $key. '.' . $extension);
                $imagesname = $imagesname . ',' . $imaName;

            }
            $product->images = $imaName;
        }

        $product->category_id = $this->category_id;
        if ($this->scategory_id)
        {
            $product->subcategory_id = $this->scategory_id;
        }
        $product->save();
        session()->flash('message','product has been created successfully');

    }
    public function changeSubcategory()
    {
        $this->scategory_id = 0;
    }



    public function render()
    {
        $categories = Category::all();
        $scategories =Subcategory::where('category_id',$this->category_id)->get();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories,'scategories'=>$scategories])->layout('layouts.base');
    }
}

