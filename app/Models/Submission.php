<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'submissions';

    // Specify the fillable fields
    protected $fillable = ['name', 'email', 'message'];
}
