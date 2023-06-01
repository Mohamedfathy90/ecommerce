@extends('layouts.homepage_layout')

@section ('title','Become A Vendor')

@section ('content')
<main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Pages <span></span> My Account
                </div>
            </div>
        </div>
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="login_wrap widget-taber-content background-white">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h1 class="mb-5">Become A Vendor</h1>
                                            <p class="mb-30">Already have an account? <a href="/vendor/login">Vendor Login</a></p>
                                        </div>
                                        
                                        <form method="post" action="/vendor/register" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <div class="form-group">
                                                <input type="text" required="" name="name"  value="{{old('name')}}"  placeholder="Shop Name" />
                                                @error('name')
												<span class="text-danger">{{ $message }}</span>
												@enderror
                                            </div>
                                        
                                            <div class="form-group">
                                                <input type="text" required="" name="username" value="{{old('username')}}" placeholder="Username" />
                                                @error('username')
												<span class="text-danger">{{ $message }}</span>
												@enderror
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="email" required="" name="email" value="{{old('email')}}" placeholder="Email" />
                                                @error('email')
												<span class="text-danger">{{ $message }}</span>
												@enderror
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="text" required="" name="phone" value="{{old('phone')}}" placeholder="Phone Number" />
                                                @error('phone')
												<span class="text-danger">{{ $message }}</span>
												@enderror
                                            </div>
                                            
                                            <div class="form-group">
                                                <input required="" type="password" name="password" placeholder="Password" />
                                                @error('password')
												<span class="text-danger">{{ $message }}</span>
												@enderror
                                            </div>
                                            
                                            <div class="form-group">
                                                <input required="" type="password" name="password_confirmation" placeholder="Confirm password" />
                                            </div>
                                             
                                            <div class="login_footer form-group mb-50">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value=1 />
                                                        <label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms &amp; Policy.</span></label>
                                                    </div>
                                                    @error('checkbox')
												        <span class="text-danger">{{ $message }}</span>
												        @enderror
                                                </div>
                                                <a href="page-privacy-policy.html"><i class="fi-rs-book-alt mr-5 text-muted"></i>Learn more</a>
                                            </div>
                                            
                                            <div class="form-group mb-30">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login">Submit &amp; Register</button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 pr-30 d-none d-lg-block">
                                <div class="card-login mt-115">
                                    <a href="#" class="social-login facebook-login">
                                        <img src="{{asset('front')}}/assets/imgs/theme/icons/logo-facebook.svg" alt="" />
                                        <span>Continue with Facebook</span>
                                    </a>
                                    <a href="#" class="social-login google-login">
                                        <img src="{{asset('front')}}/assets/imgs/theme/icons/logo-google.svg" alt="" />
                                        <span>Continue with Google</span>
                                    </a>
                                    <a href="#" class="social-login apple-login">
                                        <img src="{{asset('front')}}/assets/imgs/theme/icons/logo-apple.svg" alt="" />
                                        <span>Continue with Apple</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @endsection