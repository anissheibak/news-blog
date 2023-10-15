<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=['title', 'envelope', 'image_path', 'location', 'email', 'website', 'phone', 'employees', 'established on', 'slug', 'tags', 'status'];
}
