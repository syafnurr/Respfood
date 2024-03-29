<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';

    public function article(){
        return $this->hasMany(Article::class);
    }

    public function count(){
        $count = Category::count();
        return $count; 
    }
}
