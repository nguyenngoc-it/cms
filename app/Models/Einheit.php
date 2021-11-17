<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Einheit extends Model
{
    use HasFactory;
    public $timestamp= false;
    protected $table= 'einheit';

    public $fillable= ['name', 'parent_id', 'rolle', 'status'];
    protected $primaryKey = 'id';

    public function childs(){
        return $this->hasMany(Einheit::class,'parent_id');
    }
}
