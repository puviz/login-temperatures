# Login Temperatures

## About Laravel
Login Temperatures is webapp that will store the current temperature of two cities when a user logs in, and display a historical list of the users login temperatures.

![login_temperatures](https://user-images.githubusercontent.com/31714525/156969288-da2a1207-784a-4b48-94a8-29058fbdacde.png)

Login Temperatures is initiated using PHP(Laravel) and React. Used 

Application is initiated using PHP(Laravel) with repository architecture and Laravel Breeze for frontend implementation (React).In frontend used react hooks for component life cycles meantime used axios for request and get response to frontend. In backend used web routes for render react components through controller Inertia.js. Laravel sanctum is used to authenticate the user.  

## Used Technologies
- Laravel
- Laravel Breeze
- Laravel Sanctum
- React
- MySQL
## Installation
#### Setup backend
- Run ```git clone https://github.com/puviz/login-temperatures.git```
- Run ```cd login-temperatures```
- Run ``` cp .env.example .env```
- Update relevent config keys in .env
- Run ```composer install```

#### Setup database
- Update  relevent config keys in .env
- Run ```php artisan migrate```

#### Setup frontend
- Run ```npm install & npm run dev```

## Thank You
