<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    protected $table ='background';
    protected $primaryKey ='id_bg';
    protected $fillable = [
        'image',
        'id_admin'      
    ];
}
