# test-livewire

February 2026

Try using [Livewire](https://livewire.laravel.com/docs) to create an application that lists books by following this tutorial:  
[Livewire 3 Crash Course by Net Ninja](https://youtube.com/playlist?list=PL4cUxeGkcC9htKcjQPGQQL3fQHbIxXowN&si=1iNNJ1mjdsW726uc)


Allows users to search books by title, create, and delete books.  

## Useful commands

Create project:  
`composer create-project laravel/laravel [name]`  
`composer install`  
`npm install`


Add livewire:  
`composer require livewire/livewire`

Publish assets (optionnal):  
`php artisan livewire:publish --assets`

Create model, seeder and migration:  
`php artisan make:model [model] -mfs`

Create Livewire component:  
`php artisan make:livewire [name] --class`

Database:  
`php artisan migrate:fresh`  
`php artisan db:seed`

Run project:  
`npm run dev`  
`php artisan serve`

