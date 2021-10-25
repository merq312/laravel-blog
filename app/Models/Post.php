<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Mass Assignment Vulnerabilities: You may either

    // blacklist fields
    // protected $guarded = ['id'];

    // whitelist fields
    // protected $fillable = ['title', 'excerpt', 'body'];

    // Allow mass assign only to keys we are in charge of
    protected $guarded = [];

    // Alternative to specifying key in routes file (web.php)
//    public function getRouteKeyName()
//    {
//        return 'slug';
//    }

    // Always return category and author (eager load by default)
    // With this you may remove with() and load() methods in web.php
//    protected $with = ['category', 'author'];

    public function category()
    {
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }

    public function author() // using "author" instead of "user"
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
