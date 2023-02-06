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
    @include('header')
    <div id="qr-code-full">
    </div>
    @include('footer')

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