# Safe2Pay

Component to integrate payment methods through Safe2Pay platform

## Installation

#### Composer

Start by adding the package to require your composer.json

```bash
composer require lakow/safe2pay-laravel
```

Having loaded dependencies and installed on your project, we will add ServiceProvider and facade.

## ServiceProvider

You need to update your application configuration in order to register the package so it can be loaded by Framework.

To move the MoIP settings file to the Settings folder of your application, simply perform the following command:

```shell
php artisan vendor:publish
```

or
```shell
php artisan vendor:publish --provider="Lakow\Safe2Pay\Providers\PaymentServiceProvider"
```

If you have already published the files, but for some reason need to override them, add the flag '--force' at the end of the previous command.

```shell
php artisan vendor:publish --provider="Lakow\Safe2Pay\Providers\PaymentServiceProvider" --force
```

His `.env` file, add the following values

```
S2P_KEY=authorization_key
S2P_SANDBOX=homologated_true_or_false
```
## License

[The MIT License](https://github.com/artesaos/moip/blob/master/LICENSE)
