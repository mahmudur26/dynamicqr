var qrcode;

function attractiveQRGenerator(element, userInput, image, inputDotColor, inputEyeColor, inputDotStyle, inputEyeStyle) {
    qrcode = new QRCodeStyling({
        width: 250,
        height: 250,
        data: userInput,
        // type: 'svg',
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
    qrcode.append(element);
}

function downloadQR() {
    qrcode.download({ name: 'qrcode', extension: 'png' });
}


function createRandomString() {
    var randomString = '';
    var length = 6;
    var characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    for (var i = 0; i < length; i++) {
        randomString += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    console.log(randomString);
}

// function simpleGenerator(element, userInput) {
//     let qrcode = new QRCode(element, {
//         text: userInput ? userInput : 'www.udemy.com',
//         width: 250,
//         height: 250,
//         colorDark: '#000000',
//         colorLight: '#ffffff',
//         correctLevel: QRCode.CorrectLevel.H
//     });
// }
