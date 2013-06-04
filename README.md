ChickenWire example project
==========================

If you want to start using the [ChickenWire PHP framework](http://chickenwire.nl/), the easiest way is
to start with this empty example project.

Prerequisites
---------------------------

ChickenWire has the following prerequisites:

* PHP 5.3+
* .htaccess
* Composer

### Installing Composer

ChickenWire is a Composer package, and can be installed as a requirement 
of your project. Before you checkout this project, make sure you have installed
Composer.

[Composer](http://getcomposer.org/)


Installing ChickenWire
----------------------------

### 1. Clone this project

Start by installing this example project into a folder on your webserver, by cloning
this project, or *downloading a zip*.

```php
git clone git://github.com/rseyferth/chickenwire-exampleproject.git my-project
```


### 2. Install composer packages

Open a terminal/command prompt in the project directory and run a composer install:

```
composer install
```

This will install ChickenWire, along with some dependencies. You can also add more 
dependencies by editing the `composer.json` file.


### 3. Check configuration

Take a look at the default configuration in `Application/Config/Application.php`,
and change the values where necessary.


### 4. Enjoy the chicken

When you now open your browser to the url of your directory, you should now see
the welcome message, indicating that everything works!


Updating ChickenWire
----------------------------

In your `composer.json` the required version of ChickenWire is currently set to
`dev-master`. Once ChickenWire gets out of development status you will be able to
set it to a certain version. 

Meanwhile, to update ChickenWire to the latest development version, simple run 
a composer update:

```
composer update
```


