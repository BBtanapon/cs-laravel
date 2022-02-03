<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Hash;
use Illuminate\Support\Carbon;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_name'=>'iPhone 14',
                'product_type'=>'1',
                'price'=>'39900',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],
             [

                'product_name'=>'Samsung s20',
                'product_type'=>'1',
                'price'=>'39900',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],
             [

                'product_name'=>'LG Smart TV',
                'product_type'=>'2',
                'price'=>'30900',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ],
            [

                'product_name'=>'Samsung Smart TV',
                'product_type'=>'2',
                'price'=>'40900',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),

            ]
        ]);
    }
}
