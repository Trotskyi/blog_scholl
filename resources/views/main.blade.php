<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._head')

</head>

<body>


<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <!-- Header -->
@include('partials._header')

            <!-- Banner -->
            @include('partials._slider-banner');

            <!-- Section -->
            <section>
                <header class="major">
                    <h2>Математика</h2>
                </header>
                <div class="features">
                    <article>
                        <span class="icon fa-diamond"></span>
                        <div class="content">
                            <h3>Portitor ullamcorper</h3>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                                facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        </div>
                    </article>
                    <article>
                        <span class="icon fa-paper-plane"></span>
                        <div class="content">
                            <h3>Sapien veroeros</h3>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                                facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        </div>
                    </article>
                    <article>
                        <span class="icon fa-rocket"></span>
                        <div class="content">
                            <h3>Quam lorem ipsum</h3>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                                facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        </div>
                    </article>
                    <article>
                        <span class="icon fa-signal"></span>
                        <div class="content">
                            <h3>Sed magna finibus</h3>
                            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                                facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        </div>
                    </article>
                </div>
            </section>

            <!-- Section -->
            <section>
                <header class="major">
                    <h2>Фізика</h2>
                </header>
                <div class="posts">
                    <article>
                        <a href="#" class="image"><img src="images/pic01.jpg" alt=""/></a>
                        <h3>Interdum aenean</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis
                            ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">More</a></li>
                        </ul>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic02.jpg" alt=""/></a>
                        <h3>Nulla amet dolore</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis
                            ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">More</a></li>
                        </ul>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic03.jpg" alt=""/></a>
                        <h3>Tempus ullamcorper</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis
                            ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">More</a></li>
                        </ul>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic04.jpg" alt=""/></a>
                        <h3>Sed etiam facilis</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis
                            ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">More</a></li>
                        </ul>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic05.jpg" alt=""/></a>
                        <h3>Feugiat lorem aenean</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis
                            ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">More</a></li>
                        </ul>
                    </article>
                    <article>
                        <a href="#" class="image"><img src="images/pic06.jpg" alt=""/></a>
                        <h3>Amet varius aliquam</h3>
                        <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis
                            ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">More</a></li>
                        </ul>
                    </article>
                </div>
            </section>

        </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Login-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @if (Auth::check())

                        <li class="dropdown test1">
                            <a href="/" class="dropdown-toggle txt" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Привіт {{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('posts.index') }}">Posts</a></li>
                                <li><a href="{{ route('categories.index') }}">Categories</a></li>
                                <li><a href="{{ route('tags.index') }}">Tags</a></li>
                                <li><a href="{{ route('users.index') }}">Users</a></li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>

                    @else

                        <a href="{{ route('login') }}" class="btn btn-default txt txtl">Увійти </a>



                    @endif

                </ul>
            </div><!-- /.navbar-collapse -->






            <!-- Menu -->
            @include('partials._menu');

            <!-- Section -->
            @include('partials._mini-post')

        <!-- Section -->
            @include('partials._about_us')

            @include('partials._footer')

        </div>
    </div>

</div>


@include('partials._nav')

<div class="container">
    @include('partials._messages')

    @yield('content')

    @include('partials._footer')

</div> <!-- end of .container -->

@include('partials._javascript')

@yield('scripts')

</body>
</html>
