@extends('user.layout')
@section('content')
@include('user.header')
<form action="{{route('store-qr')}}" method="post">
{!! csrf_field() !!}
    <div class="full-container">
        <div class="main-container">
            <div class="input-container">
                <!-- <div class="input-criteria">
                    <button onclick="formType('planText')" class="criteria-button"><i class="fa-solid fa-globe"></i>Text</button>
                    <button onclick="formType('siteUrl')" class="criteria-button"><i class="fa-regular fa-envelope"></i>URL</button>
                    <button class="criteria-button"><i class="fa-regular fa-plus"></i>Other</button>
                </div> -->
                <div class="input-area">
                    <input required id="user-input-text" oninput="QRCodeGenerator()" name="user_input" autofocus class="input-texarea mb-4" rows="4" cols="50" placeholder="Write your text here..."></input>
                </div>
                <div class="modification-container">
                    <div class="input-group mb-3 select-image-container">
                        <h5 class="modification-title"><i class="fa-regular fa-image mod-icon"></i>Add Logo</h5>
                        <input onchange="readFile(this)" type="file" name="logo_name" id="selectImage"
                            class="form-control image-input" accept="image/*" src="" alt="">
                    </div>
                    <div class="select-dot-color-container additional-style">
                        <h5 class="modification-title"><i class="fa-solid fa-droplet mod-icon"></i>Choose Dot Color</h5>
                        <input class="color-input" type="color" name="dot_color" id="input-color-dot">
                        <i class="fa-solid fa-eye-dropper dropper-icon"></i>
                        <input type="button" id="dot-color-btn" class="color-select-btn" onclick="changeColor()" value="Select"></input>
                    </div>
                    <div class="select-eye-color-container additional-style">
                        <h5 class="modification-title"><i class="fa-solid fa-droplet mod-icon"></i>Choose Eye Color</h5>
                        <input class="color-input" type="color" name="eye_color" id="input-color-eye">
                        <i class="fa-solid fa-eye-dropper dropper-icon"></i>
                        <input type="button" class="color-select-btn" onclick="changeColor()" value="Select"></input>
                    </div>
                    <div class="select-style-container">
                        <div class="select-dot-style-container additional-style">
                            <h5 class="modification-title"><i class="fa-solid fa-qrcode mod-icon"></i>Choose Dot Style</h5>
                            <input type="radio" class="style-select-btn" id="input-dot-style-square" onclick="selectDotStyle('square','input-dot-style-square')" name="dot_style" value="square"></input>
                            <label class="style-label" for="input-dot-style-square">Square</label>
                            <input type="radio" class="style-select-btn" id="input-dot-style-dot" onclick="selectDotStyle('dots', 'input-dot-style-dot')" name="dot_style" value="dots"></input>
                            <label class="style-label" for="input-dot-style-dot">Dots</label>
                            <input type="radio" class="style-select-btn" id="input-dot-style-rounded" onclick="selectDotStyle('rounded','input-dot-style-rounded')" name="dot_style"  value="rounded"></input>
                            <label class="style-label" for="input-dot-style-rounded">Rounded</label>
                            <input type="radio" class="style-select-btn" id="input-dot-style-extra-rounded" onclick="selectDotStyle('extra-rounded','input-dot-style-extra-rounded')" name="dot_style"  value="extra-rounded"></input>
                            <label class="style-label" for="input-dot-style-extra-rounded">Extra Rounded</label>
                            <input type="radio" class="style-select-btn" id="input-dot-style-classy-rounded" onclick="selectDotStyle('classy-rounded','input-dot-style-classy-rounded')" name="dot_style"  value="classy-rounded"></input>
                            <label class="style-label" for="input-dot-style-classy-rounded">Classy Rounded</label>
                        </div>
                        <div class="select-eye-style-container additional-style">
                            <h5 class="modification-title"><i class="fa-solid fa-qrcode mod-icon"></i>Choose Eye Style</h5>
                            <input type="radio" class="style-select-btn" id="input-eye-style-square" onclick="selectEyeStyle('square','input-eye-style-square')" name="eye_style" value="square"></input>
                            <label class="style-label" for="input-eye-style-square">Square</label>
                            <input type="radio" class="style-select-btn" id="input-eye-style-rounded" onclick="selectEyeStyle('extra-rounded','input-eye-style-rounded')" name="eye_style" value="extra-rounded"></input>
                            <label class="style-label" for="input-eye-style-rounded">Extra Rounded</label>
                            <input type="radio" class="style-select-btn" id="input-eye-style-circle" onclick="selectEyeStyle('rounded','input-eye-style-circle')" name="eye_style" value="rounded"></input>
                            <label class="style-label" for="input-eye-style-circle">Circle</label>
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
                    <img src="https://i.ibb.co/QJsTLmR/frame.png" alt="">
                </div>
                
                <div class="download-button-container">
                    <input type="submit" onclick="" id="qr-download-button" class="download-button" value="Generate">
                </div>
            </div>
        </div>
    </div>   
</form>
@include('user.footer')
@endsection
