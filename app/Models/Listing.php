<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'company', 'location', 'website', 'email', 'tags', 'description', 'user_id'];

    // Todo: Create a listing model and migrate it to DB

    // Relationship to User
    public function user() {

        return $this->belongsTo(User::class, 'user_id');
    }
}
