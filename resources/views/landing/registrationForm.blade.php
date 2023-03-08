@extends('landing.homeFrame')
@section('content')
<style>
.navbar, .navbar-expand-md{
    position: fixed !important;
    padding-top: 10px !important;
    top: 0;
    border-width: 0 0 1px;
    right: 0;
    left: 0;
    z-index: 1030;
    background: hsla(132, 79%, 68%, 1);
    /* background: linear-gradient(90deg, hsla(132, 79%, 68%, 1) 0%, hsla(101, 62%, 48%, 1) 100%); */
    background: -moz-linear-gradient(90deg, hsla(132, 79%, 68%, 1) 0%, hsla(101, 62%, 48%, 1) 100%);
    background: -webkit-linear-gradient(90deg, hsla(132, 79%, 68%, 1) 0%, hsla(101, 62%, 48%, 1) 100%);
}

.table_caption{
    text-align: center;
    text-transform: uppercase;
    font-size: 35px;
    font-weight: bold;
    color: #111111;
}
.contact-form{
    float: none !important;
    margin-left: auto;
    margin-right: auto;
    padding: 100px 80px;
    border-radius: 15px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.register-btn{
    background-color: forestgreen;
}
.register-btn:hover{
    background-color: rgb(0, 102, 0);
}
</style>
<div id="contact" class="contact-area pt-130">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-wrap">
                    <!-- Contact Form -->
                    <form class="form contact-form"  method="post" action="{{route('register-user')}}">
                        @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        @csrf
                        <p class="table_caption">New User? Register...</p>
                        <div class="row">
                            <div class="form-group col-12 mt-4">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                            </div>
                            <div class="form-group col-12 mt-4">
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required="required">
                            </div>
                            <div class="form-group col-12 mt-4">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="required">
                            </div>
                            <div class="form-group col-12 mt-4">
                                <input type="password" name="password_confirmation" class="form-control" id="password" placeholder="Confirm Password" required="required">
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <div class="actions text-center">
                                        <button type="submit" class="btn btn-lg btn-contact-bg" title="Register!">Register</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <div class="text-center">
                                        <a class="btn btn-lg btn-contact-bg register-btn" title="Already have an account? Login then..." href="{{route('login')}}">Login</a>
                                        <p class="form-messege"></p>
                                    </div>
                            </div>
                        </div>
                    </form>
                    <!-- Contact Form -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection