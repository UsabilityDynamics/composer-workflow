### Install Global Plugin
```
composer global require UsabilityDynamics/composer-workflow
```

### Get Information and Plugin
```
composer global show UsabilityDynamics/composer-workflow
```

### Notes
* The plugin will be installed into ~/.composer/vendor/UsabilityDynamics/composer-workflow
* This plugin will be loaded when using Composer within any other project once installed globally.
* We could use the "archive" command to build release shit.

### ToDO

* Set UDR for defaultRepositories (https://github.com/composer/composer/blob/master/src/Composer/Config.php#L49).