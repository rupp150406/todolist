<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    // ✅ Relasi ke todos
    public function todos()
    {
        return $this->hasMany(Todo::class);
    }
}
