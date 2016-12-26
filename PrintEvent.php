<?php

namespace atans\bpac;

/**
 * Class PrintEvent
 * Types of events occurring during printing
 *
 * @author Atans Chiu
 */
class PrintEvent
{
    const bpePrinted  = 0x0; // Print end
    const bpeOffline  = 0x1; // Printer offline
    const bpePaused   = 0x2; // Pause
    const bpeDeleted  = 0x3; // Cancel job
    const bpeError    = 0x4; // Error
    const bpeNotFound = 0x5; // Printer not found
}