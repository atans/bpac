<?php

namespace atans\bpac;
/**
 * Class PrintOptionConstants
 *
 * @author Atans Chiu
 */
class PrintOptionConstants
{
    // Label printer (P-touch)
    const bpoDefault        = 0x0; // The current drive settings are adopted.
    const bpoAutoCut        = 0x1; // Autocut is applied.
    const bpoCutPause       = 0x2; // Cut pause is applied. Valid only with models not supporting the auto cut function.
    const bpoCutMark        = 0x2; // Cut mark is inserted. Valid only with models not supporting the auto cut function.
    const bpoHalfCut        = 0x200; // Executes half cut.
    const bpoChainPrint     = 0x400; // Continuous printing is performed.
    const bpoTailCut        = 0x800; // Whenever a label is output, the trailing end of the form is forcibly cut to leave a leading blank for the next label output.
    const bpoSpecialTape    = 0x00080000; // No cutting is performed when printing on special tape. Valid only with PT-2430PC.
    const bpoCutAtEnd       = 0x04000000; // "Cut at end" is performed.
    const bpoNoCut          = 0x10000000; // No cutting is performed. Valid only with models supporting cut functions.
    const bpoMirroring      = 0x4; // Executes mirror printing.
    const bpoQuality        = 0x00010000; // Fine-quality printing is performed.
    const bpoHighSpeed      = 0x01000000; // High-speed printing is performed.
    const bpoHighResolution = 0x02000000; // High-resolution printing is performed.
    const bpoColor          = 0x8; // Color printing is performed.
    const bpoMono           = 0x10000000; // Monochrome printing is performed. Valid only with models supporting the color printing function.
    const bpoContinue       = 0x40000000; // Combines with printing for the following DoPrint( ) so that it is a single print job. As a result, when the next DoPrints are called up, the front margins are not output.

    //  Mobile Printer (MW Series)
    // const bpoContinue = 0x40000000;

    //  Mobile Printer (MW Series)
    const bpoStamp   = 0x80;
    const bpoIdLabel = 0x10000000;
}