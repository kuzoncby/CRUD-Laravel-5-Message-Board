@extends('layouts.master')
@section('title','留言板')

@section('content')
    <div class="container">
        <form class="form-horizontal" role="search" action="/store" method="post">
            {!! csrf_field() !!}
            <div class="form-group">
                <input type="text" class="form-control" placeholder="文章标题" name="message_title">
            </div>
            <div class="form-group">
                <textarea name="message_content" rows="10" cols="50" id="content"></textarea>
            </div>
            <button type="submit" class="btn btn-default">添加</button>
        </form>
    </div>

    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content');
    </script>
@stop