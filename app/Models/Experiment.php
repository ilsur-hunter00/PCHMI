<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiment extends Model
{
    protected $table = 'experiment';
    protected $primaryKey = 'id';
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'name',
        'num_count_1',
        'num_count_2',
        'pict_count_1',
        'pict_count_2',
        'bold_count_1',
        'bold_count_2',
        'cursive_count_1',
        'cursive_count_2'
    ];
}
