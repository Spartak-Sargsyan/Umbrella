<header>
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="header__contacts">
                    <div class="header__phone">
                        <i class="fa-solid fa-phone"></i>
                        + (374) 77 800 100
                    </div>
                    <div class="header__email">
                        <a href="#">
                            <i class="fa-solid fa-envelope"></i>
                            my_email@mail.ru
                        </a>
                    </div>
                </div>
                <div class="header__social__icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-telegram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header__navbar">
        <div class="container">
            <div class="row header__row">
                <div class="header__logo">
                    <a href="{{'/'}}">
                        <img src="{{asset('/frontend/img/logo.png')}}" alt="DX" />
                    </a>
                </div>
                <nav class="nav">
                    <button type="button" class="mobile__btn" id="mobile__btn">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <ul class="nav__list"  id="mobile__nav">
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About us</a>
                        </li>
                        <li class="nav__item">
                            <a href="#digital" class="nav__link">Digital xVision</a>
                        </li>
                        <li class="nav__item">
                            <a href="#ecosystem" class="nav__link">Ecosystem</a>
                        </li>
                        <li class="nav__item">
                            <a href="#courses" class="nav__link">Courses</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Press centre</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contacts</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__btn">
                    <a href="{{url('/joinEcosystem')}}" class="middleButton">Join ecosystem</a>
                </div>
            </div>
        </div>
    </div>
</header>
