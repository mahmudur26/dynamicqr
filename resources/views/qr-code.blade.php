@extends('layout')
@section('content')
@include('header')
<div id="qr-code-full">
<!-- <p class="card-text">Input : {{ $qr->user_input }}</p> -->

<div>
    <div class="qr-area" id="new_qrcode">
        <!-- <img src="https://i.ibb.co/QJsTLmR/frame.png" alt=""> -->
    </div>
</div>

<script>
    var new_element = document.getElementById('new_qrcode');
    new_element.innerHTML = '';

    var new_userInput = "<?php echo $qr->user_input; ?>";
    var new_image = null;
    var new_inputDotColor = "<?php echo $qr->dot_color; ?>";
    var new_inputEyeColor = "<?php echo $qr->eye_color; ?>";
    var new_inputDotStyle = "<?php echo $qr->dot_style; ?>";
    var new_inputEyeStyle = "<?php echo $qr->eye_style; ?>";


    window.onload = function () {
        attractiveQRGenerator(new_element, new_userInput, new_image, new_inputDotColor, new_inputEyeColor, new_inputDotStyle, new_inputEyeStyle);
    }
    
    function attractiveQRGenerator(new_element, new_userInput, new_image, new_inputDotColor, new_inputEyeColor, new_inputDotStyle, new_inputEyeStyle) {
    qrcode = new QRCodeStyling({
        width: 150,
        height: 150,
        data: userInput,
        type: 'svg',
        margin: 0,
        image: image ? image : null,
        imageOptions: {
            margin: 4,
            crossOrigin: 'anonymous',
        },
        dotsOptions: {
            color: inputDotColor,
            // type: 'square',
            type: inputDotStyle,
            // type: 'rounded',
            // type: 'extra-rounded',
            // type: 'classy-rounded',
        },
        cornersSquareOptions: {
            color: inputEyeColor,
            // type: 'square',
            type: inputEyeStyle,
            // type: 'rounded',
            // type: 'extra-rounded',
            // type: 'classy-rounded',
        }
    });
    //db tasks  to save the informations
    qrcode.append(new_element);
}
</script>
</div>
@include('footer')