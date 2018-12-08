@extends('layouts.app')
@section('title', '首页')

@section('content')
    <form class="form-inline has-error" action="{{ route('phone') }}" method="get">
        <button type="submit" class="btn btn-default">获取号码</button>
    </form>
@stop

@section('scripts')
    {{--循环调用 获取验证码接口--}}
    <script>

    </script>
@stop