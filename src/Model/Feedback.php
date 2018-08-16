<?php

namespace Wti\FeedbackForm\Model;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $guarded = [];

    protected $fillable = ['name','message','email'];
}
