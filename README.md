Contao Animate On Scroll Bundle
===============================

[![Version](http://img.shields.io/packagist/v/markenzoo/contao-animate-on-scroll-bundle.svg?style=for-the-badge&label=Latest)](http://packagist.org/packages/markenzoo/contao-animate-on-scroll-bundle)
[![GitHub issues](https://img.shields.io/github/issues/markenzoo/contao-animate-on-scroll-bundle?style=for-the-badge&logo=github)](https://github.com/markenzoo/contao-animate-on-scroll-bundle/issues)
[![License](http://img.shields.io/packagist/l/markenzoo/contao-animate-on-scroll-bundle?style=for-the-badge&label=License)](http://packagist.org/packages/markenzoo/contao-animate-on-scroll-bundle)
[![Build Status](http://img.shields.io/travis/markenzoo/contao-animate-on-scroll-bundle/main.svg?style=for-the-badge&logo=travis)](https://travis-ci.org/markenzoo/contao-animate-on-scroll-bundle)
[![Downloads](http://img.shields.io/packagist/dt/markenzoo/contao-animate-on-scroll-bundle?style=for-the-badge&label=Downloads)](http://packagist.org/packages/markenzoo/contao-animate-on-scroll-bundle)

Contao CMS Extension for [aos](https://github.com/michalsnik/aos).

Features
--------
 
Requirements
------------

 - PHP >=7.2
 - Contao >=4.9 LTS
 
 
Using with 3rd-Party Bundles
-------

Simply use the `PaletteManipulator` to add the Animate-On-Scroll Palette to your Content Elements.

```php
\Contao\CoreBundle\DataContainer\PaletteManipulator::create()
  ->addLegend('aos_legend', 'template_legend', PaletteManipulator::POSITION_AFTER)
  ->addField('addAOS', 'aos_legend', PaletteManipulator::POSITION_APPEND)
  ->applyToPalette('myContentElement', 'tl_content')
;
```

*NOTE:*
Replace `myContentElement` with the name of the palette of your content element.

Install
-------

### Managed edition

When using the managed edition it's pretty simple to install the package. Just search for the package in the
Contao Manager and install it. Alternatively you can use the CLI.  

```bash
# Using the contao manager
$ php contao-manager.phar.php composer require markenzoo/contao-animate-on-scroll-bundle

# Using composer directly
$ php composer.phar require markenzoo/contao-animate-on-scroll-bundle

# Using global composer installation
$ composer require markenzoo/contao-animate-on-scroll-bundle
```

### Symfony application

If you use Contao in a symfony application without contao/manager-bundle, you have to register the bundle manually:

```php

class AppKernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new Markenzoo\ContaoAnimateOnScrollBundle\ContaoAnimateOnScrollBundle()
        ];
    }
}

```

## Note to self

Run the PHP-CS-Fixer and the unit test before you release your bundle:

```bash
composer run-script fix -v
composer run-script lint
composer run-script test
```