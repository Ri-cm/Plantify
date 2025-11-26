<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    // Field yang boleh diisi
    protected $fillable = [
        'user_id',
        'name',
        'description',
    ];

    /**
     * Relasi: Kategori dimiliki oleh 1 User
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relasi: Kategori memiliki banyak tanaman
     */
    public function plants()
    {
        return $this->hasMany(Plant::class, 'category_id');
    }
}
