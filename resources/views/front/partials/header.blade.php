<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-lg">

            <div class="hamburger-menu">
                <i class="fas fa-bars"></i>
            </div>


            <ul class="navbar-nav">
                <div class="close-menu">
                    <i class="fas fa-times"></i>
                </div>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">خدمات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">پروژه ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">بلاگ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">تماس با ما</a>
                </li>

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">ورود</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}" target="_blank">پروفایل</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link" onclick="logoutUser()" style="cursor: pointer">خروج</span>
                    </li>
                    <form action="{{ route('logout') }}" method="post" id="logout">
                        @csrf
                    </form>
                @endguest

            </ul>


            <div class="logo">
                <a href="">TopLearn</a>
            </div>
        </div>
    </nav>

    <div class="overlay-menu"></div>
</header>
