## Installation

1 - Clone this repository

    git clone https://github.com/rodhisz/Laptop-CRUD.git
2 - Run

    composer install
3 - Run
for macOS or linux

    cp .env.example .env

for windows

    copy .env.example .env

4 - Open your .env file and change the database name (`DB_DATABASE`) to whatever you have, username (`DB_USERNAME`) and password (`DB_PASSWORD`) field correspond to your configuration.

5 - Run

    php artisan key:generate

6 - Run

    php artisan migrate:fresh --seed
7 - And last run

    php artisan serve

Happy Coding ✨
