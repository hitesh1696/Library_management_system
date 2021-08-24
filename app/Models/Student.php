<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'students'; 
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'division',
        'year_of_study',
        'department_id',
        'library_id'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
