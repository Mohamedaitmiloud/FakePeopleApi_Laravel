# FakeClients API

> Laravel 5.7 API that uses the API resources. This is an API for an Clients CRUD app

## Quick Start

``` bash
# Install Dependencies
composer install

# Run Migrations
php artisan migrate

# Import Clients
php artisan db:seed

# Add virtual host if using Apache

# If you get an error about an encryption key
php artisan key:generate
```

## Endpoints

### List all clients with links and meta
``` bash
GET api/clients
```
### Get single client
``` bash
GET api/clients/{id}
```

### Delete client
``` bash
DELETE api/clients/{id}
```

### Add client
``` bash
POST api/clients
name/email...
```

### Update client
``` bash
PUT api/clients
```


```

## App Info

### Author

Mohamed Aitmiloud

### Version

1.0.0

### License

This project is licensed under the MIT License
