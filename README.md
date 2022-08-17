# Frameworks Workshop #

Repository that showcases the core components of a framework and puts together a custom fully-featuredframework using:

* phpleague router
* php-di dependency injection container

## Homework ##

Add caching adapter (as previously created with either Memcached or Redis implementations) in the container.

Goals:

* add a new entry in the container (`./config/containers/classes.php`) that provides either Memcached or Redis cache adapter base on an environment variable
* create new route (method not important) that allows setting a value in the cache under a certain key
* create a new route (method not important) that fetches an arbitrary key from cache and returns the content as part of response (or returns a 404 response if the key doesn't exist or is empty)

Bonus goal:

* make the caching adapter compliant to PSR simple cache (eg: implement said interfaces)

Hint:

* the container is just a key/value array. The key is just a string, however what makes Autowiring tick is the convention that the key should be a class or prefferably interface describing what the value will be (or what the function wil return). An entry like

```php
LoggerInterface => function() {
  ....
},
```

will expect that the function will return an implementation of LoggerInterface. Nothing will break if you return a string (for example), but if you ever use the interface in a constructor like `function __construct(LoggerInterface $logger)` you might get an error when the DI container tries to pass a string instead of a LoggerInterface object.

## Start Stack ##

* `docker compose run --entrypoint "composer install"  php-cli` - installs composer dependencies
* `docker compose up -d` - starts server

## Reading ##

* <https://www.php-fig.org/psr/>
* <https://php-di.org/doc/autowiring.html>
* <https://route.thephpleague.com/5.x/controllers/>
