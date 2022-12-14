<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $fillable=['title_ar','title_en','description_ar',
    'description_en','author','images','isbn'];

    public function users(){
        return $this->belongsToMany(User::class,'orders');
    }
    public function tags(){
        return $this->hasMany(Tag::class);
    }

    public function getImagesAttribute($val)
    {
        return $val!=null ? explode('|',$val):" ";
    }

}
