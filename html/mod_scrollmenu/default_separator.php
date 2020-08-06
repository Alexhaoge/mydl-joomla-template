<?php
/*------------------------------------------------------------------------
# mod_scrollmenu.php (module)
# ------------------------------------------------------------------------
# version		1.0.0
# author    	Top Position
# copyright 	Copyright (c) 2011 Top Position All rights reserved.
# @license 		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website http://mastermarketingdigital.org/open-source-joomla-extensions

This modules uses  DC jQuery Vertical Accordion Menu - jQuery vertical accordion menu plugin
 * 	Copyright (c) 2011 Design Chemical
 *	Dual licensed under the MIT and GPL licenses:
 * 	http://www.opensource.org/licenses/mit-license.php
 * 	http://www.gnu.org/licenses/gpl.html
-------------------------------------------------------------------------
*/
// no direct access
defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
$title = $item->anchor_title ? ' title="'.$item->anchor_title.'" ' : '';
if ($item->menu_image)
	{
		$item->params->get('menu_text', 1) ?
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" /><span class="image-title">'.$item->title.'</span> ' :
		$linktype = '<img src="'.$item->menu_image.'" alt="'.$item->title.'" />';
}
else { $linktype = $item->title;
}

?>
<span class="separator"<?php echo $title; ?>>
	<?php echo $linktype; ?>
</span>
