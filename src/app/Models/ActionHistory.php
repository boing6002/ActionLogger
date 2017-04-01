<?php

namespace LaravelEnso\ActionLogger\app\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ActionHistory extends Model
{
    protected $fillable = ['user_id', 'url', 'route', 'action'];

    public function user()
    {
        return $this->belongsTo('LaravelEnso\Core\app\Models\User');
    }

    public function getCreatedDateAttribute()
    {
        return Carbon::parse($this->created_at)->format('d-m-Y');
    }

    public function getCreatedTimeAttribute()
    {
        return Carbon::parse($this->created_at)->format('H:i:s');
    }
}