<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="/">買い物リスト</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    <!--<li class="nav-item"><a href="#" class="nav-link">メニュー</a></li>-->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}さん</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"><a href="tasks/create" class="nav-link"><i class="far fa-plus-square mr-2"></i>新規品物の登録</a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item"><a href="/signup" class="nav-link"><i class="fas fa-user-plus mr-2"></i>新規ユーザー登録</a></li>
                    <li class="nav-item"><a href="/login" class="nav-link"><i class="fas fa-lock mr-2"></i>ログイン</a></li>
                @endif
            </ul>
        </div>
    </nav>
</header>