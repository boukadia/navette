<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'heure-depart',
        'heure-arrive',
        'status',
        'description',
        'dateDebut',
        'dateFin',
        'user_id',
    ];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
