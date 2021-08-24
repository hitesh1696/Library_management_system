<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'books'; 
    protected $fillable = [
        'title',
        'author',
        'publisher',
        'price',
        'no_of_copies',
        'in_stock',
        'library_id'
    ];

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

}
