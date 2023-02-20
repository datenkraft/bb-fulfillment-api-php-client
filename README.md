# Backbone - Fulfillment API PHP Client

## Introduction

The Fulfillment API PHP Client enables you to work with the Fulfillment API.

This PHP package is generated by an API client generator.

## Prerequisites

- PHP 8.0 or later for production

## Installation

You can use [Composer](https://getcomposer.org/). Follow the [installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have composer installed.

~~~~ bash
composer require datenkraft/bb-fulfillment-api-php-client
~~~~

In your PHP script, make sure you include the autoloader:

~~~~ php
require 'path/to/vendor/autoload.php';
~~~~

## Using the library

The library can be used to communicate with the Fulfillment Resource Server.
The Client includes functionalities for every endpoint defined in the openapi.json.
The Client also is auto generated with jane-php using an openapi.json file.

### Creating a client

~~~~ php
require 'path/to/vendor/autoload.php';

// Valid clientId, clientSecret and requested scopes
$clientId = '1234';
$clientSecret = 'abcd';

$config['clientId'] = $clientId;
$config['clientSecret'] = $clientSecret;

$factory = new ClientFactory($config);
$client = Client::createWithFactory($factory);
~~~~

## Licence
This repository is available under the [MIT license](https://opensource.org/licenses/MIT).