<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ground extends Model
{
    use HasFactory;
    protected $table = 'ground';
    public $timestamps = false;
    public $primaryKey = 'MaG';
}
