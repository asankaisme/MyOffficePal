<?php

namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Asset extends Model
{
    use HasFactory;

    protected $table = 'Assets';

    protected $fillable = [
        'sub_category_id',
        'assetMake',
        'assetModel',
        'assetName',
        'serialNo',
        'cNo',
        'notes',
        'receivedDate',
        'expiryDate',
        'status'        
    ];

    public function subCategory():BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }
}
