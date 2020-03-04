PHPStan Extension - Magento 2
===================

### Installation Instructions via Composer

    composer require --dev aonach/magento2-phpstan
 
 
### Note on required use of `phpstan/extension-installer`
<details>
  <summary>Manual installation</summary>

If the use of `phpstan/extension-installer` is not working for you undo the installation by adding
```
    "replace": {
        "phpstan/extension-installer": "*"
    },
```
to your project's composer.json file. Then manually include extension.neon in your project's PHPStan config:

```
includes:
    - vendor/aonach/magento2-phpstan/extension.neon
```

Or as an alternative approach you can check out https://github.com/bitExpert/phpstan-magento

</details>
