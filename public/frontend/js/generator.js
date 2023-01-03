function attractiveQRGenerator(element, userInput, image, inputDotColor, inputEyeColor) {
    const qrcode = new QRCodeStyling({
        width: 250,
        height: 250,
        data: userInput,
        type: 'svg',
        margin: 0,
        image: image ? image : 'https://upload.wikimedia.org/wikipedia/commons/4/44/Facebook_Logo.png',
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
    // qrcode.download({ name: 'qrcode', extension: 'png' });
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
