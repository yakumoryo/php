<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = [
        'user_id',
        'phptimelesson0',
        'phptimelesson1',
        'phptimelesson2',
        'phptimelesson3',
        'phptimelesson4',
        'phptimelesson5',
        'phptimelesson6',
        'phptimelesson7',
        'phptimelesson8',
        'phptimelesson9',
        'phptimelesson10',
        'phptimelesson11',
        'phptimelesson12',
        'phptimelesson13',
        'phptimelesson14',
        'phpstatuslesson0',
        'phpstatuslesson1',
        'phpstatuslesson2',
        'phpstatuslesson3',
        'phpstatuslesson4',
        'phpstatuslesson5',
        'phpstatuslesson6',
        'phpstatuslesson7',
        'phpstatuslesson8',
        'phpstatuslesson9',
        'phpstatuslesson10',
        'phpstatuslesson11',
        'phpstatuslesson12',
        'phpstatuslesson13',
        'phpstatuslesson14',
        ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
