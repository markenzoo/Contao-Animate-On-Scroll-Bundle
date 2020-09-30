<?php

declare(strict_types=1);

use Contao\CoreBundle\DataContainer\PaletteManipulator;

/*
|--------------------------------------------------------------------------
| Add Animate on Scroll Subpalette
|--------------------------------------------------------------------------
|
| Adds functionality to have a checkbox, which enables the AOS subpalette 
|
*/
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'addAOS';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['addAOS'] = 'aos,aosOffset,aosDelay,aosDuration,aosEasing,aosPlacement,oasMirror,oasOnce';

$GLOBALS['TL_DCA']['tl_content']['fields']['addAOS'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['addAOS'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'm12,clr', 'submitOnChange' => true],
    'sql' => "char(1) NOT NULL default ''",
];

/*
|--------------------------------------------------------------------------
| Animate on Scroll Settings
|--------------------------------------------------------------------------
*/

$GLOBALS['TL_DCA']['tl_content']['fields']['aos'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aos'],
    'exclude' => true,
    'inputType' => 'select',
    'eval' => ['maxlength' => 16, 'mandatory' => true, 'tl_class' => 'w50'],
    'options' => &$GLOBALS['TL_LANG']['tl_content']['aosOption'],
    'sql' => "varchar(16) NOT NULL default 'fade-up'",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['aosOffset'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosOffset'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['maxlength' => 16, 'tl_class' => 'w50'],
    'sql' => "int(10) unsigned NOT NULL default 120",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['aosDelay'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosDelay'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['maxlength' => 16, 'tl_class' => 'w50'],
    'sql' => "int(10) unsigned NOT NULL default 0",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['aosDuration'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosDuration'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['maxlength' => 16, 'tl_class' => 'w50'],
    'sql' => "int(10) unsigned NOT NULL default 400",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['aosEasing'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosEasing'],
    'exclude' => true,
    'inputType' => 'select',
    'eval' => ['maxlength' => 32, 'tl_class' => 'w50'],
    'options' => &$GLOBALS['TL_LANG']['tl_content']['aosEasingOption'],
    'sql' => "varchar(32) NOT NULL default 'ease'",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['aosPlacement'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['aosPlacement'],
    'exclude' => true,
    'inputType' => 'select',
    'eval' => ['maxlength' => 16, 'tl_class' => 'w50'],
    'options' => &$GLOBALS['TL_LANG']['tl_content']['aosPlacementOption'],
    'sql' => "varchar(16) NOT NULL default 'top-bottom'",
];


$GLOBALS['TL_DCA']['tl_content']['fields']['oasMirror'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_article']['oasMirror'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50 m12'],
    'sql' => "char(1) NOT NULL default '1'",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['oasOnce'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_article']['oasOnce'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'w50 m12'],
    'sql' => "char(1) NOT NULL default ''",
];


/*
|--------------------------------------------------------------------------
| Palette Manipulation
|--------------------------------------------------------------------------
|
| Let's add Animate on Scroll to every content element, case why not? ¯\_(ツ)_/¯
|
*/
PaletteManipulator::create()
  ->addLegend('aos_legend', 'template_legend', PaletteManipulator::POSITION_AFTER)
  ->addField('addAOS', 'aos_legend', PaletteManipulator::POSITION_APPEND)
  ->applyToPalette('headline', 'tl_content')
  ->applyToPalette('text', 'tl_content')
  ->applyToPalette('html', 'tl_content')
  ->applyToPalette('list', 'tl_content')
  ->applyToPalette('table', 'tl_content')
  ->applyToPalette('accordionStart', 'tl_content')
  ->applyToPalette('accordionSingle', 'tl_content')
  ->applyToPalette('sliderStart', 'tl_content')
  ->applyToPalette('code', 'tl_content')
  ->applyToPalette('markdown', 'tl_content')
  ->applyToPalette('hyperlink', 'tl_content')
  ->applyToPalette('toplink', 'tl_content')
  ->applyToPalette('image', 'tl_content')
  ->applyToPalette('gallery', 'tl_content')
  ->applyToPalette('player', 'tl_content')
  ->applyToPalette('youtube', 'tl_content')
  ->applyToPalette('vimeo', 'tl_content')
  ->applyToPalette('download', 'tl_content')
  ->applyToPalette('downloads', 'tl_content')
  ->applyToPalette('alias', 'tl_content')
  ->applyToPalette('article', 'tl_content')
  ->applyToPalette('teaser', 'tl_content')
  ->applyToPalette('form', 'tl_content')
;

PaletteManipulator::create()
  ->addLegend('aos_legend', 'include_legend', PaletteManipulator::POSITION_AFTER)
  ->addField('addAOS', 'aos_legend', PaletteManipulator::POSITION_APPEND)
  ->applyToPalette('module', 'tl_content')
;

$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_aos', 'showJsLibraryHint');


/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Felix Kästner <https://felix-kaestner.com>
 */
class tl_content_aos extends Contao\Backend
{
    /**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('Contao\BackendUser', 'User');
    }
    
	/**
	 * Show a hint if a JavaScript library needs to be included in the page layout
	 *
	 * @param object $dc
	 */
	public function showJsLibraryHint($dc)
	{
		if ($_POST || Contao\Input::get('act') != 'edit')
		{
			return;
		}

		// Return if the user cannot access the layout module (see #6190)
		if (!$this->User->hasAccess('themes', 'modules') || !$this->User->hasAccess('layout', 'themes'))
		{
			return;
		}

		$objCte = Contao\ContentModel::findByPk($dc->id);

		if ($objCte === null)
		{
			return;
        }
        
        if ($objCte->addAOS) {
            Contao\Message::addInfo(sprintf($GLOBALS['TL_LANG']['tl_content']['includeTemplate'], 'js_aos'));
        }
	}
}