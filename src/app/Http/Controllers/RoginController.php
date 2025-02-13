<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rogin;
use App\Http\Requests\RoginRequest;

class RoginController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(RoginRequest $request)
    {
        $rogin = $request->only(['name', 'email', 'gender', 'generation', 'message', 'content']);
        // requestに保存された値を取り出し、$roginに格納。キーはviewファイル内のname属性
        return view('confirm', ['rogin' => $rogin]);
        // return view('confirm', compact('rogin'));
    }
    public function store(Request $request)
    {
        $rogin = $request->only(['name', 'email', 'gender', 'generation', 'message', 'content']);
        // フォームから送られてrequestに保管された値を取り出し、$roginに格納。
        Rogin::create($rogin);
        // $roginをデータベースに保存

        return redirect('/')->with('success', 'アンケートを作成しました');
    }
}
