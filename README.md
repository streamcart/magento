# Streamcart Magento 2 module

This module allow an admin user to connect [Streamcart](https://app.streamcart.io/) to the store.

## Prerequisites

- Magento version 2.4.x
- PHP 7.4+

## Installation

This module can be installed via composer:

```shell
composer require streamcart/module-magento2
```

After the installation, run:

```shell
./bin/magento setup:upgrade && ./bin/magento setup:di:compile
```

## Get Started

After installation, you just need to activate the module on the following configuration:
***Stores -> Configuration -> Sales -> Streamcart Settings.***
