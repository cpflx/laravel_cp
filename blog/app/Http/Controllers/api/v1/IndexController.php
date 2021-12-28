<?php


namespace App\Http\Controllers\api\v1;


use App\Http\Controllers\Controller;
use QL\QueryList;

class IndexController extends Controller
{
    public function index(){
        $res = QueryList::get('http://www.nipic.com')->find('img')->attrs('src')->toArray();
        var_dump($res);
    }
}