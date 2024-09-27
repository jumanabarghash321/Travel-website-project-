<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $table = 'destinations';
    protected $fillable = ['name', 'description'];

    public function destination_info()
    {
        return $this->hasOne(DestinationInfo::class, 'destination_id', 'id');
    }
}

