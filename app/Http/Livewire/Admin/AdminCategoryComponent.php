<?php

namespace App\Http\Livewire\Admin;
use App\Models\Category;
use App\Models\scategory;
use App\Models\Subcategory;
use Livewire\Component;
use Livewire\WithPagination;


class AdminCategoryComponent extends Component
{
    public $subcategory_id;
    use WithPagination;

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Category has been deleted successfully');
    }
    public function deleteSubcategories($id)
    {
        $scategory = Subcategory::find($id);
        $scategory->delete();
        session()->flash('message','SubCategory has been deleted successfully');

    }
    public function deleteScategories($id)
    {
        $sscategory = scategory::find($id);
        $sscategory->delete();
        session()->flash('message','Sous-sousCategory has been deleted successfully');

    }

    public function render()
    {
        $categories = Category::paginate(5);
        $sscategories = Subcategory::all();

        return view('livewire.admin.admin-category-component',['categories'=>$categories,'sscategories'=>$sscategories])->layout('layouts.base');
    }
}
