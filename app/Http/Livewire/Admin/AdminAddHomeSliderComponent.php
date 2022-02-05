<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Carbon\Carbon;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;

    public function mount()
    {
        $this->status = 0;
    }


    public function addSlider()
    {

        $slider = new HomeSlider();
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $slider->link = $this->link;
        $slider->status = $this->status;
        $imageName = $this->image->getClientOriginalName();
        $this->image->storeAs('sliders',$imageName.'.'. $this->image->extension());
        $slider->image = $imageName;
        $slider->save();
        session()->flash('message', 'slider has been created successfully');

    }

    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component')->layout('layouts.base');
    }
}
