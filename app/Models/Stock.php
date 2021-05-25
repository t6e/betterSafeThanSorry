<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table='stock';
    protected $primaryKey='stock_id';

    public function findByProductId(){
        $product_id=$this->product_id;
        return Stock::where('product_id',$product_id)->all();
    }
}
