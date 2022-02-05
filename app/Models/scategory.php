<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scategory extends Model
{
    use HasFactory;
    public function subcategories()
    {
        $this->belongsTo(Subcategory::class);
    }
}
