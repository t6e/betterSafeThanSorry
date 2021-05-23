<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'product_id'=>1,
            'expiration_date'=>new Carbon('2022-04-30'),
            'num'=>5
        ];
        DB::table('stock')->insert($param);
        $param=[
            'product_id'=>1,
            'expiration_date'=>new Carbon('2024-10-31'),
            'num'=>5
        ];
        DB::table('stock')->insert($param);$param=[
            'product_id'=>2,
            'expiration_date'=>new Carbon('2025-04-30'),
            'num'=>5
        ];
        DB::table('stock')->insert($param);
    }
}
