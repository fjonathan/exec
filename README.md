# b0 | exec

App to add Name and Email in DB with Ajax.<br>
Show on DataTable when submited.
<br><br>
Name validation: +9 length, alpha & accents, -50 lenght, required.<br>
Email validation: required, mailcheck.

First time validation with jQuery, when submit validation again with PHP.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Requisites

* PHP 7
* mySQL

### Installing

A step by step to execute project.


```
git clone https://github.com/fjonathan/exec.git
```

Create Database SQL

```
CREATE DATABASE exec;
```

Create Table

```
CREATE TABLE data (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
date TIMESTAMP
)
```

## Authors

* **b0nzai** - *All work* - [website](http://b0nzai.com/)


## Built With

* [Eloquent ORM](https://laravel.com/docs/4.2/eloquent) - The framework for Database connection
* [Flow](https://github.com/nramenta/flow) - Template Engine
* [kek91](https://github.com/kek91/PHP-Input-Validation) - Input Validation PHP [modified by me to permit add name with accents]
* [Parsley](https://github.com/guillaumepotier/Parsley.js/) - Input Validation Real Time with Jquery
