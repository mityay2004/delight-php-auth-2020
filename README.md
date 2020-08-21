
# Mofified for using in Codeigniter 3

**This is adapted for using in Codeigniter 3 version of [delight-im/PHP-Auth](https://github.com/delight-im/PHP-Auth)

Only for MySQL;

Remove final from classes;

Adding language for Exceptions;

Move needed Utilites into package;



# Auth

**Authentication for PHP. Simple, lightweight and secure.**


## Requirements

 * PHP 5.6.0+
   * PDO (PHP Data Objects) extension (`pdo`)
     * MySQL Native Driver (`mysqlnd`) **or** PostgreSQL driver (`pgsql`) **or** SQLite driver (`sqlite`)
   * OpenSSL extension (`openssl`)
 * MySQL 5.5.3+ **or** MariaDB 5.5.23+
 * Codeigniter 3
 
## Installation
 1. Include the library via Composer mityay2004/delight-php-auth-2020:

    ```
    $ composer require mityay2004/delight-php-auth-2020
    ```

 1. Include the Composer autoloader:

    ```php
    require __DIR__ . '/vendor/autoload.php';
    ```

 1. Set up a database and create the required tables:

    * [MariaDB](Database/MySQL.sql)
    * [MySQL](Database/MySQL.sql)

1. Copy files from directory Codeigniter into corresponding folder in Your application

1. In `application/controller/Somecontroller.php` (or best in `application/core/MY_Controller.php`) just after `<?php defined('BASEPATH') OR exit('No direct script access allowed');` and before `class Somecontroller extends CI_Controller`

  ```php
  require_once APPPATH . 'libraries/common/Autoload.php';
  spl_autoload_register('\\libraries\\common\\Autoload::load');
  ```

1. In application/config/config.php set appropriate language (in my case *russian*)

```php
...
$config['language']	= 'russian';
...
```

1. In application/config/autoload.php include language helper and appropriate language 

  ```php
$autoload['helper'] = [
    ...
    'url',
    'language',
    ...
];
    
    ...
$autoload['language'] = ['auth_message'];
    ...
  ```

1. Correct language file *application/language/russian/auth_message_lang.php* for error message which You want

1. And You ready for using mityay2004/delight-php-auth-2020. Detailed Instruction: [delight-im/PHP-Auth](https://github.com/delight-im/PHP-Auth) 
