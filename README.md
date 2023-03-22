![logo](https://user-images.githubusercontent.com/122671813/227010924-011a5300-c3e4-4b3f-8e86-f6cbd00a2c95.png)

# mayco-php-debugger
> This is the official MayCo debugger for your PHP projects.

## Get started
> The folder of this debugger needs to be located at the root folder of your webserver.

Copy the following code to include the PHP debugger to your project:

```php
  $rootpath = realpath($_SERVER["DOCUMENT_ROOT"]);
  require_once $rootpath.'/mayco-php-debugger/main.php';
```

## Usage

Use it like:

```php
  <?php
    $rootpath = realpath($_SERVER["DOCUMENT_ROOT"]);
    require_once $rootpath.'/your-project/main.php';
    Debugg::log("log");
    Debugg::warn("warnung");
    Debugg::error("error");

    Debugg::time("zeit");
    Debugg::trace();
    TIMER -> start();
    TIMER -> print();
    TIMER -> print();
    TIMER -> end();
  ?>
```

## Output

![debugger_screenshoot](https://user-images.githubusercontent.com/122671813/227021696-177bfa6b-b178-48c0-a57c-4313a04fcd86.png)


## Author

Marius May
