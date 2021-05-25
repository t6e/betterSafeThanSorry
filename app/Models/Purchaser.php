<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchaser extends Model
{
    use HasFactory;
    protected $table='purchasers';
    protected $primaryKey=['user_id','stock_id'];
    protected $fillable = ['user_id','stock_id','num'];
    public $incrementing = false;
}
