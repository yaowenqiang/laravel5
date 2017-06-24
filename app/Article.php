<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id'
    ];
    protected $dates = ['published_at'];
    public function scopePublished($query)
    {
        $query->where('published_at','<=',Carbon::now());
    }

    public function scopeUnpublished($query)
    {
        $query->where('published_at','>=',Carbon::now());
    }

    public function setPublishedAtAttribute($date)
    {
//        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
        $this->attributes['published_at'] = Carbon::parse($date);
//        $this->attributes['published_at'] = '';
    }

    /*
     * An Article is owned by a user.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
