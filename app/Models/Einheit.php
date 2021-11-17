<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Einheit extends Model
{
    use HasFactory;
    public $timestamp= false;
 

    public $fillable= ['name', 'parent_foder'];

    public function childs(){
        return $this->hasMany(Einheit::class,'parent_foder');
    }
}
