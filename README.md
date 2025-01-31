# php-klarna-payments

The payments API is used to create a session to offer Klarna's payment methods as part of your checkout. As soon as the purchase is completed the order should be read and handled using the [`Order Management API`](https://docs.klarna.com/api/ordermanagement).

Read more on [Klarna payments](https://docs.klarna.com/klarna-payments/).


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/tuutti/php-klarna-payments.git"
    }
  ],
  "require": {
    "tuutti/php-klarna-payments": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/php-klarna-payments/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = Klarna\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Klarna\Payments\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization_token = 'authorization_token_example'; // string

try {
    $apiInstance->cancelAuthorization($authorization_token);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelAuthorization: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.klarna.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrdersApi* | [**cancelAuthorization**](docs/Api/OrdersApi.md#cancelauthorization) | **DELETE** /payments/v1/authorizations/{authorizationToken} | Cancel an existing authorization
*OrdersApi* | [**createOrder**](docs/Api/OrdersApi.md#createorder) | **POST** /payments/v1/authorizations/{authorizationToken}/order | Create a new order
*OrdersApi* | [**purchaseToken**](docs/Api/OrdersApi.md#purchasetoken) | **POST** /payments/v1/authorizations/{authorizationToken}/customer-token | Generate a consumer token
*SessionsApi* | [**createCreditSession**](docs/Api/SessionsApi.md#createcreditsession) | **POST** /payments/v1/sessions | Create a new payment session
*SessionsApi* | [**readCreditSession**](docs/Api/SessionsApi.md#readcreditsession) | **GET** /payments/v1/sessions/{session_id} | Read an existing payment session
*SessionsApi* | [**updateCreditSession**](docs/Api/SessionsApi.md#updatecreditsession) | **POST** /payments/v1/sessions/{session_id} | Update an existing payment session

## Models

- [Address](docs/Model/Address.md)
- [AssetUrls](docs/Model/AssetUrls.md)
- [Attachment](docs/Model/Attachment.md)
- [AuthorizedPaymentMethod](docs/Model/AuthorizedPaymentMethod.md)
- [CreateOrderRequest](docs/Model/CreateOrderRequest.md)
- [Customer](docs/Model/Customer.md)
- [CustomerRead](docs/Model/CustomerRead.md)
- [CustomerReadCreateToken](docs/Model/CustomerReadCreateToken.md)
- [CustomerTokenCreationRequest](docs/Model/CustomerTokenCreationRequest.md)
- [CustomerTokenCreationResponse](docs/Model/CustomerTokenCreationResponse.md)
- [ErrorV2](docs/Model/ErrorV2.md)
- [MerchantSession](docs/Model/MerchantSession.md)
- [MerchantUrls](docs/Model/MerchantUrls.md)
- [Options](docs/Model/Options.md)
- [Order](docs/Model/Order.md)
- [OrderLine](docs/Model/OrderLine.md)
- [PaymentMethodCategory](docs/Model/PaymentMethodCategory.md)
- [ProductIdentifiers](docs/Model/ProductIdentifiers.md)
- [Session](docs/Model/Session.md)
- [SessionCreate](docs/Model/SessionCreate.md)
- [SessionRead](docs/Model/SessionRead.md)
- [Subscription](docs/Model/Subscription.md)

## Authorization

### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
