# Laravel PHP Framework


## 
```
$ heroku login
$ heroku create blog-del-tp
$ heroku buildpacks:set heroku/php
$ heroku addons:create heroku-postgresql:hobby-dev
$ heroku config:set APP_KEY=$(php artisan key:generate --show)
$ heroku config -s
$ echo “web: vendor/bin/heroku-php-apache2 public/” > Procfile

--- subiendo con git
$ git init
$ git add .
$ git commit -m “commit ..”
$ git push keroku master
-- aplicando las migraciones en heroku
$ heroku run php artisan migrate

-- editar base de dato en heroku
$ heroku pg:psql database --app blog-del-tp
-- para más info
$ heroku pg:psql --help

```