# RESTFULL EN PHP

Página web con interfaz de login y consumo de API de la web:
```http://atypaxtest.herokuapp.com/api```

### Consumos Permitidos: ###

GET ```http://atypaxtest.herokuapp.com/api```

POST ```http://atypaxtest.herokuapp.com/api```

PUT ```http://atypaxtest.herokuapp.com/api/$id```

### Tecnologias ###
 - Laravel 5.2
 - PHP 5.6.30
 - Guzzle Http 6
 - Heroku
 - PostgreSQL
 - Bcrypt (tipo de encriptación para la contraseña)

### Uso ###

Debido a que usa "Guzzle" para consumir la API es necesario que el Restfull este en un servidor ya que en localhost no lo permite.

para ello vamos a usar Heroku, tanto para la web como para el APIRest.

- El comando de inicio para Heroku ya se encuentra en el archivo "Procfile", lo cual no es necesario que se genere otro.
- Crear una base de datos PostgreSQL en heroku con el comando:
    ```sh
    heroku addons:create heroku-postgresql:hobby-dev
    ```
    Una vez creada, las credenciales se encontrarán en tu dashboard de heroku, con ellas se rellena el archivo ".env", en el mismo lugar tendras el comando para que puedas entrar via consola a la base de datos.
- Crear la tabla "users" con sus columnas correspondientes.(ver codigo fuente)

### Archivos ###

Se describe los archivos correspondientes.

***API RestFull:***
```app/Http/Controllers/ApiController.php```

***Consumidor del API:***
```app/Http/Controllers/UserController.php```

***Página Login:***
```app/resources/views/auth/login.blade.php```

***Página home:***
```app/resources/views/home.blade.php```

### Demostración ###
http://atypaxtest.herokuapp.com

***E-Mail Address:*** pablo@gmail.com

***Password:*** admin123

### Observaciones ###
- Falta que solo un autorizado consuma el API, actualmente cualquiera lo puede consumir.
- Falta sanitizar y validar los inputs.