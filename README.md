[![Magenizr Plus](https://images2.imgbox.com/11/6b/yVOOloaA_o.gif)](https://account.magenizr.com)
---

# Suez Canal
Display a simple notification across your store and let your customers know about potential supply shortages.

![Magenizr SuezCanal - Frontend](https://images2.imgbox.com/4a/ea/4eCuilKJ_o.gif)

## System Requirements
- Magento 2.3.x, 2.4.x
- PHP 5.6.x, 7.x

## Installation (Composer 2)

1. Update your composer.json `composer require "magenizr/magento2-suezcanal":"1.0.2" --no-update`
2. Use `composer update magenizr/magento2-suezcanal --no-install` to update your composer.lock file.

```
Updating dependencies
Lock file operations: 1 install, 1 update, 0 removals
  - Locking magenizr/magento2-resetuibookmarks (1.0.2)
```

3. And then `composer install` to install the package.

```
Installing dependencies from lock file (including require-dev)
Verifying lock file contents can be installed on current platform.
Package operations: 1 install, 0 update, 0 removals
  - Installing magenizr/magento2-suezcanal (1.2.0): Extracting archive
```

4. Enable the module and clear static content.

```
php bin/magento module:enable Magenizr_SuezCanal --clear-static-content
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
If you experience any issues, don't hesitate to open an issue on [Github](https://github.com/magenizr/Magenizr_SuezCanal/issues).

## Purchase
This module is available for free on [GitHub](https://github.com/magenizr).

## Contact
Follow us on [GitHub](https://github.com/magenizr), [Twitter](https://twitter.com/magenizr) and [Facebook](https://www.facebook.com/magenizr).

## History
===== 1.0.2 =====
* Cleanup various files to meet coding standards (EQP, ECG)

===== 1.0.1 =====
* Fix in block

===== 1.0.0 =====
* Stable version

## License
[OSL - Open Software Licence 3.0](https://opensource.org/licenses/osl-3.0.php)
