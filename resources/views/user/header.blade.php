<div class="header-container">
    <div class="navbar">
        <div class="nav-logo">
            <img src="https://i.ibb.co/cD8Lc8B/logo.png" alt="">
        </div>
        <div class="nav-link">
            <a href="">My QR Codes</a>
            <a href="{{route('qr_generator')}}">Generate New</a>
            <a href="">FAQ & Help</a>
            <a href="{{route('logout')}}">Logout</a>
        </div>
        <div class="nav-button">
            <div class="share-button">
                <button><i class="fa-brands fa-facebook-f"></i></button>
            </div>
            <div class="login-button">
                <a href="{{route('user_profile')}}"><button><i class="fa-solid fa-user"></i></button></a>
            </div>
        </div>
    </div>
</div>