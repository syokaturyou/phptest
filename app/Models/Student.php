<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  
  use HasFactory;
  protected $fillable = [
    'name', 
    'email', 
    'tel',
  ];
  // protected $guarded = [
  //   'id',
  //   'created_at',
  //   'updated_at',
  // ];
  
}
