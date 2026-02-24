<?php

namespace App\Models;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\AdminController;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Prompts\Concerns\Scrolling;

class Laptop extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function images() {
        return $this->hasMany(LaptopImage::class);
        }
}
