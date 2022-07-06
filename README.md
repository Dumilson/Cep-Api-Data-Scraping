# Cep Api Data Scraping
## Stacks
 `PHP | Laravel | MySQL | REST`
 ## Requirements to run the application
 `PHP 7+ | Laravel 8 | MySQL | Composer 2.* `
## Project description
 `This project aims to extract the data from the CEP by the terminal and save it in the database.`
## Installing the project
    Git Clone ´https://github.com/Dumilson/Cep-Api-Data-Scraping.git´

    Open the terminal in the root index of the `composer install` project

    Rename .env.example to .env

    Then just run in terminal `php artisan key:generate`

    Now create a Database and import into it the sql script that is in the `databases` directory

    Configure database credentials in .env

## Running the project 
open the terminal in the project root and type

    php artisan serve

## how to use the application
To get the data from the zip code and save it to the bank through the terminal, type this command nai project root

    sintaxe: php artisan save:cep {cep}

    terminal: php artisan save:cep 57435-970
    terminal: CEP data: 57435-970 It was saved in the database

To read and write the data saved in the database I build an Api, here are the tests to be done in postman
https://documenter.getpostman.com/view/20995957/UzJJtcJ7