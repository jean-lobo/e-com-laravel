<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Oppo mobile',
            'price'=>'300',
            'description'=>'A smartphone with 8gb ram and much more features',
            'category'=>'mobile',
            'gallery'=>'Oppo.webp', ],
            [
                'name'=>'TV',
                'price'=>'400',
                'description'=>'A smartTv with and much more features',
                'category'=>'tv',
                'gallery'=>'tv.webp', ],
            [
                'name'=>'Sony tv',
                'price'=>'500',
                'description'=>'A tv with much more features',
                'category'=>'tv',
                'gallery'=>'tv2.webp', ],
                [
                    'name'=>'LG fridge',
                    'price'=>'600',
                    'description'=>'A fridge much more features',
                    'category'=>'fridge',
                    'gallery'=>'fridge.webp', ],
             
            
        ]);


    }
}
