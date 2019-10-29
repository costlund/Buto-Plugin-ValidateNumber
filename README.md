# Buto-Plugin-ValidateNumber
Validate number.

## PHP
````
wfPlugin::includeonce('validate/number');
$validator = new PluginValidateNumber();
````
````
$validator->is_decimal('1.3zzz')
````
````
$validator->is_numeric('1zzz')
````
