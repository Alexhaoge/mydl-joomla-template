<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$user = JFactory::getUser();
$id = '';
if ($tagId = $params->get('tag_id', ''))
{
	$id = ' id="' . $tagId . '"';
}

// The menu class is deprecated. Use nav instead
?>
<?php
	if (count($list) > 1) {
		echo '<ul class="navbar-nav mr-auto mt-2 mt-lg-0">';
		foreach ($list as $i => &$item) {
			$class = 'nav-item';
			echo '<li class="' . $class . '">';
			switch ($item->type) :
				case 'separator':
				case 'component':
				case 'heading':
				case 'url':
					require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
					break;

				default:
					require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
					break;
			endswitch;
			echo '</li>';
		}
	} else { // special case for login button on the right
		echo '<ul class="navbar-nav">';
		foreach ($list as $i => &$item) {
			$class = 'nav-item';
			echo '<li class="'. $class . '">';
			$attributes = array();
			$attributes['class']='btn btn-outline-light';
			$attributes['type']='button';
			$linktype = $item->title;
			$item->flink="index.php?option=com_users&view=login";
			if ($user->id != 0) {
				$linktype = '<i class="fa fa-user" aria-hidden="true"></i>';
				$item->flink="index.php?option=com_users&view=profile";
			}
			echo JHtml::_('link', JFilterOutput::ampReplace(htmlspecialchars($item->flink, ENT_COMPAT, 'UTF-8', false)), $linktype, $attributes);
			echo '</li>';
		}
	}
?></ul>
