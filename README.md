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

## Start Stack ##

* `docker compose run --entrypoint "composer install"  php-cli` - installs composer dependencies
* `docker compose up -d` - starts server
