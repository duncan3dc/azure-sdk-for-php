## Plan

1. Make a branch from the 
   [azure-sdk-for-php](https://github.com/Azure/azure-sdk-for-php) master 
   branch, for example 
   [windowsazure](https://github.com/Azure/azure-sdk-for-php/tree/windowsazure), the same as a the
   current name of the
   [composer package](https://packagist.org/packages/microsoft/windowsazure).
1. Create a `readme.md` in the master branch which points to the old branch 
   and the old composer package.
1. Publish a new empty package (version 0.0.0). What's the new name should 
   be? **microsoft/azure**, **microsoft/azure-sdk**? For example,
   [microsoft/azure-storage](https://packagist.org/packages/microsoft/azure-storage).
1. Create the **Azure/azure-runtime-for-php** repository for common RunTime 
   code.
   
## Requirements

1. Support for different PHP versions (see 
   [PHP: Supported Versions](http://php.net/supported-versions.php)):
   - PHP 5.6
   - PHP 7.0
   - PHP 7.1
   - Hack
1. CI (Travis-CI, Appveyor?)
1. Profile support.
1. Descriptive code generation (instead of imperative).
1. An authentication. See the email thread 
   `FW: Azure SDK common auth file support`.

## Wish List

1. One common core/run-time library for `Azure SDK for PHP` and 
   `Azure Storage for PHP`.
1. Documentation generation for docs.microsoft.com.
1. Telemetry in the Core library
1. JSON-RPC support in the Core library.
1. API levels
   - sync/async
   - raw/not-raw
   - strongly/duck typed
1. An AutoRest PHP code generator as a PHP tool (published on Composer).

### API Level Example

```php
$s = $client.sync();
$a = $client.async();
$a = $client.syncRaw();
$result = $s.someFunction(...);
$asyncClient = $s.client.async();
```

By default
- sync
- not raw
- strongly typed

### For Developers

#### On Windows

1. Download **PHP 5.6 x86 Non Thread Safe** from
 [here](http://windows.php.net/download#php-5.6-nts-VC11-x86).
1. Unpack it to **c:\\php-5.6\\** folder.
1. Copy `php.ini-development` to `php.ini`.
1. Uncomment `extension_dir = "ext"`
1. Uncomment extensions:
   - `openssl`
1. Run [install_composer.cmd](install_composer.cmd).