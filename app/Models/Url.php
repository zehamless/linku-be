<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'shorten',
        'timeout',
        'accessCount',
    ];

    protected function casts(): array
    {
        return [
            'timeout' => 'datetime',
        ];
    }
    public function getRouteKeyName(): string
    {
        return 'shorten';
    }
}
