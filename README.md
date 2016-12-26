b-PAC PHP Library
===================
Brother label printing b-PAC php library (Windows Only)

# Installation


## Step 1.Install Labelling SDK (b-PAC)]

###  Download and install [Full b-PAC SDK for developers (SDK, User Guide & sample programs)](http://www.brother.com/product/dev/label/bpac/download/index.htm#full) 


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
use atans\bpac\IDocument;

$printer = new IPrinter();
$installedPrinters = $printer->GetInstalledPrinters();

// Same as
// $printer = new Com('bpac.Printer'));
// $installedPrinters = $printer->GetInstalledPrinters();


// Print label using lbx template

$document = new IDocument();

$document->Open(realpath(__DIR__ . '/tests/assets/device.lbx'))

$document->GetObject('brand')->Text = 'ThinkPad';

$document->StartPrint('', PrintOptionConstants::bpoDefault);
$document->PrintOut(1, PrintOptionConstants::bpoDefault);
$document->EndPrint();
$document->Close();

```