# Symfony 4 is cool!
## How to register and login
### This is a simple example for beginners
#### In this example you will find:

- Custom Authentication System with Guard
- Load Security Users from the Database (the Entity Provider)
- Custom User Checkers
- "Remember Me" Login Functionality
- CSRF Protection
- Traditional Login Form
- Translation
- and much more...

Can I try it? Yeees, go to [symfony4-login-register.hexim.cz](https://symfony4-login-register.hexim.cz) page.

#### How to install
- 1 step
```
git clone <this repo>
cd ./symfony4-login-registration
composer install --no-dev --optimize-autoloader
```

- 2 step

Configure a web server - [How to](https://symfony.com/doc/current/setup/web_server_configuration.html)
*(do not forget on environments from .env.dist)*

- 3 step
```
#Initialize database
bin/console doctrine:database:create
bin/console doctrine:schema:create
```

- That's it!

#### For contributors
- any contributor are welcome
- if you will find any issue, fork this example and send merge request
- you will be added to the contributor list
- goal of this example is register and login only

#### Contributors
- [heximcz](https://github.com/heximcz)

#### Special thanks to
[Symfony](https://symfony.com/) and [Knp University](https://knpuniversity.com/)

#### License
MIT

some used code (Symfony) is under a Creative Commons BY-SA 3.0 license