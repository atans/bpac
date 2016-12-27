<?php

namespace atans\bpac;

/**
 * Class Print (bpac::Object)
 *
 * @author Atans Chiu
 *
 * @property integer $Height          [get, set] Sets or acquires the height
 * @property integer $HorizontalAlign [get, set] Sets or acquires the horizontal alignment
 * @property string $Name             [get, set] Sets or acquires the object name
 * @property integer $Orientation     [get] Acquires the text direction (0:horizontal, 1:vertical)
 * @property integer $SelectionEnd    [get, set] Sets or acquires the end position of selection
 * @property integer $SelectionStart  [get, set] Sets or acquires the start position of selection
 * @property string $Text             [get, set] Sets or acquires the text data
 * @property ObjectType $Type         [get] Acquires the object type
 * @property integer $VerticalAlign   [get, set] Sets or acquires the vertical alignment
 * @property integer $Width           [get, set] Sets or acquires the width
 * @property integer $X               [get, set] Sets or acquires the upper-left horizontal position
 * @property integer $Y               [get, set] Sets or acquires the upper-left vertical position
 *
 * @method string GetAttribute (ObjectAttribute $kind) Acquires the attribute
 * @method string GetData (integer $kind) Acquires the object-specific data
 * @method boolean GetFontBold ()Sets and acquires the bold attribute
 * @method FontEffect GetFontEffect () Acquires the font effects
 * @method boolean GetFontItalics () Sets and acquires the italic attribute
 * @method integer GetFontMaxPoint () Acquires the maximum point size
 * @method string  GetFontName () Acquires the font name
 * @method boolean GetFontStrikeout () Acquires the strikeout attribute
 * @method boolean GetFontUnderline () Acquires the underline attribute
 * @method boolean SetAlign (integer $horizontal, integer $vertical) Sets the object alignment
 * @method boolean SetAttribute (ObjectAttribute $kind, string $attribute) Sets the attribute
 * @method boolean SetData (integer $kind, string $data, string $param) Sets the object-specific data
 * @method boolean SetFontBold (boolean $fontBold) Sets the bold attribute
 * @method boolean SetFontEffect (FontEffect $effect) Sets the font effects
 * @method boolean SetFontItalics (boolean $fontItalics) Sets the italic attribute
 * @method boolean SetFontMaxPoint (integer $fontMaxPoint) Sets the maximum point size
 * @method boolean SetFontName (string $fontName) Sets the font name
 * @method boolean SetFontStrikeout (boolean $strikeout) Sets the strikeout attribute
 * @method boolean SetFontUnderline (boolean $fontUnderline) Sets the underline attribute
 * @method boolean SetPosition (integer $x, integer $y, integer $width, integer $height) Sets the object position and size
 * @method boolean SetSelection (integer $start, integer $end) Selects the character substring
 */
class IObject extends BaseComModel
{
    /**
     * Printer constructor.
     */
    public function __construct()
    {
        parent::__construct('bpac.Object');
    }
}

