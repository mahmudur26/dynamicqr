@extends('layout')
@section('content')
@include('header')
<div id="qr-code-full">
<!-- <p class="card-text">Input : {{ $qr->user_input }}</p> -->

<div>
    <div class="new-qr-area" id="new_qrcode">
        <!-- <img src="https://i.ibb.co/QJsTLmR/frame.png" alt=""> -->
    </div>
    <button onclick="downloadQR()" type="button" class="btn btn-primary">Download</button>
</div>

<script>

    var new_qrcode;

    var new_element = document.getElementById('new_qrcode');
    new_element.innerHTML = '';

    var new_userInput = "<?php echo $qr->user_input; ?>";
    var new_image = null;
    var new_inputDotColor = "<?php echo $qr->dot_color; ?>";
    var new_inputEyeColor = "<?php echo $qr->eye_color; ?>";
    var new_inputDotStyle = "<?php echo $qr->dot_style; ?>";
    var new_inputEyeStyle = "<?php echo $qr->eye_style; ?>";


    window.onload = function () {
        newAttractiveQRGenerator(new_element, new_userInput, new_image, new_inputDotColor, new_inputEyeColor, new_inputDotStyle, new_inputEyeStyle);
    }
    
    function newAttractiveQRGenerator(new_element, new_userInput, new_image, new_inputDotColor, new_inputEyeColor, new_inputDotStyle, new_inputEyeStyle) {
        new_qrcode = new QRCodeStyling({
        width: 550,
        height: 550,
        data: new_userInput,
        type: 'svg',
        margin: 0,
        image: image ? image : null,
        imageOptions: {
            margin: 4,
            crossOrigin: 'anonymous',
        },
        dotsOptions: {
            color: new_inputDotColor,
            // type: 'square',
            type: new_inputDotStyle,
            // type: 'rounded',
            // type: 'extra-rounded',
            // type: 'classy-rounded',
        },
        cornersSquareOptions: {
            color: new_inputEyeColor,
            // type: 'square',
            type: new_inputEyeStyle,
            // type: 'rounded',
            // type: 'extra-rounded',
            // type: 'classy-rounded',
        }
    });
    //db tasks  to save the informations
    new_qrcode.append(new_element);
}

function downloadQR() {
    new_qrcode.download({ name: 'qrcode', extension: 'png' });
}

</script>
</div>
@include('footer')