# Solution de gestion apicole 

> Vue.js + Laravel

## Captures

## Spécifications techniques

- Laravel 5.5 
- Vuejs 2 + VueRouter + Vuex + VeeValidate
- Authentication JWT
- Vuetifyjs + Material Icons

## Installation

- `git clone`
- `cd bees-manager`
- `cp .env.example .env`
- `composer install`
- `php artisan key:generate`
- `php artisan jwt:secret`
- `modifier .env`
- `php artisan migrate`
- `npm run prod`

## Usage

#### Developement

#test values
php artisan db:seed --class=DatabaseSeeder

# build and watch
npm run watch
php artisan serve --port=3333

# serve with hot reloading
npm run hot


#### Production

```bash
npm run prod
```
