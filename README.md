# Magenizr SuezCanal
Display a simple notification across your store and let your customers know about potential supply shortages.

![Magenizr SuezCanal - Frontend](https://images2.imgbox.com/4a/ea/4eCuilKJ_o.gif)

## System Requirements
- Magento 2.3.x, 2.4.x
- PHP 5.6.x, 7.x

## Installation (Composer)

1. Update your composer.json `composer require "magenizr/magento2-suezcanal":"1.0.1" --no-update`
2. Install dependencies and update your composer.lock `composer update --lock`

```
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)              
Package operations: 1 install, 0 updates, 0 removals
  - Installing magenizr/magento2-suezcanal (1.0.1): Downloading (100%)         
Writing lock file
Generating autoload files
```

3. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_SuezCanal --clear-static-content
php bin/magento setup:upgrade
```

## Installation (Manually)
1. Download the code.
2. Extract the downloaded tar.gz file. Example: `tar -xzf Magenizr_SuezCanal_1.0.1.tar.gz`.
3. Copy the code into `./app/code/Magenizr/SuezCanal/`.
4. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_SuezCanal --clear-static-content
php bin/magento setup:upgrade
```

## Features
* Pre-defined styles
* HTML support

## Usage
Simply go to `Stores > Configuration > Sales > Suez Canal`, enable the module and clear the cache. Change the text if necessary.

## Support
If you experience any issues, don't hesitate to open an issue on [Github](https://github.com/magenizr/Magenizr_SuezCanal/issues). For a custom build, don't hesitate to contact us on [Magento Marketplace](https://marketplace.magento.com/partner/magenizr).

## Purchase
This module is available for free on [GitHub](https://github.com/magenizr). If you purchase the module on [Magenizr Shop](https://shop.magenizr.com) or [Magento Marketplace](https://marketplace.magento.com/partner/magenizr) we offer 60 days free support, 90 days warranty and 12 month free updates.

## Contact
Follow us on [GitHub](https://github.com/magenizr), [Twitter](https://twitter.com/magenizr) and [Facebook](https://www.facebook.com/magenizr).

## History
===== 1.0.1 =====
* Fix in block

===== 1.0.0 =====
* Stable version

## License
[OSL - Open Software Licence 3.0](https://opensource.org/licenses/osl-3.0.php)
