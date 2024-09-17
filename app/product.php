<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
     protected $fillable = 
     [        
         'id',
         'product_name',
         'category_name',
         'brand_name',
         'description',
         'image',
         'status',
         'failed_at'
    ];
}
