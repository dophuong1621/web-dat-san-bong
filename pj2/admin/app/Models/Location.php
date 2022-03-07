<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    // thuộc tính
    protected $table = 'location';
    public $timestamps = false;
    public $primaryKey = 'MaL';
    public function getTinhTrangAttribute()
    {
        if ($this->Status == 0) {
            return "Không hoạt động";
        } else {
            return "Hoạt động";
        }
    }
}
