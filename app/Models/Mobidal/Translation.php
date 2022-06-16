<?php

namespace App\Models\Mobidal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Translation extends Model
{
    use HasFactory;

    public $table = 'translations';

    public $fillable = [
        'en',
        'fr',
    ];

    // public static function get($en){
    //     $trans = null;
    //     $trans = static::where('en', '=', $en)->get();
    //     if($trans){
    //         return $trans;
    //     }
    // }
    public static function getOrCreate($en, $fr){
        // && $trans->first()->fr != null
        $trans = null;
        $trans = static::where('en', '=', $en)->get();
        if($trans->count() > 0){
            // return $trans;
        }else {
            $trans = static::create([
                "en" => $en,
                "fr" => $fr,
            ]);
        }

        return $trans->first()->en;
    }
    public static function getLocale($en){
        $trans = null;
        $trans = static::where('en', '=', $en)->get();
        if($trans->count() > 0 ){
            // return $trans;
        }else {
            $trans = static::create([
                "en" => $en,
                "fr" => null,
            ]);
        }
        // App::setLocale('fr');
        $word = $trans->first()[App::getLocale()];
        return $word ? $word : $trans->first()->en ; 
    }

    public static function __($en){
        $trans = null;
        $trans = static::where('en', '=', $en)->first();
        if($trans->count() > 0 ){
            // return $trans;
        }else {
            $trans = static::create([
                "en" => $en,
            ]);
        }
        // App::setLocale('fr');
        $word = $trans->first()[App::getLocale()];
        return $word ? $word : $trans->first()->en ; 
        // return $trans;
    }

}
