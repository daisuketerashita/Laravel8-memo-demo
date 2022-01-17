<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class MemosController extends Controller
{
    //一覧表示
    public function index(){
        $memos = Memo::orderBy('created_at','desc')->get();
        return view('index',['memos' => $memos]);
    }
}
