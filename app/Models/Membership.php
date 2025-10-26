<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Membership extends Model
{
    use HasFactory;
    protected $table = 'memberships';
    protected $fillable = [
        'user_id',       
        'brand',
        'model',
        'country',
        'status',        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
