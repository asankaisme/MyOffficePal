<?php

namespace App\Models;

use App\Models\User;
use App\Models\Lending;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'depName',
        'status'
    ];

    public function lending(): HasMany
    {
        return $this->hasMany(Lending::class);
    }

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
