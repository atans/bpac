<?php

namespace atans\bpac;

/**
 * Class ExportType
 * Object type
 *
 * @author Atans Chiu
 */
class ObjectType
{
    const bobText     = 0x0; // Text
    const bobBarcode  = 0x1; // Barcode
    const bobImage    = 0x2; // Image
    const bobDateTime = 0x3; // Date and time
    const bobClipArt  = 0x4; // Clipart
}