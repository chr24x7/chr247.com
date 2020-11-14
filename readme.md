# CHR 24x7 - Cloud Health Records

![CHR247.com Logo](https://raw.githubusercontent.com/IMS94/chr247.com/master/public/logo.png "CHR247.com Logo")

[请点击这里阅读中文](https://github.com/IMS94/chr247.com/blob/master/README.zh-cn.md)

See [Demo](#demo) section for a demo.

This is the official repository of chr247.com cloud platform for small scale clinics. This is a project written in PHP using Laravel framework. Please read [**the contribution guide**](https://github.com/IMS94/chr247.com/blob/master/CONTRIBUTING.md) for information on contributions.

chr247.com won the **Commonwealth Digital Health Award for promoting eHealth among general practitioners** at the [**Commonwealth Medical Association Conference 2016**](https://www.facebook.com/commonwealthdoctors/) and is listed [here](https://scontent.fcmb3-1.fna.fbcdn.net/v/t31.0-8/s720x720/14615584_10154295604103612_6255794136538531020_o.jpg?oh=a50482633c25f6ce313b54312a4eaf57&oe=59956173).

Our mission is to build a global platform for Health Informatics, which is easy to use by clinical staff (Doctors, Nurses, etc..)

- [Introduction](#introduction-to-chr247com)
- [Demo](#demo)
- [Why chr247.com](#why-chr247com)
- [Features](#features)
- [How to install](#how-to-install)
- [Contributions](#contributions)
- [Contact](#contact)

## Introduction to chr247.com

Following youtube video explains what are the capabilities of chr247.com in detail.

[![CHR247.com Step by Step Introduction](http://img.youtube.com/vi/02_pjKzW0cY/0.jpg)](http://www.youtube.com/watch?v=02_pjKzW0cY "CHR247.com Step by Step Introduction")

## Demo
Please visit https://chr247.herokuapp.com and use the following credentials to view a demo.

### Login with role ADMIN of a clinic
```
username: imesha
password: 1234
```
### Login with role DOCTOR of a clinic
```
username: john
password: 1234
```
### Login with role NURSE of a clinic
```
username: jane
password: 1234
```
## Why chr247.com?

- **100% Free and open source**
  - Enjoy all the standard features that any medical practitioner requires for free all day every day!
  - No trial periods
  - No hidden charges
  - No contracts
  - Universal access 
- **Security**
  - All the records are protected by SSL end-to-end encryption so they are only accessed by only you and the people who you grant access to.
  - Easy To Set-Up
  - No installing, updating or maintaining is required by the user. We will do all that for you. Once your account is approved you can immediately start using the system.
- **Easy Access**
  - The entire system is running on cloud technology, so you can securely access your records from anywhere, anytime. All you need is a computer, tablet or a smartphone and an internet connection. 
  
## Features
  
  chr247.com provides simple and easy to use interfaces to handle all the day-to-day tasks of small scale clinics including patient management and inventory management.
  
- **Patient Record Management**
  - Manage all patient records including prescriptions and past medical records. Access patient information from anywhere, anytime

- **Drug Inventory**
  - Manage all the drugs and their stocks. Get notified on the stocks that are running low.

- **Queue Management**
  - Manage patient queues of the clinic by issuing numbers. Update the queue as the patients go in and come out.

- **Access Levels**
  - There are three levels of access. Doctor, nurse and system administrator. So, there’s no need to worry about any confidential information being exposed.

- **Security & Portability**
  - We are using cutting edge technologies to make sure your data is secure while providing the much-required flexibility in access to your information by allowing you to securely access your data from anywhere.

- **Issue & Print Prescriptions**
  - Issue prescriptions to patients and also print them straight from the system with one click of a button.
  
## How to Install
### Developer Installation

To install a development version of chr247.com, please follow the following steps. Since this
webapp is developed using laravel 5.2 following prerequisites exist:
- PHP version between 5.5.9 - 7.1.*
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- PHP XML (DOM) Extension
- PHP MySQL Driver (If MySQL is used as database)

Then follow the following steps to configure project
- First, [composer](https://getcomposer.org/download/) should be installed. This is the package
manager used internally.
- Within the project root directory, 
    - Make sure the permissions for `storage` and `bootstrap/cache`
are set to `776` (i.e writable by the web server) - (Windows users make sure the current user has full permissions to read and write on the folders `storage` and `bootstrap/cache`)
    - Copy the `.env.example` file as `.env` (windows Users- do this using the command prompt  **`copy .env.example .env`** ). Its advisable to have a copy of this file before you do this.
    - Run `composer install` within the project root.`
    - Run `php artisan key:generate` to generate application key.
        - This command will set a newly generated application key to `.env` file.
    - Set the database related information within `.env` file. If you are using a DB otherthan
    MySQL, you may have to add `DB_CONNECTION=<DB Driver Name>` to `.env` file as well.
        - ```
          DB_HOST=<Your DB Host> or DB_HOST=<Your DB Host>:<port number> if using non default settings for mysql 
          DB_DATABASE=<Your DB Name>
          DB_USERNAME=<Your DB Username>
          DB_PASSWORD=<Your DB Password>
          ```
    
    - Run database migrations and seeds with `php artisan migrate:refresh --seed`
    - Run `php artisan serve` this will only provide the page for the development computer
    - Visit [http://localhost:8000] to view the webapp. 
    or
    - Run `php artisan serve --host xxx.xxx.xxx.xxx --port 8000` this will provide page for all computers on the same network 
    - Visit [http://xxx.xxx.xxx.xxx:8000] to view the webapp. 
    
You can use the login
    - username: `imesha`, password: `1234` to login.
  
## Contributions

Please read [**contributing guide**](https://github.com/chr24x7/chr247.com/blob/master/CONTRIBUTING.md) for more details on how to contribute. In summary, chr247.com requires following major imrpovements to be done at the moment.

- [ ] Improvements to prescribe medicine section (Bug fixes and UX improvements)
- [ ] Implement channelling for clinics (When configured, public users can search for a specific clinic and channel the doctor)

**Contributions, bug fixes and feature requests are more than welcome!**
  
## Contact
  For more info visit [chr247.com](https://chr247.herokuapp.com/) or email [imesha.sudasingha@gmail.com](mailto:imesha.sudasingha@gmail.com)
