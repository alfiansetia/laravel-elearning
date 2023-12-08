<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::factory()->count(30)->create();

        Product::create([ //1
            'name'          => 'sorting di c',
            'category_id'   => 1,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim. Suspendisse ac tristique odio. Fusce ac nunc in lectus facilisis suscipit.',
            'photo'         => 'c.png',
        ]);

        Product::create([ //2
            'name'          => 'Pengenalan Array di C',
            'category_id'   => 1,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim. Suspendisse ac tristique odio. Fusce ac nunc in lectus facilisis suscipit.',
            'photo'         => 'c.png',
        ]);

        Product::create([ //3
            'name'          => 'Pengenalan struktur data di C',
            'category_id'   => 1,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim. Suspendisse ac tristique odio. Fusce ac nunc in lectus facilisis suscipit.',
            'photo'         => 'c.png',
        ]);

        Product::create([ //4
            'name'          => 'Pengenalan Variabel di C',
            'category_id'   => 1,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim. Suspendisse ac tristique odio. Fusce ac nunc in lectus facilisis suscipit.',
            'photo'         => 'c.png',
        ]);

        Product::create([ //5
            'name'          => 'Pengenalan CSS',
            'category_id'   => 7,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim. Suspendisse ac tristique odio. Fusce ac nunc in lectus facilisis suscipit.',
            'photo'         => 'css.png',
        ]);


        Product::create([ //6
            'name'          => 'Pengenalan HTML',
            'category_id'   => 6,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim. Suspendisse ac tristique odio. Fusce ac nunc in lectus facilisis suscipit.',
            'photo'         => 'html.png',
        ]);

        Product::create([ //7
            'name'          => 'Pengenalan Javascript',
            'category_id'   => 5,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim. Suspendisse ac tristique odio. Fusce ac nunc in lectus facilisis suscipit.',
            'photo'         => 'JavaScript.png',
        ]);

        Product::create([ //8
            'name'          => 'Pengenalan PHP',
            'category_id'   => 3,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim. Suspendisse ac tristique odio. Fusce ac nunc in lectus facilisis suscipit.',
            'photo'         => 'php.png',
        ]);

        Product::create([ //9
            'name'          => 'Pengenalan Python',
            'category_id'   => 4,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim. Suspendisse ac tristique odio. Fusce ac nunc in lectus facilisis suscipit.',
            'photo'         => 'python.png',
        ]);

        Product::create([ //10
            'name'          => 'Pengenalan C++',
            'category_id'   => 8,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim. Suspendisse ac tristique odio. Fusce ac nunc in lectus facilisis suscipit.',
            'photo'         => 'c2.png',
        ]);

        Product::create([ //11
            'name'          => 'Pengenalan C#',
            'category_id'   => 9,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim.',
            'photo'         => 'c3.png',
        ]);

        Product::create([ //12
            'name'          => 'Pengenalan C#',
            'category_id'   => 9,
            'price'         => 40,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim.',
            'photo'         => 'c3.png',
        ]);

        Product::create([ //13
            'name'          => 'Pengenalan Java',
            'category_id'   => 2,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim.',
            'photo'         => 'java.png',
        ]);

        Product::create([ //14
            'name'          => 'fungsi pada Java',
            'category_id'   => 2,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim.',
            'photo'         => 'java.png',
        ]);

        Product::create([ //15
            'name'          => 'tipe data pada Java',
            'category_id'   => 2,
            'price'         => 50,
            'detail'        => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula libero eu justo dignissim.',
            'photo'         => 'java.png',
        ]);
    }
}
