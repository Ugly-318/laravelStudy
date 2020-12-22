<header class="header">
    <div class="container bg-light d-flex justify-content-between align-items-center">
        <div class="d-flex">
            <a class="logo" href="{{route('index')}}">Laravel</a>
            <form class="form-inline my-2 my-lg-0 ml-3">
                <input class="form-control form-control-sm" type="search" placeholder="搜索" aria-label="Search">
                <button class="btn btn-sm btn-outline-success ml-2 px-4" type="submit">搜索</button>
            </form>
        </div>
        <div class="right-btn">
            @auth
                <a href="{{route('user.info')}}" class="text-dark mr-3 text-decoration-none">
                    <img width="30" height="30" src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('img/default/avatar.jpg')}}" class="rounded-pill" alt="用户头像加载失败">
                    <span>{{auth()->user()->name}}</span>
                </a>
                <form method="post" action="{{route('logout')}}" class="d-inline" id="logout">
                    @csrf
                    <a href="javascript:;" onclick="document.getElementById('logout').submit()" class="text-dark text-decoration-none">退出</a>
                </form>
            @else
                <a href="{{route('login')}}"  class="btn btn-sm btn-primary">登录</a>
                <a href="{{route('register')}}"  class="btn btn-sm btn-outline-success ml-2">注册</a>
            @endauth
        </div>
    </div>
</header>
