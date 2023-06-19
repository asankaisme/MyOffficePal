<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lending extends Model
{
    use HasFactory;

    protected $fillable = [
        'asset_id',
        'department_id',
        'takenBy',
        'takenOn',
        'givenBy',
        'givenOn',
        'isReturned',
        'status'
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
