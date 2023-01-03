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
                <a href="">Contact</a>
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
        <div class="main-container">
            <div class="input-container">
                <div class="input-criteria">
                    <button onclick="formType('planText')" class="criteria-button"><i class="fa-solid fa-globe"></i>Text</button>
                    <button onclick="formType('siteUrl')" class="criteria-button"><i class="fa-regular fa-envelope"></i>URL</button>
                    <!-- <button class="criteria-button"><i class="fa-regular fa-plus"></i>Other</button> -->
                </div>
                <div class="input-area">
                    <textarea id="user-input-text" oninput="QRCodeGenerator()" name="planText" autofocus class="input-texarea" rows="4" cols="50" placeholder="Write your text here..."></textarea>
                </div>
            </div>
            <div class="middle-icon"><i class="fa-solid fa-arrow-right"></i></div>
            <div class="qr-container">
                <div class="qr-criteria">
                    <button id="add-logo-btn" class="criteria-button"><i class="fa-regular fa-image"></i>Add logo</button>
                    <button class="criteria-button"><i class="fa-solid fa-border-all"></i>Add frame</button>
                </div>
                <div class="qr-area" id="qrcode">
                    <!-- <img src="https://i.ibb.co/QJsTLmR/frame.png" alt=""> -->
                </div>
                <div class="input-group mb-3 select-image-container">
                    <input onchange="readFile(this)" type="file" name="selectImage" id="selectImage"
                        class="form-control image-input" accept="image/*" src="" alt="">
                </div>
                <div class="select-color-container">
                    <input type="color" name="inputColor" id="input-color-dot">
                    <button onclick="changeColor()">OK</button>
                    <input type="color" name="inputColor" id="input-color-eye">
                    <button onclick="changeColor()">OK</button>
                </div>
                <div class="select-style-container">
                    <button id="input-dot-style" onclick="selectDotStyle('dots')">Dot</button>
                    <button id="input-eye-style" onclick="selectEyeStyle('dots')">Square</button>
                </div>
                <div class="download-button-container">
                    <button class="download-button"><i class="fa-solid fa-circle-down"></i>Download PNG</button>
                    <button class="copylink-button"><i class="fa-solid fa-copy"></i>Copy Image Link</button>
                </div>
            </div>
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
</body>
</html>