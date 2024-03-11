<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['subject_name','total_hours','objective'];

    public function units(): \Illuminate\Database\Eloquent\Relations\HasMany {
        return $this->hasMany(Unit::class);
    }
    

}
