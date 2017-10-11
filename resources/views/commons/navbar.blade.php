<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!--/ハンバーガーボタン-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">TaskList</a>
            </div><!--/navbar-header-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <!--ログイン後-->
                        <li>{!! link_to_route('tasks.create','新規タスク追加') !!}</li>
                        <li>{!! link_to_route('logout.get','ログアウト') !!}</li>
                    @else
                    <!--ログイン前-->
                        <li>{!! link_to_route('signup.get','Signup') !!}</li>
                        <li>{!! link_to_route('login.get','Login') !!}</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>