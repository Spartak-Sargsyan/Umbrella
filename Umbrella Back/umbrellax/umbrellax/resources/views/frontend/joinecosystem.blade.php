@extends('frontend.layouts.master')
@section('content')

    <div class="register__page">
        <div class="container">
            <div class="row">
                <div class="register__left__blog">
                    <div class="bg__img">
                        <img src="{{asset('frontend/img/hand.png')}}" alt="" />
                    </div>
                    <!-- <div class="register__information__blog">
                      <h3 class="information__title">
                        “Technology is our warp drive to cosmic evolution.”
                      </h3>
                      <div class="information__container">
                        <div class="information__img">
                          <img src="./img/Davo.png" alt="" />
                        </div>
                        <div class="information__content">
                          <h6 class="information__name">David A. Yuzbashyan</h6>
                          <p class="information__text">
                            Founder of DX Group ltd & “Umbrella X” Lab
                          </p>
                        </div>
                      </div>
                    </div> -->
                </div>
                <div class="register__right__blog">
                    <div class="form__container">
                        <h2 class="form__title">
                            Apply <span class="span1">for</span>
                            <span class="span2">Student Program</span>
                        </h2>
                        <p class="form__text">Become “Umbrella X” student</p>
                        <form action="{{url('/joinEcosystem')}}" class="register__form" method="post">
                            @csrf
                            <div class="form__blog">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror"/>
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form__blog">
                                <label for="course" class="@error('course') is-invalid @enderror">Select Course</label>
                                <select name="course" id="course">
                                    <option value="modelling">3D Modelling</option>
                                </select>
                                @error('course')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form__blog">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="@error('email') is-invalid @enderror"/>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form__blog">
                                <label for="phone">Phone Number</label>
                                <input type="tell" name="tell" id="tell" class="@error('tell') is-invalid @enderror"/>
                                @error('tell')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form__blog">
                                <label for="data">Date of birth (MM/DD/YY)r</label>
                                <input type="date" name="date" id="date" class="@error('date') is-invalid @enderror"/>
                                @error('date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form__blog">
                                <label for="country">Country</label>
                                <input type="text" name="country" id="country" class="@error('country') is-invalid @enderror"/>
                                @error('country')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form__blog">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="@error('city') is-invalid @enderror" />
                                @error('city')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form__btn">
                                <button type="submit">Submit your application</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
