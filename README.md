b-PAC PHP Library
===================
Brother label printing b-PAC php library (Windows Only)

# Installation


## Step 1.Install Labelling SDK (b-PAC)]

###  Download and install [Labelling SDK (b-PAC)](http://www.brother.com/product/dev/label/bpac/download/index.htm) 


## Step 2.Composer install atans/bpac

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).


Either run

```
composer atans/bpac "*"
```

or add

```
"atans/bpac": "*"
```

to the require section of your `composer.json` file.


# Usage


```php
use atans\bpac\IPrinter;

$printer = new IPrinter();
$installedPrinters = $printer->GetInstalledPrinters();

// Same as
// $printer = new Com('bpac.Printer'));
// $installedPrinters = $printer->GetInstalledPrinters();


```