<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'cargo',
        'status'
    ];
    public function dependence(){
        return $this->belongsToMany(dependence::class, 'personal_dependence');
    }
}
