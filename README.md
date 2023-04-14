Select Language: [Portuguese](https://github.com/andrenasc25/instagramclone-laravel/blob/master/README-pt.md), **English**
========

<h1 align="center">Instagram Clone</h1>
<p align="center">A clone project of the instagram.com website</p>

<h4 align="center"> 
	🚀 Under construction...  🚧
</h4>

### Prerequisites

Before starting, you will need to have the following tools installed on your machine:
[Laravel](https://laravel.com/) in version 8, [Mysql Workbench](https://www.mysql.com/products/workbench/), [PHP](https://www.php.net/).
Also it's nice to have an editor to work with the code like [VSCode](https://code.visualstudio.com/)

### 🎲 Running the Back End (server)

```bash
# Clone this repository
$ git clone <https://github.com/andre-rep/instagramclone-laravel>

# Access project folder in terminal/cmd
$ cd instagramclone-laravel

# Install the dependencies
$ composer install

# Open the .env file to edit your workbench server access credentials
$ nano .env

# Rename the .env.example file to .env
$ mv .env.example .env

# Send application data to the workbench
$ php artisan migrate --seed

# Create a link from the storage folder to a folder inside the public folder
$ php artisan storage:link

# Start the server
$ php artisan serve

# The server will start on port:8000 - access <http://localhost:8000>
```

### Login to the application
Three accounts are already created in the application, you can interact with each other. Following, commenting, liking and other functions on the instagram.com website

login: user@user.com\
password: 12345\
\
login: another@user.com\
password: 12345\
\
login: third@user.com\
password: 12345

### Optional

To **register a new user** you need to use Laravel's email library. To do so, configure your .env file with your SMTP server credentials. An example gmail server configuration:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_USERNAME=address@email.com
MAIL_PASSWORD=emailpassword
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"
```
Replace 'MAIL_USERNAME' with your gmail username and 'MAIL_PASSWORD' with your gmail password. If you don't want to use your gmail password, you can create an alternative password just for that application, follow the tutorial for that: [Tutorial](https://support.google.com/mail/answer/185833?hl).

### 🛠 Technologies

The following tools were used in building the project:

- [Laravel](https://laravel.com/)
- [Mysql Workbench](https://www.mysql.com/products/workbench/)
- [Html](https://developer.mozilla.org/pt-BR/docs/Web/HTML)
- [Css](https://developer.mozilla.org/pt-BR/docs/Web/CSS)

### Application screenshots
###### Main page

![Home](https://raw.githubusercontent.com/andre-rep/laravel-instagram-clone/master/public/andre-rep/home.png)

###### Configuration page

![Config Page](https://raw.githubusercontent.com/andre-rep/laravel-instagram-clone/master/public/andre-rep/config-page.png)

###### User profile page

![Profile](https://raw.githubusercontent.com/andre-rep/laravel-instagram-clone/master/public/andre-rep/profile.png)

###### Chat page

![Chat](https://raw.githubusercontent.com/andre-rep/laravel-instagram-clone/master/public/andre-rep/chat.png)

###### Relational database

![Eer Diagram](https://raw.githubusercontent.com/andre-rep/laravel-instagram-clone/master/public/andre-rep/eer-diagram.png)