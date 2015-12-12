@extends('layouts.master')
@section('title','留言板')

@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>文章编号</th>
                <th>标题</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($message as $message)
                <tr>
                    <td>{{$message-> message_id}}</td>
                    <td>{{$message-> message_title}}</td>
                    <td>
                        <a href="/show/{{$message->message_id}}">查看/编辑</a>
                        <a href="/destroy/{{$message->message_id}}">删除</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop