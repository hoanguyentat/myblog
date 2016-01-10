<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticlesComment extends Model
{
    protected $table = 'articlescomment';

    protected $fillable = [
    'articles_id', 'articles_title', 'username', 'comment'
    ];
}
