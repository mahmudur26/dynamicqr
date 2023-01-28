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
                <a href="">My QR Codes</a>
                <a href="">Generate New</a>
                <a href="">FAQ & Help</a>
                <a href="{{route('logout')}}">Logout</a>
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
                <!-- <div class="input-criteria">
                    <button onclick="formType('planText')" class="criteria-button"><i class="fa-solid fa-globe"></i>Text</button>
                    <button onclick="formType('siteUrl')" class="criteria-button"><i class="fa-regular fa-envelope"></i>URL</button>
                    <button class="criteria-button"><i class="fa-regular fa-plus"></i>Other</button>
                </div> -->
                <div class="input-area">
                    <textarea id="user-input-text" oninput="QRCodeGenerator()" name="planText" autofocus class="input-texarea" rows="4" cols="50" placeholder="Write your text here..."></textarea>
                </div>
                <div class="modification-container">
                    <div class="input-group mb-3 select-image-container">
                        <h5 class="modification-title"><i class="fa-regular fa-image mod-icon"></i>Add Logo</h5>
                        <input onchange="readFile(this)" type="file" name="selectImage" id="selectImage"
                            class="form-control image-input" accept="image/*" src="" alt="">
                    </div>
                    <div class="select-dot-color-container additional-style">
                        <h5 class="modification-title"><i class="fa-solid fa-droplet mod-icon"></i>Choose Dot Color</h5>
                        <input class="color-input" type="color" name="inputColor" id="input-color-dot">
                        <i class="fa-solid fa-eye-dropper dropper-icon"></i>
                        <button id="dot-color-btn" class="color-select-btn" onclick="changeColor()">Select</button>
                    </div>
                    <div class="select-eye-color-container additional-style">
                        <h5 class="modification-title"><i class="fa-solid fa-droplet mod-icon"></i>Choose Eye Color</h5>
                        <input class="color-input" type="color" name="inputColor" id="input-color-eye">
                        <i class="fa-solid fa-eye-dropper dropper-icon"></i>
                        <button class="color-select-btn" onclick="changeColor()">Select</button>
                    </div>
                    <div class="select-style-container">
                        <div class="select-dot-style-container additional-style">
                            <h5 class="modification-title"><i class="fa-solid fa-qrcode mod-icon"></i>Choose Dot Style</h5>
                            <button class="style-select-btn" id="input-dot-style-square" onclick="selectDotStyle('square','input-dot-style-square')">Square</button>
                            <button class="style-select-btn" id="input-dot-style-dot" onclick="selectDotStyle('dots', 'input-dot-style-dot')">Dot</button>
                            <button class="style-select-btn" id="input-dot-style-rounded" onclick="selectDotStyle('rounded','input-dot-style-rounded')">Rounded</button>
                            <button class="style-select-btn" id="input-dot-style-extra-rounded" onclick="selectDotStyle('extra-rounded','input-dot-style-extra-rounded')">Extra Rounded</button>
                            <button class="style-select-btn" id="input-dot-style-classy-rounded" onclick="selectDotStyle('classy-rounded','input-dot-style-classy-rounded')">Classy Rounded</button>
                        </div>
                        <div class="select-eye-style-container additional-style">
                            <h5 class="modification-title"><i class="fa-solid fa-qrcode mod-icon"></i>Choose Eye Style</h5>
                            <button class="style-select-btn" id="input-eye-style-square" onclick="selectEyeStyle('square','input-eye-style-square')">Square</button>
                            <button class="style-select-btn" id="input-eye-style-rounded" onclick="selectEyeStyle('extra-rounded','input-eye-style-rounded')">Rounded</button>
                            <button class="style-select-btn" id="input-eye-style-circle" onclick="selectEyeStyle('rounded','input-eye-style-circle')">Circle</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle-icon"><i class="fa-solid fa-arrow-right"></i></div>
            <div class="qr-container">
                <!-- <div class="qr-criteria">
                    <button id="add-logo-btn" class="criteria-button"><i class="fa-regular fa-image"></i>Add logo</button>
                    <button class="criteria-button"><i class="fa-solid fa-border-all"></i>Add frame</button>
                </div> -->
                <div class="qr-area" id="qrcode">
                    <!-- <img src="https://i.ibb.co/QJsTLmR/frame.png" alt=""> -->
                </div>
                
                <div class="download-button-container">
                    <button onclick="downloadQR()" id="qr-download-button" class="download-button"><i class="fa-solid fa-circle-down"></i>Download PNG</button>
                    <button onclick="createRandomString()" class="copylink-button"><i class="fa-solid fa-copy"></i>Copy Image Link</button>
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
    <script src="{{ asset('frontend/js/html2canvas.js') }}"></script>
</body>
</html>