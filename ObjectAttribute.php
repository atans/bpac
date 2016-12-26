<?php

namespace atans\bpac;

/**
 * Class ObjectAttribute
 * Object attributes
 *
 * @author Atans Chiu
 */
class ObjectAttribute
{
    const boaTextOption          = 0x0; // Text option
    const boaFontBold            = 0x1; // Font bold
    const boaFontEffect          = 0x2; // Font effect
    const boaFontItalics         = 0x3; // Font italic
    const boaFontMaxPoint        = 0x4; // Maximum point count
    const boaFontName            = 0x5; // Font name
    const boaFontStrikeout       = 0x6; // Strikeout
    const boaFontUnderline       = 0x7; // Font underline
    const boaDateTimeAddSubtract = 0x8; // Addition/subtraction of date and time
    const boaClipArtGallery      = 0x9; // Clip art category + No
    const boaBarcodeProtocol     = 0xa; // Barcode protocol
}