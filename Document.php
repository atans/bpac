<?php

namespace atans\bpac;

/**
 * Class Document (bpac::Document)
 * Document interface
 * This turns the P-touch Editor's document file (*.lbl, *.lbx) into a template, and performs the document's printing, layout editing, and others.
 *
 * @author Atans Chiu
 *
 * @event Printed
 *
 * @property string $CurrentSheet [get, set] Sets or acquires the current sheet name
 * @property integer $CutLineCount  [get] Acquires the cutting line count
 * @property integer $CutLines  [get] Acquires the cutting line position (VT_VARIANT | VT_ARRAY)
 * @property integer $ErrorCode [get] Acquires the error number occurring inside b-PAC
 * @property integer $Length [get, set]Sets or acquires the tape length
 * @property integer $MarginBottom [get, set] Sets or acquires the bottom margin
 * @property integer $MarginLeft [get, set] Sets or acquires the left margin
 * @property integer $MarginTop [get, set] Sets or acquires the top margin
 * @property Objects|Object[]  $Objects [get] Acquires the object collection
 * @property integer $Orientation [get] Acquires the paper direction (0:horizontal, 1:vertical)
 * @property Printer $Printer [get] Acquires the printer
 * @property array $SheetNames [get] Sheet name enumeration (VT_VARIANT | VT_ARRAY)
 * @property integer $Width [get] Acquires the tape width
 *
 * @method boolean Close() Closes the file opened with Open()
 * @method boolean DoPrint (PrintOptionConstants $dwOption, int $szOption) Prints the document
 * @method boolean EndPrint  () End of print job settings
 * @method boolean Export (ExportType $type, string $filePath, int $dpi) Outputs the file in the specified format
 * @method integer GetBarcodeIndex (string $objectName) Acquires the barcode data index
 * @method array GetImageData (ExportType $type, float $width, float $height) Acquires a preview sample image (VT_UI1 | VT_ARRAY)
 * @method integer GetMediaId () Acquires the media ID specified for the template. Acquiring the ID of the media loaded in the printer refers to IPrinter::GetMediaId().
 * @method string GetMediaName () Acquires the media name specified for the template. Acquiring the name of the media loaded in the printer refers to IPrinter::GetMediaName().
 * @method Object GetObject (string $name) Acquires the object
 * @method string GetPrinterName () Acquires the printer name
 * @method boolean GetText (int $index, string $text) Acquires the text data of the specified line
 * @method integer GetTextCount  (int $index, string $text) Acquires the text line count
 * @method integer GetTextIndex (string $fieldName) Acquires the text index
 * @method boolean Open (string $filePath) Opens the template file
 * @method boolean PrintOut (integer $copyCount, PrintOptionConstants|integer $option) Adds a print job
 * @method boolean Save () Saves the document
 * @method boolean SaveAs (ExportType $type, string $filePath)
 * @method boolean SetBarcodeData (integer $index, string $barcodeData)Sets the barcode data
 * @method boolean SetMarginLeftRight (integer $left, integer $right) Sets the left/right margin
 * @method boolean SetMediaById (integer $mediaId, boolean $fitPage) Sets the media to be used, by media ID
 * @method boolean SetMediaByName (string $mediaName, boolean $fitPage) Sets the media to be used, by media name
 * @method boolean SetPrintedCallback ($pCallback) Sets the callback object
 * @method boolean SetPrinter (string $printerName, boolean $fitPage) Sets up the printer
 * @method boolean SetText (integer $index, string $text) Sets the text data for the specified line
 * @method boolean StartPrint (string $docName, PrintOptionConstants|int $option) Start of print job setup
 */
class Document extends BaseComModel
{
    /**
     * Document constructor.
     */
    public function __construct()
    {
        parent::__construct('bpac.Document');
    }
}

