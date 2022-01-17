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

    //新規メモ作成画面の表示
    public function create(){
        return view('create');
    }

    //新規メモの登録
    public function store(Request $request){
        $content = $request->validate(['content' => 'required|max:500']);
        Memo::create($content);

        return redirect()->route('index');
    }

    //編集メモ画面の表示
    public function edit(Request $request){
        $memo = Memo::find($request->id);
        return view('edit',['memo' => $memo]);
    }

    //編集メモの登録
    public function update(Request $request){
        $memo = Memo::find($request->id);
        $content = $request->validate(['content' => 'required|max:500']);
        $memo->fill($content)->save();

        return redirect()->route('index');
    }
}
