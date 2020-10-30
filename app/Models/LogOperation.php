<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogOperation extends Model
{
    use HasFactory;

    protected $table = 'log_operation';
    
    protected $fillable = [
        'operation', 'client_filename', 'real_filename', 'output_filename'
    ];

    public $timestamps = true;
}
