@extends('layout.app')

@section('title', '发布博客')

@section('style')
    <style>

    </style>
@endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="card mb-3 mt-4">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">标题</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">分类</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>请选择分类</option>
                            <option>php</option>
                            <option>html</option>
                            <option>css</option>
                            <option>js</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">内容</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-25 offset-4">发布</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection

