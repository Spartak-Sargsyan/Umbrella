@extends('frontend.layouts.master')
@section('content')
<section class="hero__container">
    <div class="bg__container">
        <div class="container">
            <div class="hero__content">
                <h1 class="hero__title">
                    The future <br />
                    in your hands
                </h1>
                <p class="hero__text">
                    We develop a digital ecosystem of services for people and
                    businesses that help bring their aspirations and dreams to life.
                </p>
                <div class="hero__btn">
                    <button type="button" class="middleButton">Get Started</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about__container" id = "about" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="about__left__blog">
                <img src="{{asset('frontend/img/girl.png')}}" alt="girl" />
            </div>
            <div class="about__right__blog">
                <h4 class="about__min__title">About Us</h4>
                <h3 class="title">
                    Connect and Collaborate in Our Digital Ecosystem
                </h3>
                <p class="about__text">
                    Experience the Power of Digital Collaboration and Shared Spaces
                    with Our Platform
                </p>
                <ul class="about__list">
                    <li class="about__item">
                        Expanding your professional network and accessing new
                        opportunities
                    </li>
                    <li class="about__item">
                        Accessing a variety of shared spaces and tools to facilitate
                        collaboration
                    </li>
                    <li class="about__item">
                        Increasing productivity and efficiency through the use of
                        digital collaboration tools
                    </li>
                    <li class="about__item">
                        Having a central hub for all of your collaboration and
                        networking needs.
                    </li>
                    <li class="about__item">
                        Having a central hub for all of your collaboration and
                        networking needs.
                    </li>
                </ul>
                <button class="about__btn">Join to Digital Ecosystem</button>
            </div>
        </div>
    </div>
</section>
<section class="digital__container" id = "digital" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="digital__left__blog">
                <h3 class="digital__min__title">digital</h3>
                <h2 class="digital__title"><span>X</span>Vision</h2>
                <p class="digital__content">
                    x<span>Vision</span> is Next Generation incubator program for
                    Young entrepreneurs and SME’s. we set out to make the tools the
                    future would be built on. Tools designed to work on industrial
                    scale. hyper-connected.
                </p>
                <div class="digital__btn">
                    <button class="middleButton">Get Started</button>
                </div>
            </div>
            <div class="digital__right__blog">
                <img src="{{asset('frontend/img/robot.png')}}" alt="" />
            </div>
        </div>
    </div>
</section>
<section class="information__container" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="information__blog">
                <h4 class="information__title">How to submit</h4>
                <p class="information__content">
                    To submit please fill application form, and provide a brief
                    overview of your startup,. Additionally, we ask that you provide
                    a short video pitch or slide deck summarizing your proposal.
                </p>
            </div>
            <div class="information__blog">
                <h4 class="information__title">xVision Stages</h4>
                <p class="information__content">
                    Mentorship, Access to resources such as office space, equipment,
                    and other tools needed to run a business, Networking
                    opportunities with potential partners, investors, and customers.
                </p>
            </div>
            <div class="information__blog">
                <h4 class="information__title">benefit</h4>
                <p class="information__content">
                    Mentorship, Access to resources such as office space, equipment,
                    and other tools needed to run a business, Networking
                    opportunities with potential partners, investors, and customers.
                </p>
            </div>
        </div>
    </div>
    <div class="m__auto">
        <button class="middleButton" type="submit">Apply to Incubator</button>
    </div>
</section>
<section class="gallery__container" id = "ecosystem" data-aos="fade-up">
    <div class="container">
        <h4 class="gallery__min__title">365 SPACE COWORKING</h4>
        <h2 class="title">
            Connect and Collaborate in Our Digital Ecosystem
        </h2>
        <div class="row">
            <div class="gallery__left__blog">
                <div class="gallery__min__container">
                    <div class="gallery__col">
                        <img src="{{asset('frontend/img/gallery/gallery1.png')}}" alt="" />
                    </div>
                    <div class="gallery__col">
                        <img src="{{asset('frontend/img/gallery/gallery2.png')}}" alt="" />
                    </div>
                    <div class="gallery__col">
                        <img src="{{asset('frontend/img/gallery/gallery3.png')}}" alt="" />
                    </div>
                    <div class="gallery__col">
                        <img src="{{asset('frontend/img/gallery/gallery4.png')}}" alt="" />
                    </div>
                </div>
            </div>
            <div class="gallery__right__blog">
                <img src="{{asset('frontend/img/gallery/gallery1.png')}}" alt="" />
            </div>
        </div>
    </div>
</section>
<section class="space__container"data-aos="fade-up">
    <div class="container">
        <h2 class="title">Our Spaces</h2>
        <div class="row">
            <div class="space__blog">
                <figure>
                    <img src="{{asset('frontend/img/space1.png')}}" alt="" />
                    <figcaption>Working with team</figcaption>
                </figure>
            </div>

            <div class="space__blue__blog">
                <h3 class="space__title">Private Space</h3>
                <p class="space__content">
                    Comfortable space, Full speed wifi, Free coffe & Snack and many
                    more
                </p>
            </div>
            <div class="space__blog">
                <figure>
                    <img src="{{asset('frontend/img/space2.png')}}" alt="" />
                    <figcaption>Custom Office</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>
<section class="programs__container" id = "courses" data-aos="fade-up">
    <div class="inner__container">
        <div class="container">
            <div class="row">
                <div class="programs__left__blog">
                    <h2 class="programs__title">Our Programs</h2>
                </div>
                <div class="programs__right__blog">
                    <img src="{{asset('frontend/img/3D.png')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="information__container" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="information__blog">
                <h4 class="information__title">How to submit</h4>
                <p class="information__content">
                    To submit please fill application form, and provide a brief
                    overview of your startup,. Additionally, we ask that you provide
                    a short video pitch or slide deck summarizing your proposal.
                </p>
            </div>
            <div class="information__blog">
                <h4 class="information__title">xVision Stages</h4>
                <p class="information__content">
                    Mentorship, Access to resources such as office space, equipment,
                    and other tools needed to run a business, Networking
                    opportunities with potential partners, investors, and customers.
                </p>
            </div>
            <div class="information__blog">
                <h4 class="information__title">benefit</h4>
                <p class="information__content">
                    Mentorship, Access to resources such as office space, equipment,
                    and other tools needed to run a business, Networking
                    opportunities with potential partners, investors, and customers.
                </p>
            </div>
            <div class="information__blog">
                <h4 class="information__title">benefit</h4>
                <p class="information__content">
                    Mentorship, Access to resources such as office space, equipment,
                    and other tools needed to run a business, Networking
                    opportunities with potential partners, investors, and customers.
                </p>
            </div>
            <div class="information__blog">
                <h4 class="information__title">benefit</h4>
                <p class="information__content">
                    Mentorship, Access to resources such as office space, equipment,
                    and other tools needed to run a business, Networking
                    opportunities with potential partners, investors, and customers.
                </p>
            </div>
            <div class="information__blog">
                <h4 class="information__title">benefit</h4>
                <p class="information__content">
                    Mentorship, Access to resources such as office space, equipment,
                    and other tools needed to run a business, Networking
                    opportunities with potential partners, investors, and customers.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="apply__container" data-aos="fade-up">
    <div class="row">
        <div class="apply__left__blog">
            <div class="container">
                <h2 class="apply__title">
                    Unlock your future Apply for our programs today!
                </h2>
                <p class="apply__content">
                    Join our innovative learning centre and explore the world of
                    science and technology.
                </p>
                <div class="apply__btn">
                    <a href="#" class="middleButton">Apply Now</a>
                </div>
            </div>
        </div>
        <div class="apply__right__blog">
            <img src="{{asset('frontend/img/bgGirl.png')}}" alt="" />
        </div>
    </div>
</section>
<section class="information__container" data-aos="fade-up">
    <div class="m__auto">
        <h2 class="title">HOW TO APPLY “UMBRELLA X”</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="information__blog">
                <h4 class="information__title">benefit</h4>
                <p class="information__content">
                    Mentorship, Access to resources such as office space, equipment,
                    and other tools needed to run a business, Networking
                    opportunities with potential partners, investors, and customers.
                </p>
                <div class="information__btn">
                    <button type="button">Apply</button>
                </div>
            </div>
            <div class="information__blog">
                <h4 class="information__title">benefit</h4>
                <p class="information__content">
                    Mentorship, Access to resources such as office space, equipment,
                    and other tools needed to run a business, Networking
                    opportunities with potential partners, investors, and customers.
                </p>
                <div class="information__btn">
                    <button type="button">How it work?</button>
                </div>
            </div>
            <div class="information__blog">
                <h4 class="information__title">benefit</h4>
                <p class="information__content">
                    Mentorship, Access to resources such as office space, equipment,
                    and other tools needed to run a business, Networking
                    opportunities with potential partners, investors, and customers.
                </p>
                <div class="information__btn">
                    <button type="button">What is incubation program?</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="brand__container" data-aos="fade-up">
    <div class="container">
        <h2 class="title">Trusted by amazing Partners since 2018.</h2>
        <div class="row">
            <div class="brand__blog">
                <img src="{{asset('frontend/img/brands/brand1.png')}}" alt="" />
            </div>
            <div class="brand__blog">
                <img src="{{asset('frontend/img/brands/brand2.png')}}" alt="" />
            </div>
            <div class="brand__blog">
                <img src="{{asset('frontend/img/brands/brand3.png')}}" alt="" />
            </div>
            <div class="brand__blog">
                <img src="{{asset('frontend/img/brands/brand1.png')}}" alt="" />
            </div>
            <div class="brand__blog">
                <img src="{{asset('frontend/img/brands/brand2.png')}}" alt="" />
            </div>
            <div class="brand__blog">
                <img src="{{asset('frontend/img/brands/brand3.png')}}" alt="" />
            </div>
        </div>
    </div>
