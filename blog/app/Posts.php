<?php
namespace App;

use Carbon\Carbon;

    class Posts extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function addComment($body, $user_id)
    {
        $this->comments()->create(compact('body', 'user_id'));

        return back();

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters)
    {
        if (array_key_exists("month", $filters) && $month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if (array_key_exists("year", $filters) && $year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }

    public static function archives()
    {
       return static::selectraw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::Class, 'post_tag', 'post_id', 'tag_id');
    }

    method
}