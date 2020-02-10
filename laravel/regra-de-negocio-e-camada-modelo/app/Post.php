<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    //Essa classe de modelo foi criada pelo comando:
    //php artisan make:model Post
    //É possivel criar o modelo e o controllador junto usando o comando:
    //php artisan make:model Post -mcr
    //M de Migration, C de controller, r de Resource
     protected $table = "posts";

     public $timestamps = false; //Isso retira as duas colunas de tempo automatica que o Laravel coloca.

     protected $fillable = [
       'title',
        'subtitle',
        'content'
     ];
     public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value); //Salva automaticamente a coluna Slug, com o mesmo valor de title.
     }
}
