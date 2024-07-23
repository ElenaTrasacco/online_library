<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Library extends Model
{
    use HasFactory;
    protected $fillable = 
['title', 'author', 'year', 'description', 'cover', 'user_id', 'category_id'];

public function user(){
    return $this->belongsTo(User::class);
}
    
public function category(){
    return $this->belongsTo(Category::class);
}
}
