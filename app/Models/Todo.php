<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
  use HasFactory;
  
  protected $fillable = [
    'todo',
    'deadline',
    'comment'
  ];
  
  // protected $guarded = [
  //   'id',
  //   'created_at',
  //   'updated_at',
  // ];
  
  public static function getAllOrderByDeadline()
  {
    return self::orderBy('deadline', 'asc')->get();
  }
}
