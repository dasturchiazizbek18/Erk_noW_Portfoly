<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_uz',
        'title_en',
        'description_uz',
        'description_en',
        'image',
        'technologies',
        'project_url'
    ];
}