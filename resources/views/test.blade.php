@extends('layout.app')

@section('title','测试')

@section('style')


@section('content')
    <p>我是子页面</p>

@endsection

@section('script')
    <script>
        console.log($)
        alert('hello world');
    </script>
@endsection

