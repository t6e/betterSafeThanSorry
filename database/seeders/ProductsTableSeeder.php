<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'product_name'=>'レトルトカレーA',
            'product_info'=>'レトルトカレーAの説明。'
        ];
        DB::table('products')->insert($param);
        $param=[
            'product_name'=>'レトルトカレーB',
            'product_info'=>'レトルトカレーBの説明。'
        ];
        DB::table('products')->insert($param);
        $param=[
            'product_name'=>'レトルトカレーC',
            'product_info'=>'レトルトカレーCの説明。'
        ];
        DB::table('products')->insert($param);
    }
}
