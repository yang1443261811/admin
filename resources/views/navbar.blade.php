<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Branding Image -->
            <a class="navbar-brand" href="/post">
                <img src="/images/logo-w.png" alt="Powered By Jiajian Chan" class="logo">
                Yang Blog
            </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="/post">文章</a></li>
                <li><a href="/discussion">讨论</a></li>
                <li><a href="https://pigjian.com/share">分享</a></li>
                <li><a href="https://manual.pigjian.com" target="_blank">文档</a></li>
                <li><a href="https://pigjian.com/donate">打赏</a></li>
                <li><a href="http://example.pigjian.com">例子</a></li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Search Box -->
                <li>
                    <form class="navbar-form navbar-right search" role="search" method="get" action="/post/search">
                        <input type="text" class="form-control" name="q" placeholder="搜索" required>
                    </form>
                </li>
                @if(Auth::check())
                <!-- Authentication Links -->
                <li class="notification">
                    <a href="/user/notification">
                        <i class="ion-android-notifications">
                            <span class="new"></span>
                        </i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{(\Auth::user())->name}}
                        <b class="caret"></b>&nbsp;&nbsp;
                        <img class="avatar img-circle" src="{{(\Auth::user())->avatar}}">
                    </a>

                    <ul class="dropdown-menu text-center" role="menu">
                        <li><a href="/user/center/{{\Auth::user()->id}}"><i class="ion-person"></i>个人中心</a></li>
                        <li><a href="/user/setting"><i class="ion-gear-b"></i>个人设置</a></li>
                        @if(Auth::user()->is_admin)
                        <li><a href="/admin/dashboard"><i class="icon ion-speedometer"></i>仪表盘</a></li>
                        @endif
                        <li class="divider"></li>
                        <li>
                            <a href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="ion-log-out"></i>退出
                            </a>
                            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li><a href="/login">登录</a></li>
                <li><a href="/register">注册</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>