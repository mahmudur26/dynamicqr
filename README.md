## Code Directories
- [Admin Controller](https://github.com/mahmudur26/dynamicqr/blob/main/app/Http/Controllers/AdminController.php).
- [Admin Views](https://github.com/mahmudur26/dynamicqr/tree/main/resources/views/admin).
- [User Controller](https://github.com/mahmudur26/dynamicqr/blob/main/app/Http/Controllers/QrDbController.php).
- [User Views](https://github.com/mahmudur26/dynamicqr/tree/main/resources/views/user).
- [QR Controller](https://github.com/mahmudur26/dynamicqr/blob/main/app/Http/Controllers/QrDbController.php).
- [QR Views](https://github.com/mahmudur26/dynamicqr/blob/main/resources/views/user/dynamic-qr-code-generator.blade.php).
- [Login Controller](https://github.com/mahmudur26/dynamicqr/blob/main/app/Http/Controllers/LoginController.php).
- [Login View](https://github.com/mahmudur26/dynamicqr/blob/main/resources/views/landing/loginPage.blade.php).
- [Registration Controller](https://github.com/mahmudur26/dynamicqr/blob/main/app/Http/Controllers/RegisterController.php).
- [Registration View](https://github.com/mahmudur26/dynamicqr/blob/main/resources/views/landing/registrationForm.blade.php).


- [All Controller](https://github.com/mahmudur26/dynamicqr/tree/main/app/Http/Controllers)
- [All Views](https://github.com/mahmudur26/dynamicqr/tree/main/resources/views)

## Steps to run the App

Follow the steps to run this app:

- Download the project file as zip from github in `\xampp\htdocs` directory of your machine. Or clone the github repository using Git Bash.
```
https://github.com/mahmudur26/dynamicqr
``` 
- Download composer from the [link](https://getcomposer.org/download/).
- Rename `.env.example` file to `.env` in the project folder.
- Run the command promt in the project directory.
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan serve`
- Go to `http://localhost:8000/`

And the app will run on your local machine.