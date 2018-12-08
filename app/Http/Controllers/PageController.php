<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }

    public function verification(Request $request)
    {
        dd($request->all());
        // 验证解锁码

        return redirect()->route('index')->cookie('lock', '123', 60);
    }

    public function index()
    {
        // 验证 cookie
        return view('pages.index');
    }

    public function phone(Request $request)
    {
        // 验证cookie
        if ($request->cookie('lock') != '123') {
            // 验证失败 请登录
            return redirect()->route('root')->with('message', '请先验证解锁码');
        }

        dd($request->all());

        // 请求获取号码接口 前端显示号码

    }

    public function verifyCode(Request $request)
    {

    }
}
