<div class="full-container">
    <div class="sign-in-container-full d-flex align-items-center justify-content-center">
        <form class="sign-in-container d-flex align-items-center justify-content-center" action="{{route('register-user')}}" method="post">
            <div class="form-label p-4 d-flex align-items-center justify-content-center">
                <h2>Sign up</h2>
            </div>
            @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
            @csrf
            <div class="input-contianer d-flex align-items-center justify-content-center">
                <div class="input-group mb-3">
                    <input id="input-email" type="email" name="email" placeholder="Email" class="email-field form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <input id="input-phone" type="text" name="phone" placeholder="Phone" class="email-field form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <input id="input-pass" type="password" name="password" placeholder="Password" class="pass-field form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <input id="input-pass" type="password" name="password_confirmation" placeholder="Confirm Password" class="pass-field form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <button type="submit" class="sign-in-btn btn btn-success">Sign up</button>
                <hr>
                <div class="bottom-links d-flex align-items-center justify-content-center">
                    <p class="p-1 m-0">Already registered? <a href="{{route('login')}}">Sign in</a></p>
                </div>
            </div>
        </form>
    </div>
</div>