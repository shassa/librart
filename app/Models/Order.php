<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable=['accept'];
    public function getUserIdAttribute($val)
    {
        return $val!=null ? User::find($val)->name:" ";
    }
    public function getBookIdAttribute($val)
    {
        return $val!=null ? book::find($val)->title_en:" ";
    }

    public function getAcceptAttribute($val)
    {
        return $val!=1 ? "No":"Yes";
    }
}
