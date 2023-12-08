<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'CategoryName' => 'C',
        ]);
        Category::create([
            'CategoryName' => 'Java',
        ]);
        Category::create([
            'CategoryName' => 'PHP',
        ]); Category::create([
            'CategoryName' => 'Python',
        ]);
        Category::create([
            'CategoryName' => 'Javascript',
        ]);
        Category::create([
            'CategoryName' => 'HTML',
        ]);
        Category::create([
            'CategoryName' => 'CSS',
        ]);
        Category::create([
            'CategoryName' => 'C++',
        ]);
        Category::create([
            'CategoryName' => 'C#',
        ]);
        
    }
}
