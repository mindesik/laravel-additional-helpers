# Laravel additional helpers

[![Latest Stable Version](https://poser.pugx.org/misterpaladin/laravel-additional-helpers/v/stable)](https://packagist.org/packages/misterpaladin/laravel-additional-helpers) [![Total Downloads](https://poser.pugx.org/misterpaladin/laravel-additional-helpers/downloads)](https://packagist.org/packages/misterpaladin/laravel-additional-helpers) [![Latest Unstable Version](https://poser.pugx.org/misterpaladin/laravel-additional-helpers/v/unstable)](https://packagist.org/packages/misterpaladin/laravel-additional-helpers) [![License](https://poser.pugx.org/misterpaladin/laravel-additional-helpers/license)](https://packagist.org/packages/misterpaladin/laravel-additional-helpers)

## Usage

Install package:

```bash
$ composer require misterpaladin/laravel-additional-helpers
```

Add `MisterPaladin\LaravelAdditionalHelpers\HelpersProvider::class` in `providers` array in `app.php` file.


## Functions

| Function | Reference |
|:-----------|:---------|
| path_unique | <strong>path_unique(</strong><em>string</em> <strong>$path</strong>, <em>integer</em> <strong>$suffixLength=3</strong>)</strong> : <em>string</em><br /><em>Generate unique filename for given path</em> |