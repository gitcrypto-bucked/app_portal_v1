<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NewsModel extends Model
{
    use HasFactory;


    public function insert(array $news)
    {
        if(DB::table('noticias')->insert($news))
        {
            return true;
        }
        else return false;
    }


    public function getAllNews( int $paginate= 18){
        return DB::table('noticias')->whereRaw("active ='1'")->orderBy('created_at', 'desc')->paginate($paginate);
    }

    public function chartNews()
    {
        #return DB::table('noticias')->selectRaw('count(id) as total, created_at as data')->whereRaw('active="1" ')->groupByRaw('id, data')->get();
        return DB::table('noticias')->selectRaw('count(id) as total')->whereRaw('active="1"')->get();

    }

    public function remove($id)
    {
        return DB::table('noticias')->where('id',$id)->update(['active'=>'0']);
    }

}
