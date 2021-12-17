<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchasehistory extends Model
{
    protected $guarded=[];

     public function supplier(){
        
            return $this->belongsto(Supplier::class);
        

            }
            public function purchase(){
        
                return $this->belongsto(Purchase::class);
            
                }
        }