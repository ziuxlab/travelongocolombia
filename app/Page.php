<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\View;

class Page extends Model
{
    //
    use SoftDeletes;
    
    
    protected $table = 'pages';
    
    protected $fillable = [
        'slug_url',
        'name',
        'tittle',
        'body',
        'meta_description',
        'keywords',
        'status',
        'menu',
        'menu_order',
        'local',
        'img',
        'tipo',
    ];
    
    public static function extract_views($page){
        $inicial = strpos($page->body, '{') + 1;
        $final = strpos($page->body, '}');
        $view = 'app.'.substr($page->body, $inicial ,$final - $inicial);
            if(View::exists($view)){
                return $view;
            }else{
                 abort(404);
            }
    }
    
}
