<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Including fallback code for the placeholder attribute in the search field.
JHtml::_('jquery.framework');
JHtml::_('script', 'system/html5fallback.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));

if ($width)
{
	$moduleclass_sfx .= ' ' . 'mod_search' . $module->id;
	$css = 'div.mod_search' . $module->id . ' input[type="search"]{ width:auto; }';
	JFactory::getDocument()->addStyleDeclaration($css);
	$width = ' size="' . $width . '"';
}
else
{
	$width = '';
}
?>

<form action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-inline my-2 mr-sm-2" id="navSearch" role="search">
	<?php
		$output = '<input name="searchword" id="mod-search-searchword' . $module->id . 
			'"  class="form-control mr-sm-2 search-query" type="search"';
		$output .= ' placeholder="' . $text . '" aria-label="Search" />';

		if ($button) :
			if ($imagebutton) :
				$btn_output = ' <input type="image" alt="' . $button_text . '" class="button" src="' . $img . '" onclick="this.form.searchword.focus();"/>';
			else :
				$btn_output = ' <button class="btn btn-outline-light my-2 my-sm-0" type="submit" onclick="this.form.searchword.focus();">'
					 . '<i class="fa fa-search" aria-hidden="true"></i>'
					 . '</button>';
			endif;

			switch ($button_pos) :
				case 'top' :
					$output = $btn_output . '<br />' . $output;
					break;

				case 'bottom' :
					$output .= '<br />' . $btn_output;
					break;

				case 'right' :
					$output .= $btn_output;
					break;

				case 'left' :
				default :
					$output = $btn_output . $output;
					break;
			endswitch;
		endif;
		echo $output;
	?>
	<input type="hidden" name="task" value="search" />
	<input type="hidden" name="option" value="com_search" />
	<input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
</form>
