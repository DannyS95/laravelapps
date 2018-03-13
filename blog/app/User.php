<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function posts()
    {
        return $this->hasMany(Posts::class);
    }

    public function publish (Posts $post)
    {
        $this->posts()->save($post);

        /*
         * Posts::create(request(['title',
            'body',
            'user_id']));
            return redirect('/');
         */
    }

    public function routeNotificationForSlack()
    {
        return 'https://hooks.slack.com/services/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';
    }
}
