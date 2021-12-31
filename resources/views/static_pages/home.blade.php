@extends('layouts.default')
@section('title','主页')
@section('content')
<div class="jumbotron">
    @if(Auth::check())
    <div class="row">
        <div class="col-md-8">
            <section class="status_form">
                @include('shared._status_form')
            </section>
        </div>
        <aside class="col-md-4">
            <section class="user_info">
                @include('shared._user_info',['user'=>Auth::user()])
            </section>
        </aside>
    </div>
    @else
    <h1>Hello Laravel</h1>
    <p class="lead">
        你现在所看到的是<a href="#">
            Laravel入门教程
        </a>的示例项目主页
    </p>
    <p>
        一切，将在这里开始！
    </p>
    <p>
        <a href="{{route('signup')}}" class="btn btn-lg btn-success">
            现在注册
        </a>
    </p>
    @endif
</div>
@stop
