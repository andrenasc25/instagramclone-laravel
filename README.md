## About the project

It is a clone of the instagram.com website made in laravel 8. It is still in progress but it already has several features of the real website.

## Stack used

For the backend, Laravel 8 and Mysql Workbench are being used for database management. For the front end pure HTML, CSS and Javascript are being used, as well as some libraries for specific functions like Bootstrap 5, Vue.js and Axios for Http requests.

## How to install

After configuring the .env file, just run the command:
```
php artisan migrate --seed
```
The site will already be installed and populated with some users.
It is also necessary to link the storage to the storage folder inside public, using the command:
```
php artisan storage:link
```

###### Optional

To **register a new user** it is necessary to use Laravel's mailing library. For this it is necessary to configure the .env file with credentials from an SMTP server, the following example uses settings for gmail:
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
You can put in 'MAIL_USERNAME' and in 'MAIL_PASSWORD' your own email credentials, it works normally. But for security reasons you can also set an app password on your gmail account and put it in 'MAIL_PASSWORD', following the [Tutotial](https://support.google.com/mail/answer/185833?hl=en) , works the same way.

## Login as Common User

Already registered users\
login: user@user.com\
password: 12345\
\
login: another@user.com\
password: 12345\
\
login: third@user.com\
password: 12345

## Database

The relational database was made with restrictions to link the foreign keys of the tables when necessary.

![Eer Diagram](https://raw.githubusercontent.com/andre-rep/laravel-instagram-clone/master/public/andre-rep/eer-diagram.png)

## Images from the site

###### Main page

![Home](https://raw.githubusercontent.com/andre-rep/laravel-instagram-clone/master/public/andre-rep/home.png)

###### Settings page

![Config Page](https://raw.githubusercontent.com/andre-rep/laravel-instagram-clone/master/public/andre-rep/config-page.png)

###### User profile page

![Profile](https://raw.githubusercontent.com/andre-rep/laravel-instagram-clone/master/public/andre-rep/profile.png)

###### Chat page

![Chat](https://raw.githubusercontent.com/andre-rep/laravel-instagram-clone/master/public/andre-rep/chat.png)

## What still needs to be done

It is still necessary to implement several features, including:
- Comment on a post
- Add story
- Give 'likes' to posts
- Implement the 'explore' page
- Implement the chat
- Add post saving functionality
- Add the other pages of the route /config, the update of personal information is currently working
- Search by users, hashtags and locations
- Suggestions from new users on the main page