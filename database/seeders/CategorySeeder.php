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
        $name = [
            'C',
            'Java',
            'PHP',
            'Python',
            'Javascript',
            'HTML',
            'CSS',
            'C++',
            'C#',
        ];
        foreach ($name as $item) {
            Category::create([
                'name' => $item,
            ]);
        }
    }
}