</section>
<section class="world__container" data-aos="fade-up">
    <div class="container">
        <h2 class="title">
            CONNECT TO<br />
            DIGITAL WORLD
        </h2>
        <p class="world__content">
            Built on the shop floor, forged in innovation. See how Plex is
            changing the way manufacturers make things.
        </p>
        <div class="world__btn">
            <button type="button" class="middleButton">Connect Now</button>
        </div>
    </div>
</section>
<section class="touch__container" id = "contact" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="touch__form">
                <h2 class="title">Get in <span>Touch</span></h2>
                <p class="touch__content">
                    DX Group's digital ecosystem is a hub of innovation and
                    collaboration that brings together a range of cutting-edge
                    services and resources.
                </p>
                @if(Session::has('flash_message_error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{ session('flash_message_error') }}</strong>
                    </div>
                @endif
                @if(Session::has('flash_message_success'))
                    @push('scripts')
                        <script>
                            $('html, body').animate({
                                scrollTop: $("#contact").offset().top
                            }, 0);
                        </script>

                    @endpush
                        <div class="alert alert-success">
                            <strong>{{ session('flash_message_success') }}</strong>
                        </div>
                @endif
                <br>
                <form action="{{url('sendMessage')}}" class="touch__forma" method="post">
                    @csrf
                    <div class="form__blog">
                        <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror" />
                        @error('name')
                        @push('scripts')
                            <script>
                                $('html, body').animate({
                                    scrollTop: $("#contact").offset().top
                                }, 0);
                            </script>

                        @endpush
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form__blog">
                        <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror" />
                        @error('email')
                        @push('scripts')
                            <script>
                                $('html, body').animate({
                                    scrollTop: $("#contact").offset().top
                                }, 0);
                            </script>

                        @endpush
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form__blog">
                        <input type="tel" id="tel" name="tel" class="@error('tel') is-invalid @enderror"/>
                        @error('tel')
                        @push('scripts')
                            <script>
                                $('html, body').animate({
                                    scrollTop: $("#contact").offset().top
                                }, 0);
                            </script>

                        @endpush
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form__blog">
                        <textarea  name="message" id="" class="@error('message') is-invalid @enderror" cols="30" rows="10">Please Write </textarea>
                        @error('message')
                        @push('scripts')
                            <script>
                                $('html, body').animate({
                                    scrollTop: $("#contact").offset().top
                                }, 0);
                            </script>

                        @endpush
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="touch__btn">
                        <button type="submit" class="btn">Send</button>
                    </div>
                </form>
                <div class="dx__contacts">
                    <div class="contact__blog">
                        <div class="contacts__icon">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="contacts__content">
                            <h5>Phone</h5>
                            <p>+374 55 040 945</p>
                        </div>
                    </div>
                    <div class="contact__blog">
                        <div class="contacts__icon">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="contacts__content">
                            <h5>email</h5>
                            <p>info@dxe.com</p>
                        </div>
                    </div>
                    <div class="contact__blog">
                        <div class="contacts__icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="contacts__content">
                            <h5>location</h5>
                            <p>Armenia, Gyumri</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="touch__atlas">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021.2143291945026!2d43.8498401!3d40.779302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4041fb39b54cd1df%3A0xb2d4a6a53f0dda71!2sMiassine%20fondation!5e0!3m2!1sen!2sam!4v1702834528948!5m2!1sen!2sam"
                    width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
