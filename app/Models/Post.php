<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Tambahkan ini

class Post extends Model
{
    use HasFactory; // Pastikan HasFactory digunakan dengan benar

    protected $fillable = ['user_id', 'title', 'content'];

    // Relasi One-to-Many (Kebalikan dari hasMany)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
