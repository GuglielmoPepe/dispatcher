# Dispatcher
Dispatcher provides a flexible dispatch component. 

## Table of Contents 
* [Benefits](#benefits)
* [Features](#features)
* [Prerequisites](#prerequisites)
* [Installation](#installation)
* [Usage](#usage)
* [Documentation](#documentation)
* [Support](#support)
* [Faq](#faq)
* [Contributing](#contributing)
* [Contacts](#contacts)
* [Roadmap](#roadmap)
* [Change log](#change-log)
* [License](#license)


## Benefits
- Dispatcher use design pattern
- Dispatcher is flexible
- Dispatcher is simple


## Features 
Dispatcher allows you to create rule-based or convention-based handlers.

Dispatcher allows you to create routes that map HTTP verbs.

Dispatcher use the Chain of Responsability pattern to pass parameters down the chain until it finds the right handler. 

In case there is no handler that can handle the request an exception will be thrown.


## Prerequisites

Requires PHP 7.2.0 or newer.

## Installation
Use Composer

``` bash
$ composer require guglielmopepe/dispatcher
```

## Usage

``` php
$dispatcher = new \Dispatcher\Classes\Handlers\Convention();
$dispatcher->connect(new \Dispatcher\Classes\Handlers\NotFound());


$params = [];

if (isset($_GET['route']))
{
    $params['route'] = $_GET['route'];
}

$route = $dispatcher->handle($params); 

$method = strtolower($_SERVER['REQUEST_METHOD']);

$route->$method();

exit(0);
```


## Documentation
Dispatcher include two default handler: Convention handler and NotFound handler. 

The Convention handler match the value corrisponding 'route' key in handler's parameters or 'Home' route. 

The NotFound handler match the parameters with 'NotFound' route. 

## Support
If you need information, please create a GitHub [issue](https://github.com/GuglielmoPepe/dispatcher/issues).

If you discover a security vulnerability, please send an email to Guglielmo Pepe at [&#105;&#110;&#102;&#111;&#64;&#103;&#117;&#103;&#108;&#105;&#101;&#108;&#109;&#111;&#112;&#101;&#112;&#101;&#46;&#99;&#111;&#109;](&#109;&#97;&#105;&#108;&#116;&#111;&#58;%69%6e%66%6f%40%67%75%67%6c%69%65%6c%6d%6f%70%65%70%65%2e%63%6f%6d). All security vulnerabilities will be promptly addressed.

## Faq
To do.


## Contributing
If you want to say **thank you** and/or support the active development of `dispatcher`:

1. Add a [GitHub Star](https://github.com/GuglielmoPepe/dispatcher/stargazers) to the project.
2. Share the project on social media.
3. Write a review or tutorial on [Medium](https://medium.com/), [Dev.to](https://dev.to/) or personal blog.

## Contacts
If you need information, please create a GitHub [issue](https://github.com/GuglielmoPepe/dispatcher/issues) or send an email to [&#105;&#110;&#102;&#111;&#64;&#103;&#117;&#103;&#108;&#105;&#101;&#108;&#109;&#111;&#112;&#101;&#112;&#101;&#46;&#99;&#111;&#109;](&#109;&#97;&#105;&#108;&#116;&#111;&#58;%69%6e%66%6f%40%67%75%67%6c%69%65%6c%6d%6f%70%65%70%65%2e%63%6f%6d).

## Roadmap
See the list of [open issues](https://github.com/GuglielmoPepe/dispatcher/issues):
- [enhancement](https://github.com/GuglielmoPepe/dispatcher/issues?q=label%3Aenhancement+is%3Aopen+sort%3Areactions-%2B1-desc)
- [bugs](https://github.com/GuglielmoPepe/dispatcher/issues?q=is%3Aissue+is%3Aopen+label%3Abug+sort%3Areactions-%2B1-desc) 


## Change log
Please see [Changelog file](changelog.md) for more information on what has changed recently.

## License
Distributed under the MIT License. Please see [License File](license.md) for more information.

