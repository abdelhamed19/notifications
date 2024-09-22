<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'uuid','price'];
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->user_id = auth()->id();
            $model->uuid = Str::uuid();
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
