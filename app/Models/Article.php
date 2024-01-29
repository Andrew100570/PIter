<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'articles';

    /**
     * Атрибуты, которые должны быть преобразованы в дату
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 'text'
    ];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


    public function check_author()
    {
        //текущий пользователь-Auth::user();

        $user = Auth::user();

        if($user) {
            $user->createToken('mismatch');
            //будем считать,что номер статьи Мы получим из url
            $checkArtikle = $user->article->where('id',explode('/', strrev(URL::current()))[0]);
            if($checkArtikle !== NULL) {
               return $checkArtikle ? TRUE : FALSE;
            }
            return NULL;
        }  


    }


}
