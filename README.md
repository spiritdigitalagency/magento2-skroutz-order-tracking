# Skroutz Order Tracking Magento 2 Module

Track and filter orders coming to your online store via Skroutz.

This module provides additional information for orders placed on the [Magento 2](https://magento.com/) store by
customers that came from [Skroutz](http://skroutz.gr/).

* Easily identify Skroutz orders in admin panel through a distinctive label
* Ability to filter Skroutz orders
* Compatible with Magento 2.3.x and Magento 2.4.x

The module is available from the [Github repo]((https://github.com/spiritdigitalagency/magento2-skroutz-order-tracking))
.

> **NOTE**: This module requires an active integration with [Skroutz Analytics](http://developer.skroutz.gr/analytics/) in
order to be able to distinguish skroutz orders. We
recommend [Magento 2 Skroutz Analytics Integration](https://github.com/spiritdigitalagency/magento2-skroutz-analytics)
module.

## Installation

### Install via composer (recommended)

We recommend you to install Spirit_SkroutzOrderTracking module via composer. It is easy to install, update and maintain.

Run the following command in Magento 2 root folder.

#### Install

```
composer require spirit-digital-agency/magento2-skroutz-order-tracking
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

#### Upgrade

```
composer update spirit-digital-agency/magento2-skroutz-order-tracking
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

### Manual

If you don't want to install via composer, you can use this way.

- Download [the latest version here](https://github.com/spiritdigitalagency/magento2-skroutz-order-tracking/archive/master.zip)

- Extract `master.zip` file to `app/code/Spirit/SkroutzOrderTracking`. You should create a folder
  path `app/code/Spirit/SkroutzOrderTracking` if not exist.
- Go to Magento root folder and run upgrade command line to install `Spirit_SkroutzOrderTracking`:

```
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

## Setup

There are no configuration options for this module.

## Author

Name: [Spirit Digital Agency](https://spirit.com.gr/)

Email: [support@spirit.com.gr](mailto:support@spirit.com.gr)

Release Date: 23 - 04 - 2022
