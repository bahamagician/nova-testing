<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
use Faker\Generator as Faker;

class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $productIds = Product::pluck('id')->all();
        $categoryIds = Category::pluck('id')->all();
        for($i=1; $i <= 30; $i++) {

            DB::table('category_product')->insert([
                'product_id' => $faker->randomElement($productIds),
                'category_id' => $faker->randomElement($categoryIds)
            ]);


        }
    }
}
