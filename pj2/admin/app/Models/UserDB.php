<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDB extends Model
{
    use HasFactory;
    protected $table = "user";
    public $timestamps = false;
    public $primaryKey = 'MaU';
    public function getBanUserAttribute()
    {
        if ($this->BanU == 0) {
            return "Hoạt động";
        } else {
            return "Khoá";
        }
    }
}
