<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic QR Code Generator</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Questrial&display=swap');
        *{
            font-family: 'Questrial', sans-serif;
        }
        .body{
            margin: 0;
        }
        .full-container {
            height: 100vh;
            padding: 0;
            margin: 0;
        }
        .navbar{
            height: 10vh;
            background-color: #158043;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            border-radius: 5px;
            position: sticky;
            top: 0;
        }
        .nav-logo img{
            height: 40px;
            width: 50px;
            padding: 10px;
            margin-left: 10px;
        }
        .main-container{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .input-container{
            width: 60vw;
            height: 90vh;
            margin-right: 20px;
        }
        .qr-container{
            width: 30vw;
            height: 90vh;
        }
        .middle-icon{
            height: 50px;
            width: 50px;
            border-radius: 30px;
            position: absolute;
            margin-left: 387px;
            margin-top: 270px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            background-color: #158043;
            color: white;
        }
        .input-criteria{
            margin-top: 20px;
            height: 70px;
            margin-bottom: 10px;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }
        .qr-criteria{
            margin-top: 20px;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .qr-area{
            height: 350px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .nav-link{
            font-size: 20px;
        }
        .nav-link a{
            text-decoration: none;
            margin: 0px 10px;
            color: white;
            padding: 10px;
            /* transition: 0.3s; */
        }
        .nav-link a:hover{
            border-bottom: 2px solid white;
        }
        .nav-button{
            display: flex;
            flex-direction: row;
        }
        .share-button button{
            height: 50px;
            width: 50px;
            border-radius: 25px;
            border: none;
            margin-right: 20px;
            font-size: 22px;
            color: #158043;
            transition: 0.3s;
        }
        .share-button button:hover{
            box-shadow: 2px 2px 20px black;
        }
        .login-button button{
            height: 50px;
            width: 50px;
            border-radius: 25px;
            border: none;
            margin-right: 20px;
            font-size: 20px;
            color: #158043;
            transition: 0.3s;
        }
        .login-button button:hover{
            box-shadow: 2px 2px 20px black;
        }
        .input-texarea{
            width: 100%;
            height: 400px;
            padding: 30px 30px;
            box-sizing: border-box;
            border: 2px solid #158043;
            border-radius: 5px;
            font-size: 30px;
            resize: none;
            outline: none !important;
        }
        .qr-area img{
            height: 300px;
            width: 300px;
        }
        .criteria-button{
            height: 50px;
            width: 150px;
            margin: 0px 10px;
            font-size: 20px;
            border: none;
            box-shadow: 1px 1px 5px rgb(110, 110, 110);
            border-radius: 25px;
            transition: 0.3s;
        }
        .criteria-button:hover{
            color: white;
            background-color: #158043;
            border: none;
        }
        .criteria-button:focus{
            color: white;
            background-color: #158043;
            border: none;
        }
        .criteria-button i{
            margin-right: 10px;
        }
        .download-button-container{
            display: flex;
            flex-direction: row;
            justify-content: center;
            Align-items: center;
        }
        .download-button, .copylink-button{
            font-size: 18px;
            height: 50px;
            width: 180px;
            margin-right: 10px;
            border: none;
            color: white;
            transition: 0.3s;
            border-radius: 5px;
        }
        .download-button{
            background-color: #158043;
        }
        .copylink-button{
            background-color: #1974d2;
        }
        .download-button:hover{
            background-color: #116636;
        }
        .copylink-button:hover{
            background-color: #165ca3;
        }
                .download-button i, .copylink-button i{
            margin-right: 10px;
        }
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
                    <button class="criteria-button"><i class="fa-regular fa-file-lines"></i>Text</button>
                    <button class="criteria-button"><i class="fa-solid fa-globe"></i>URL</button>
                    <button class="criteria-button"><i class="fa-regular fa-envelope"></i>Email</button>
                    <button class="criteria-button"><i class="fa-regular fa-plus"></i>Other</button>
                </div>
                <div class="input-area">
                <textarea autofocus class="input-texarea" rows="4" cols="50" placeholder="Write your text here..."></textarea>
                </div>
            </div>
            <div class="middle-icon"><i class="fa-solid fa-arrow-right"></i></div>
            <div class="qr-container">
                <div class="qr-criteria">
                    <button class="criteria-button"><i class="fa-regular fa-image"></i>Add logo</button>
                    <button class="criteria-button"><i class="fa-solid fa-border-all"></i>Add frame</button>
                </div>
                <div class="qr-area">
                    <img src="https://i.ibb.co/QJsTLmR/frame.png" alt="">
                </div>
                <div class="download-button-container">
                    <button class="download-button"><i class="fa-solid fa-circle-down"></i>Download PNG</button>
                    <button class="copylink-button"><i class="fa-solid fa-copy"></i>Copy Image Link</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/bcae4cb038.js" crossorigin="anonymous"></script>
</body>
</html>