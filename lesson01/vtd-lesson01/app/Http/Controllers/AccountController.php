<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index()
    {
        return "<h1>Account Controller; action index; return string";
    }

    public function create()
    {
        return view("account-create");
    }

    // action: return view và data
    public function showDaTa()
    {
        $data = array('10112005','Vu-Tien-Duc');
        return view('account-show',compact('data'));
    }
    // account-lít
    public function list()
    {
        $data = array(
            ["id"=>1,"username"=>"VuDuc","password"=>"ducybyb","fullname"=>"Vũ Tiến Đức"],
            ["id"=>2,"username"=>"Devmaster","password"=>"@master1822","fullname"=>"Master Dev 12"]
        );
        return view('account-list', compact('data'));
    }

    // get database

    public function getAllAccount()
    {
            $data = DB::table('account')->get();
            return view('account-getall', compact('data'));
    }
    
}
