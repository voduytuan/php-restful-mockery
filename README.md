# php-restful-mockery
Create fake (mockery) Restful API Server in PHP for testing.

## Installation ##
Copy all file to running directory. 
This project come with sample resource 'User', access via:

(GET) http://your-path-lo-mock-server/v1/user

This will return fake data in JSON.

## Classmap ##
Because our controller (resource) is in OOP style (not plain functional php file), so, we need to create classmap if you want to create classname with Camel case, such as 'User'.

So, you need to declare this class map in file "/includes/classmap.php"

## Components ##
This project is composed from Slim framework 2.0 (for Restfuly API) and Faker (for generate fake data).
- Slim framework 2.0: https://github.com/slimphp/Slim
- PHP Faker: https://github.com/fzaninotto/Faker



