window.onload = function () {
    QRCodeGenerator();
}

var image = '';
function readFile(element) {
    if (element.files && element.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            // $('#selectedImage').attr('src', e.target.result);
            image = e.target.result;
            QRCodeGenerator();
        }

        reader.readAsDataURL(element.files[0]);
    }
}

var inputDotColor = '#821a12';
var inputEyeColor = '#821a12';
var inputDotStyle = 'square';
var inputEyeStyle = 'square';

const inputColorFieldDot = document.getElementById('input-color-dot');
const inputColorFieldEye = document.getElementById('input-color-eye');

function changeColor() {
    inputDotColor = inputColorFieldDot.value;
    inputEyeColor = inputColorFieldEye.value;
    QRCodeGenerator();
}

function selectDotStyle(style) {
    inputDotStyle = style;
    QRCodeGenerator();
}
function selectEyeStyle(style) {
    inputEyeStyle = style;
    QRCodeGenerator();
}

function QRCodeGenerator() {
    var userInput = document.getElementById('user-input-text').value;
    userInput = 'Text:' + userInput;

    var element = document.getElementById('qrcode');
    element.innerHTML = '';
    // simpleGenerator(element, userInput);
    // changeColor();
    attractiveQRGenerator(element, userInput, image, inputDotColor, inputEyeColor, inputDotStyle, inputEyeStyle);
}


// function copyQR() {
//     var img = document.querySelector('#qrcode').querySelector('img');
//     const canvas = document.createElement('canvas');
//     canvas.width = img.width;
//     canvas.height = img.height;
//     canvas.getContext('2d').drawImage(img, 0, 0, img.width, img.height);
//     canvas.toBlob((blob) => {
//         navigator.clipboard.write([
//             new ClipboardItem({ 'image/png': blob })
//         ]);
//     }, 'image/png');



// }

// function downloadQR() {
//     var img = document.querySelector('#qrcode').querySelector('img').src;
//     var link = document.createElement('a');
//     link.download = 'qrcode.png';
//     link.href = img;
//     document.body.appendChild(link);
//     link.click();
//     document.body.removeChild(link);
//     delete link;
// }