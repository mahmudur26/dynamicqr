<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Dynamic QR Code Generator</title>
    <style>
    
    </style>
</head>
<body>
    <div class="full-container">
        <div class="navbar">
            <div class="nav-logo">
                <img src="https://i.ibb.co/cD8Lc8B/logo.png" alt="">
            </div>
            <div class="nav-link">
                <a href="">About</a>
                <a href="">Help</a>
            </div>
            <div class="nav-button">
                <div class="share-button">
                    <button><i class="fa-brands fa-facebook-f"></i></button>
                </div>
                <div class="login-button">
                    <button><i class="fa-solid fa-user"></i></button>
                </div>
            </div>
        </div>
        <div class="sign-in-container-full d-flex align-items-center justify-content-center">
            <form class="sign-in-container d-flex align-items-center justify-content-center">
                <div class="form-label p-4 d-flex align-items-center justify-content-center">
                    <h2>Sign in</h2>
                </div>
                <div class="input-contianer d-flex align-items-center justify-content-center">
                    <div class="input-group mb-3">
                        <input id="input-email" oninput="validateEmail()" type="email" placeholder="Email" class="email-field form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <input id="input-pass" oninput="validatePass()" type="password" placeholder="Password" class="pass-field form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <button type="submit" class="sign-in-btn btn btn-success">Sign in</button>
                    <hr>
                    <div class="bottom-links d-flex align-items-center justify-content-center">
                        <p class="p-1 m-0">Forget password? <a href="">Reset</a></p>
                        <p class="p-1 m-0">Not registered yet? <a href="">Sign up</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
    <script src="https://kit.fontawesome.com/bcae4cb038.js" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- qr-code-cdn -->
    <script src="{{ asset('frontend/js/qrcode.min.js') }}"></script>
    <script src="{{ asset('frontend/js/resource.js') }}"></script>
    <script src="{{ asset('frontend/js/generator.js') }}"></script>
    <script src="{{ asset('frontend/js/qr-code-style.js') }}"></script>
    <script src="{{ asset('frontend/js/html2canvas.js') }}"></script>
</body>
</html>