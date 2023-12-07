<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageClassifier extends Model
{
    protected $table = 'image_classifiers';

    protected $fillable = [
        'model_path',
    ];
}

// class ImageClassifier extends Model
// {
//     use HasFactory;
// }

