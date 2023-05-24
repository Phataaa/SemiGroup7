<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_image extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'product_image';
    protected $fillable = ['name', 'path', 'product_id'];
    
    public function product() {
        return $this -> belongTo('App\Models\product', 'product_id');
    }
}
