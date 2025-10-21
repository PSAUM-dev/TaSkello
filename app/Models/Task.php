<?php

namespace App\Models;

use App\HashidRouteBinding;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory, HashidRouteBinding;
    protected $fillable = ['name', 'description', 'status', 'user_id', 'created_at'];

    //public $timestamps = false;

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
