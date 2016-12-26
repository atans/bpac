<?php

namespace atans\bpac;

/**
 * Class FontEffect
 * Object attributes
 *
 * @author Atans Chiu
 */
class FontEffect
{
    const bfeNoEffects = 0x0; //No effects
    const bfeShadowLight = 0x1; //Shadow effect 1
    const bfeShadow = 0x2; //Shadow effect 2
    const bfeHorizontal = 0x3; //Striping
    const bfeOutline = 0x4; //Outline
    const bfeSurround = 0x5; //Border
    const bfeFrameOut = 0x6; //Framing
    const bfeInvertTextColors = 0x7; //Invert text colors
}