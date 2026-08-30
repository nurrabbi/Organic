<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class UserDetail extends Model
{
    protected $fillable = [ 'address', 'dob', 'image'];
    
    public function userDetail(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
