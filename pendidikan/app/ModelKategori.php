<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKategori extends Model
{
   protected $table = 'categori'; 
   public $timestamps = false;
   //nama table yang kita buat lewat migration adalah todo
   //protected $fillable = ['nama'];
   //protected $guarded = ['idkat'];
}