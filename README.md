# DOT - a DOM manipulator that extends DOM

## Installation
```
composer require dotcra/dot
```

## Usage
```php
<?php

require 'vendor/autoload.php';

use Dotcra\Dot\DOTDocument;

$dot=new DOTDocument;
$dot->loadHTMLFile('https://dotcra.com');

var_dump($dot->getElementsByClassName('views-row'));
var_dump($dot->querySelector('.views-row'));
var_dump($dot->querySelectorAll('.views-row'));
// more todo
```
