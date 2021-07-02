<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates=['deleted_at'];
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function Voiture()
    {
        return $this->hasOne(Voiture::class);
    }
}
