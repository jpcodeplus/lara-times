<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpeningTime extends Model
{
    protected $table = 'opening_times';
    protected $fillable = ['open_time', 'close_time', 'day'];
}
