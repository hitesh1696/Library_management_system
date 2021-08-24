<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Library extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'book_id',
        'student_id',
        'date_of_issue',
        'date_of_return'
    ];

    public function students()
    {
        return $this->hasMany(Student::class, 'library_id');
    }
    
    public function books()
    {
        return $this->hasMany(Book::class, 'library_id');
    }
}
