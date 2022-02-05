<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\scategory;
use App\Models\Setting;
use App\Models\Subcategory;
use Livewire\Component;

class HeaderComponent extends Component
{
    public function render()
    {
        $setting = Setting::find(1);
        $categories = Category::all();
        $scategories = Subcategory::all();
        $sscategories = scategory::all();
        return view('livewire.header-component',['setting'=>$setting,'categories'=>$categories,'scategories'=>$scategories,'sscategories'=>$sscategories]);
    }
}
