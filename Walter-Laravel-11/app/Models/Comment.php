<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    // esto es la protección contra Mass Assignment (Asignación Masiva).
    protected $guarded = ['*'];

    /**
     * 
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo 
     */

    public function user(): BelongsTo {

        return $this->belongsTo(User::class);
    }



}
