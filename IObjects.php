<?php

namespace atans\bpac;

/**
 * Class Print (bpac::Objects)
 *
 * @author Atans Chiu
 * @property integer  Count [get]
 *
 * @method array GetEnumerator () Acquires the collection iterator (refer to usage example for the usage method)
 * @method integer  GetIndex (Object $obj) Acquires an object index
 * @method integer  GetIndexByName (string $name, integer $indexBgn) Acquires an object index
 * @method Object  Insert (integer $index, ObjectType $type, integer $x, integer $y, integer $width, integer $height, mixed $option) Adds a new object
 * @method boolean Remove (integer $index) Removes an object
 *
 */
class IObjects extends BaseComModel
{
    /**
     * Printer constructor.
     */
    public function __construct()
    {
        parent::__construct('bpac.Objects');
    }
}

