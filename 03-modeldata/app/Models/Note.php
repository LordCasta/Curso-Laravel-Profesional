<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table = "notes";
    protected $fillable = ["title", "description", "deadline", "done"];
    //protected $guarded = En este caso, al definir los fillable, no definimos los guarded ;
    protected $casts = [
        "deadline" => "date"
    ];
    protected $hidden = ['password'];

}
