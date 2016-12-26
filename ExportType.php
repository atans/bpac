<?php

namespace atans\bpac;

/**
 * Class ExportType
 *
 * Output type
 *
 * @author Atans Chiu
 */
class ExportType
{
    const bexOpened = 0x0; // Same type as the currently open template
    const bexLbx    = 0x1; // LBX type
    const bexLbl    = 0x2; // LBL (P-touch Editor 4.2) type
    const bexLbi    = 0x3; // LBI type
    const bexBmp    = 0x4; // BMP (monochrome) type
    const bexPAF    = 0x5; // PAF type
}