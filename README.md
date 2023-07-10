# ConsoleHelper

> Makes console formatting easier.

## Installation

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require sbolch/console-helper
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

## Usage

```php
use sbolch\ConsoleHelper;

echo ConsoleHelper::success("Task completed.\n");
echo ConsoleHelper::error("Failure!\n");
echo ConsoleHelper::warning("Attention!\n");
echo ConsoleHelper::info('5 items updated.');
echo ConsoleHelper::replace(ConsoleHelper::info('6 items updated.'));
echo "\n";
echo ConsoleHelper::replaceLine('All previous lines are replaced with this.', 4);
echo ConsoleHelper::progress(
    50, // percentage
    10  // width in characters, default is 20
); // prints this: █████░░░░░
```
