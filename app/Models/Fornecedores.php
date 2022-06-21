<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['nome'];
    
    public function post()
    {
        return $this->hasMany('App\Produto', 'foreign_key');
       
    }


}

