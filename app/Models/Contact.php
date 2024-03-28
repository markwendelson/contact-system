<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    public function scopeOfContact(Builder $query, int $contact_id)
    {
        $query->where('contact_id', $contact_id);
    }

}
