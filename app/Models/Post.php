<?php

namespace App\Models;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Traits\Mutators\PostMutators;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
        //PostMutators; 

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        
        return 'slug';
    }

    //
    // public function getExtractAttribute($value){

    //     $locale = App::getLocale();

    //     if ($this->locale == $locale) {
            
    //         return $value;
    //     }

    //     $translation = DB::table('translations')
    //         ->where('table', $this->table)
    //         ->where('column', 'extract')
    //         ->where('row_id', $this->id)
    //         ->first();


    //         if($translation){
    //             return $translation->translation;
    //         }else{
    //             return $value;
    //         }
    // }

    // public function getBodyAttribute($value){

    //     $locale = App::getLocale();

    //     if ($this->locale == $locale) {
            
    //         return $value;
    //     }

    //     $translation = DB::table('translations')
    //         ->where('table', $this->table)
    //         ->where('column', 'body')
    //         ->where('row_id', $this->id)
    //         ->first();


    //         if($translation){
    //             return $translation->translation;
    //         }else{
    //             return $value;
    //         }
    // }

    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion muchos a muchos

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relacion uno a uno polimorfica

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    //

    public function comments(){

        return $this->morphMany('App\Models\Comment', 'commentable')->latest();
    }
}
