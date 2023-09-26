<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Define which attributes can be mass-assigned
    protected $fillable = ['name', 'email'];  // Include other attributes here as required

    // Other methods and model logic if any...
}
