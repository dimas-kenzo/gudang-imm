<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $guarded = ['_token'];
    public function master_warehouse () {
        return $this->belongsTo(Warehouse::class);
    }
}
