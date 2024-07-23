<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $categories = ['Action', 'Biography', 'Dystopian', 'Essay', 'Fantasy', 'Fiction', 'Gothic', 'Graphic Novel','Historical', 'Horror', 'LGBTQIA+', 'Manga', 'Mystery', 'Mythology', 'Non-fiction', 'Romance', 'Satire', 'Sci-Fi','YA'];

        foreach($categories as $category){
            Category::create([
                'name' => $category
            ]);
        }
    }
}
