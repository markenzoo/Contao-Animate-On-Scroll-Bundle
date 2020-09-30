<?php

declare(strict_types=1);

$GLOBALS['TL_LANG']['tl_content']['aos_legend'] = "Scroll-Animation";

/*
|--------------------------------------------------------------------------
| Add Animate on Scroll Subpalette
|--------------------------------------------------------------------------
|
| Adds functionality to have a checkbox, which enables the AOS subpalette 
|
*/

$GLOBALS['TL_LANG']['tl_content']['addAOS'] = ['Scroll-Animation hinzufügen.', 'Dem Inhaltselement eine Animation beim Scrollen hinzufügen.'];

/*
|--------------------------------------------------------------------------
| Animate on Scroll Settings
|--------------------------------------------------------------------------
| see: https://github.com/michalsnik/aos#animations
*/

$GLOBALS['TL_LANG']['tl_content']['aos'] = ['Scroll-Animation', 'Legt die Art der Scroll-Animation fest.'];

// Fade animations
$GLOBALS['TL_LANG']['tl_content']['aosOption']['fade'] = 'fade';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['fade-up'] = 'fade-up';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['fade-down'] = 'fade-down';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['fade-left'] = 'fade-left';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['fade-right'] = 'fade-right';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['fade-up-right'] = 'fade-up-right';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['fade-up-left'] = 'fade-up-left';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['fade-down-right'] = 'fade-down-right';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['fade-down-left'] = 'fade-down-left';
// Flip animations
$GLOBALS['TL_LANG']['tl_content']['aosOption']['flip-up'] = 'flip-up';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['flip-down'] = 'flip-down';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['flip-left'] = 'flip-left';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['flip-right'] = 'flip-right';
// Slide animations
$GLOBALS['TL_LANG']['tl_content']['aosOption']['slide-up'] = 'slide-up';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['slide-down'] = 'slide-down';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['slide-left'] = 'slide-left';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['slide-right'] = 'slide-right';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['slide-right'] = 'slide-right';
// Zoom animations
$GLOBALS['TL_LANG']['tl_content']['aosOption']['zoom-in'] = 'zoom-in';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['zoom-in-up'] = 'zoom-in-up';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['zoom-in-down'] = 'zoom-in-down';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['zoom-in-left'] = 'zoom-in-left';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['zoom-in-right'] = 'zoom-in-right';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['zoom-out'] = 'zoom-out';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['zoom-out-up'] = 'zoom-out-up';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['zoom-out-down'] = 'zoom-out-down';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['zoom-out-left'] = 'zoom-out-left';
$GLOBALS['TL_LANG']['tl_content']['aosOption']['zoom-out-right'] = 'zoom-out-right';

$GLOBALS['TL_LANG']['tl_content']['aosOffset'] = ['Scroll-Offset', 'Legt den Scroll-Offset in Pixel fest, bei dem die Scroll-Animation startet. Standard: 120.'];

$GLOBALS['TL_LANG']['tl_content']['aosDelay'] = ['Scroll-Verzögerung', 'Legt die Verzögerung fest, nach welcher die Animation startet. Standard: 0.'];

$GLOBALS['TL_LANG']['tl_content']['aosDuration'] = ['Scroll-Dauer', 'Legt die Dauer der Animation in Millisekunden (1000 = 1s) fest. Standard: 400.'];

$GLOBALS['TL_LANG']['tl_content']['aosEasing'] = ['Scroll-Animation.', 'Legt die Funktion der Scroll-Animation fest.'];
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['linear'] = 'linear';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease'] = 'ease';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-in'] = 'ease-in';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-out'] = 'ease-out';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-in-out'] = 'ease-in-out';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-in-back'] = 'ease-in-back';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-out-back'] = 'ease-out-back';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-in-out-back'] = 'ease-in-out-back';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-in-sine'] = 'ease-in-sine';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-out-sine'] = 'ease-out-sine';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-in-out-sine'] = 'ease-in-out-sine';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-in-quad'] = 'ease-in-quad';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-out-quad'] = 'ease-out-quad';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-in-out-quad'] = 'ease-in-out-quad';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-in-cubic'] = 'ease-in-cubic';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-out-cubic'] = 'ease-out-cubic';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-in-out-cubic'] = 'ease-in-out-cubic';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-in-quart'] = 'ease-in-quart';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-out-quart'] = 'ease-out-quart';
$GLOBALS['TL_LANG']['tl_content']['aosEasingOption']['ease-in-out-quart'] = 'ease-in-out-quart';

$GLOBALS['TL_LANG']['tl_content']['aosPlacement'] = ['Position', 'Legt die Position fest.'];
$GLOBALS['TL_LANG']['tl_content']['aosPlacementOption']['top-bottom'] = 'top-bottom';
$GLOBALS['TL_LANG']['tl_content']['aosPlacementOption']['top-center'] = 'top-center';
$GLOBALS['TL_LANG']['tl_content']['aosPlacementOption']['center-bottom'] = 'center-bottom';
$GLOBALS['TL_LANG']['tl_content']['aosPlacementOption']['center-center'] = 'center-center';
$GLOBALS['TL_LANG']['tl_content']['aosPlacementOption']['center-top'] = 'center-top';
$GLOBALS['TL_LANG']['tl_content']['aosPlacementOption']['bottom-bottom'] = 'bottom-bottom';
$GLOBALS['TL_LANG']['tl_content']['aosPlacementOption']['bottom-center'] = 'bottom-center';
$GLOBALS['TL_LANG']['tl_content']['aosPlacementOption']['bottom-top'] = 'bottom-top';

$GLOBALS['TL_LANG']['tl_content']['oasMirror'] = ['Spiegelung', 'Falls aktiviert, wird die Animation beim hochscrollen invertiert ausgeführt. Standard: aktiviert.'];

$GLOBALS['TL_LANG']['tl_content']['oasOnce'] = ['Einmalig', 'Falls aktiviert, wird die Animation nur einmalig ausgeführt. Standard: deaktiviert.'];





