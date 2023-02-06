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

var inputDotColor = 'black';
var inputEyeColor = 'black';
var inputDotStyle = 'square';
var inputEyeStyle = 'square';

const inputColorFieldDot = document.getElementById('input-color-dot');
const inputColorFieldEye = document.getElementById('input-color-eye');

function changeColor() {
    inputDotColor = inputColorFieldDot.value;
    inputEyeColor = inputColorFieldEye.value;
    QRCodeGenerator();
}

function selectDotStyle(style, id) {
    inputDotStyle = style;
    // document.getElementById(id).style.backgroundColor = "green";
    // document.getElementById(id).style.backgroundColor = "red";
    switch (id) {

        case 'input-dot-style-square':
            document.getElementById('input-dot-style-square').style.backgroundColor = "#158043";
            document.getElementById('input-dot-style-square').style.color = "white";
            document.getElementById('input-dot-style-square').style.border = "none";
            document.getElementById('input-dot-style-dot').style.backgroundColor = "white";
            document.getElementById('input-dot-style-dot').style.border = "2px solid grey";
            document.getElementById('input-dot-style-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-rounded').style.border = "2px solid grey";
            document.getElementById('input-dot-style-extra-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-extra-rounded').style.border = "2px solid grey";
            document.getElementById('input-dot-style-classy-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-classy-rounded').style.border = "2px solid grey";
            document.getElementById('input-dot-style-dot').style.color = "black";
            document.getElementById('input-dot-style-rounded').style.color = "black";
            document.getElementById('input-dot-style-extra-rounded').style.color = "black";
            document.getElementById('input-dot-style-classy-rounded').style.color = "black";
            break;

        case 'input-dot-style-dot':
            document.getElementById('input-dot-style-square').style.backgroundColor = "white";
            document.getElementById('input-dot-style-square').style.color = "black";
            document.getElementById('input-dot-style-square').style.border = "2px solid grey";
            document.getElementById('input-dot-style-dot').style.backgroundColor = "#158043";
            document.getElementById('input-dot-style-dot').style.color = "white";
            document.getElementById('input-dot-style-dot').style.border = "none";
            document.getElementById('input-dot-style-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-extra-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-classy-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-rounded').style.color = "black";
            document.getElementById('input-dot-style-rounded').style.border = "2px solid grey";
            document.getElementById('input-dot-style-extra-rounded').style.color = "black";
            document.getElementById('input-dot-style-extra-rounded').style.border = "2px solid grey";
            document.getElementById('input-dot-style-classy-rounded').style.color = "black";
            document.getElementById('input-dot-style-classy-rounded').style.border = "2px solid grey";
            break;

        case 'input-dot-style-rounded':
            document.getElementById('input-dot-style-square').style.backgroundColor = "white";
            document.getElementById('input-dot-style-square').style.color = "black";
            document.getElementById('input-dot-style-square').style.border = "2px solid grey";
            document.getElementById('input-dot-style-dot').style.backgroundColor = "white";
            document.getElementById('input-dot-style-dot').style.color = "black";
            document.getElementById('input-dot-style-dot').style.border = "2px solid grey";
            document.getElementById('input-dot-style-rounded').style.backgroundColor = "#158043";
            document.getElementById('input-dot-style-rounded').style.color = "white";
            document.getElementById('input-dot-style-rounded').style.border = "none";
            document.getElementById('input-dot-style-extra-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-extra-rounded').style.color = "black";
            document.getElementById('input-dot-style-extra-rounded').style.border = "2px solid grey";
            document.getElementById('input-dot-style-classy-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-classy-rounded').style.color = "black";
            document.getElementById('input-dot-style-classy-rounded').style.border = "2px solid grey";
            break;

        case 'input-dot-style-extra-rounded':
            document.getElementById('input-dot-style-square').style.backgroundColor = "white";
            document.getElementById('input-dot-style-square').style.color = "black";
            document.getElementById('input-dot-style-square').style.border = "2px solid grey";
            document.getElementById('input-dot-style-dot').style.backgroundColor = "white";
            document.getElementById('input-dot-style-dot').style.color = "black";
            document.getElementById('input-dot-style-dot').style.border = "2px solid grey";
            document.getElementById('input-dot-style-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-rounded').style.color = "black";
            document.getElementById('input-dot-style-rounded').style.border = "2px solid grey";
            document.getElementById('input-dot-style-extra-rounded').style.backgroundColor = "#158043";
            document.getElementById('input-dot-style-extra-rounded').style.color = "white";
            document.getElementById('input-dot-style-extra-rounded').style.border = "none";
            document.getElementById('input-dot-style-classy-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-classy-rounded').style.color = "black";
            document.getElementById('input-dot-style-classy-rounded').style.border = "2px solid grey";
            break;

        case 'input-dot-style-classy-rounded':
            document.getElementById('input-dot-style-square').style.backgroundColor = "white";
            document.getElementById('input-dot-style-square').style.color = "black";
            document.getElementById('input-dot-style-square').style.border = "2px solid grey";
            document.getElementById('input-dot-style-dot').style.backgroundColor = "white";
            document.getElementById('input-dot-style-dot').style.color = "black";
            document.getElementById('input-dot-style-dot').style.border = "2px solid grey";
            document.getElementById('input-dot-style-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-rounded').style.color = "black";
            document.getElementById('input-dot-style-rounded').style.border = "2px solid grey";
            document.getElementById('input-dot-style-extra-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-extra-rounded').style.color = "black";
            document.getElementById('input-dot-style-extra-rounded').style.border = "2px solid grey";
            document.getElementById('input-dot-style-classy-rounded').style.backgroundColor = "#158043";
            document.getElementById('input-dot-style-classy-rounded').style.color = "white";
            document.getElementById('input-dot-style-classy-rounded').style.border = "none";
            break;

        default:
            document.getElementById('input-dot-style-square').style.backgroundColor = "#158043";
            document.getElementById('input-dot-style-square').style.color = "white";
            document.getElementById('input-dot-style-square').style.border = "none";
            document.getElementById('input-dot-style-dot').style.backgroundColor = "white";
            document.getElementById('input-dot-style-dot').style.border = "2px solid grey";
            document.getElementById('input-dot-style-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-rounded').style.border = "2px solid grey";
            document.getElementById('input-dot-style-extra-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-extra-rounded').style.border = "2px solid grey";
            document.getElementById('input-dot-style-classy-rounded').style.backgroundColor = "white";
            document.getElementById('input-dot-style-classy-rounded').style.border = "2px solid grey";
            document.getElementById('input-dot-style-dot').style.color = "black";
            document.getElementById('input-dot-style-rounded').style.color = "black";
            document.getElementById('input-dot-style-extra-rounded').style.color = "black";
            document.getElementById('input-dot-style-classy-rounded').style.color = "black";
            break;
    }
    QRCodeGenerator();
}
function selectEyeStyle(style, id) {
    inputEyeStyle = style;
    switch (id) {
        case 'input-eye-style-square':
            document.getElementById('input-eye-style-square').style.backgroundColor = "#158043";
            document.getElementById('input-eye-style-square').style.color = "white";
            document.getElementById('input-eye-style-square').style.border = "none";
            document.getElementById('input-eye-style-rounded').style.backgroundColor = "white";
            document.getElementById('input-eye-style-circle').style.backgroundColor = "white";
            document.getElementById('input-eye-style-circle').style.color = "black";
            document.getElementById('input-eye-style-rounded').style.color = "black";
            document.getElementById('input-eye-style-circle').style.color = "black";
            document.getElementById('input-eye-style-rounded').style.border = "2px solid grey";
            document.getElementById('input-eye-style-circle').style.border = "2px solid grey";
            break;
        case 'input-eye-style-rounded':
            document.getElementById('input-eye-style-square').style.backgroundColor = "white";
            document.getElementById('input-eye-style-square').style.color = "black";
            document.getElementById('input-eye-style-square').style.border = "2px solid grey";
            document.getElementById('input-eye-style-square').style.backgroundColor = "white";
            document.getElementById('input-eye-style-rounded').style.backgroundColor = "#158043";
            document.getElementById('input-eye-style-rounded').style.color = "white";
            document.getElementById('input-eye-style-rounded').style.border = "none";
            document.getElementById('input-eye-style-rounded').style.backgroundColor = "#158043";
            document.getElementById('input-eye-style-circle').style.backgroundColor = "white";
            document.getElementById('input-eye-style-circle').style.color = "black";
            document.getElementById('input-eye-style-circle').style.border = "2px solid grey";
            document.getElementById('input-eye-style-circle').style.backgroundColor = "white";
            break;
        case 'input-eye-style-circle':
            document.getElementById('input-eye-style-square').style.backgroundColor = "white";
            document.getElementById('input-eye-style-rounded').style.backgroundColor = "white";
            document.getElementById('input-eye-style-square').style.color = "black";
            document.getElementById('input-eye-style-rounded').style.color = "black";
            document.getElementById('input-eye-style-square').style.border = "2px solid grey";
            document.getElementById('input-eye-style-rounded').style.border = "2px solid grey";
            document.getElementById('input-eye-style-circle').style.backgroundColor = "#158043";
            document.getElementById('input-eye-style-circle').style.color = "white";
            document.getElementById('input-eye-style-circle').style.border = "none";
            break;
        default:
            document.getElementById('input-eye-style-square').style.backgroundColor = "#158043";
            document.getElementById('input-eye-style-square').style.color = "white";
            document.getElementById('input-eye-style-square').style.border = "none";
            document.getElementById('input-eye-style-rounded').style.backgroundColor = "white";
            document.getElementById('input-eye-style-circle').style.backgroundColor = "white";
            document.getElementById('input-eye-style-circle').style.color = "black";
            document.getElementById('input-eye-style-rounded').style.color = "black";
            document.getElementById('input-eye-style-circle').style.color = "black";
            document.getElementById('input-eye-style-rounded').style.border = "2px solid grey";
            document.getElementById('input-eye-style-circle').style.border = "2px solid grey";
            break;
    }
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