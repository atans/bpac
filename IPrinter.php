<?php

namespace atans\bpac;

/**
 * Class Print (bpac::IPrinter)
 *
 * @author Atans Chiu
 *
 * @property integer $ErrorCode [get] Acquires the most recent printer error number
 * @property string $ErrorString [get] Acquires the most recent printer error number
 * @property string $Name [get] Acquires the printer name
 * @property string $PortName [get] Acquires the port name
 *
 * @method VARIANT|array GetInstalledPrinters () Enumerates the number of installed printers
 * @method integer GetMediaId () Acquires the media ID that is set on the printer
 * @method string GetMediaName () Acquires the media name that is set on the printer
 * @method integer GetPrintedTapeLength () Acquires the number of sheets (meters) printed in a print job
 * @method array GetSupportedMediaIds () Enumerates the IDs of the media that can be used
 * @method array GetSupportedMediaNames () Enumerates the names of the media that can be used with the printer
 * @method boolean IsMediaIdSupported (integer $mediaId)Whether the media specified with the media name is supported
 * @method boolean IsMediaNameSupported (string $mediaName) Whether the media specified with the media name is supported
 * @method boolean IsPrinterOnline (string $printerName) Acquires whether the printer specified with printerName is online
 * @method boolean IsPrinterSupported (string $printerName) Acquires whether the printer can be used with b-PAC
 */
class IPrinter extends BaseComModel
{
    /**
     * Printer constructor.
     */
    public function __construct()
    {
        parent::__construct('bpac.Printer');
    }
}

