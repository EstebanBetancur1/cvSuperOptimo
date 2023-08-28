<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecuperarContrasena extends Model
{
    use HasFactory;
    
    protected $table = 'recuperarcontrasena';

    protected $fillable = [
        'user_id',
        'token',
        'status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function scopeToken($query, $token)
    {
        return $query->where('token', $token);
    }

    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}
