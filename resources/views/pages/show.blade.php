@extends('layouts.master')
@section('title','留言板')

@section('content')
    <div class="container">
        <form class="form-horizontal" role="search" action="/update" method="post">
            {!! csrf_field() !!}
            <div class="form-group">
                <input type="text" class="form-control" name="message_title" value="{{$message->message_title}}">
            </div>
            <div class="form-group">
                <textarea name="message_content" rows="10" cols="50"
                          id="content">{{$message->message_content}}</textarea>
            </div>
            <button type="submit" class="btn btn-default">修改</button>
        </form>
        <a href="/">返回列表</a>
    </div>

    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content');
    </script>
@stop