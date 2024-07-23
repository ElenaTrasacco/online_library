<?php

namespace App\Models;

use App\Models\Library;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function libraries(){
        return $this->hasMany(Library::class);
    }
}
