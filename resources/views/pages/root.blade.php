@extends('layouts.app')
@section('title', '首页')

@section('content')
    <h1>这里是首页</h1>

    <form class="form-inline has-error" action="{{ route('verfication') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="code" class="sr-only">解锁码</label>
            <input type="text" class="form-control" name="code" id="code" placeholder="输入解锁码">
        </div>

        <button type="submit" class="btn btn-default">立即解锁</button>
    </form>
@stop