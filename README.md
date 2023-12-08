
![Logo](https://i.ibb.co/MkLczbw/bantu-kios-01.png)


## Introduction

MSMEs/Micro (Small and Medium-Sized Enterprises) is currently growing rapidly. A lot of MSMEs bussiness are being opened especially in Indonesia. These MSMEs have many variety things that they sell. Some of them are able to successfully run the bussiness and some of them are not. In order to overcome the problem, we provide a website that will provide aid for MSMEs owners.

BantuKios is a E-commerce that built using [Laravel 8](https://laravel.com/) (a [PHP](https://www.php.net/) framework). BantuKios is made in purpose to help MSMEs/Micro (Small and Medium-Sized Enterprises) bussiness. In this website there are some features to help them.


 

## Features

In this website, MSMEs owners are able to advertise their products. MSMEs owners also can directly sell their products in our website. So when there's a customer who want to buy their products, they can directly purchase through our website.      
For the admin of the website, they are able to manage the MSMEs products as requested by the owners.  

 
####  As for the MSMEs owners they can :
- Contact our admin to add their products
- Advertise their products in our website
- Directly send their products to the customer


## Project Guide Installation

#### First of all make sure to have the required software :
- [PHP Composer](https://getcomposer.org/download/)
- [XAMPP](https://www.apachefriends.org/download.html)
- Text Editor (We recommend [VS Code](https://code.visualstudio.com/download))

If the required software is already met, then we proceed to the next step :
1. Download the project from out github
2. Place the folder anywhere on your PC directory
3. Start XAMPP with Apache and MySQL server
4. Create database with the name "bantukios" (without quotation marks)
5. Open the project folder using VS Code
6. Press "Ctrl + J" to open the command console (without quotation marks)
7. Type  ```composer install```  and wait until it finish
8. Type ```php artisan migrate``` to Create a table into the MySQL
9. Type ```php artisan optimize``` to optimizing the performance framework
10. Type ```php artisan storage:link``` to link the images
11. Type ```php artisan migrate:fresh --seed``` to insert the data into the MySQL
12. Type ```php artisan serve``` and click the provided link in the console

## Known Issues

- If the website says ```500 server error``` please input these command in the VS Code console command 
```
composer install 
mv .env.example .env 
php artisan cache:clear (or) php artisan optimize
composer dump-autoload 
php artisan key:generate
```
- If there is a PHP version error please input these command in the VS Code console command
```
composer update
```



## Here are some of the website preview

Below is the home menu <br/>
![App Screenshot](https://i.ibb.co/n6mD9mY/ssweb1.png) 
 

Below is the product detail <br/>
![App Screenshot](https://i.ibb.co/p484QT4/ssweb2.png ) 


## Authors

- [@briliyansanjaya](https://github.com/briliyansanjaya) --> 2440042954 - Briliyan Sanjaya Hartono
- [@steveledres](https://github.com/steveledres) --> 2401960492 - Steven Mario Ledres
- [@JetaAdhisatya](https://github.com/JetaAdhisatya) --> 2440044070 - Jeta Adhisatya
- [@zxxcs](https://github.com/zxxcs) --> 2401961412 - Daniel Justine
- [@Arindd](https://github.com/Arindd) --> 2440012895 - Hansen
