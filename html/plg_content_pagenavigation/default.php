<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Content.pagenavigation
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('bootstrap.tooltip');

$lang = JFactory::getLanguage();

?>
<nav class="mydl-pagination">
<?php if ($row->prev) :
	$direction = $lang->isRtl() ? 'right' : 'left'; ?>

		<a class="btn btn-outline-primary float-left" title="<?php echo htmlspecialchars($rows[$location-1]->title); ?>" aria-label="<?php echo JText::sprintf('JPREVIOUS_TITLE', htmlspecialchars($rows[$location-1]->title)); ?>" href="<?php echo $row->prev; ?>" rel="prev">
			<?php echo '<span class="icon-chevron-' . $direction . '" aria-hidden="true"></span> <span aria-hidden="true">' . $row->prev_label . '</span>'; ?>
		</a>

<?php endif; ?>
<?php if ($row->next) :
	$direction = $lang->isRtl() ? 'left' : 'right'; ?>

		<a class="btn btn-outline-primary float-right" title="<?php echo htmlspecialchars($rows[$location+1]->title); ?>" aria-label="<?php echo JText::sprintf('JNEXT_TITLE', htmlspecialchars($rows[$location+1]->title)); ?>" href="<?php echo $row->next; ?>" rel="next">
			<?php echo '<span aria-hidden="true">' . $row->next_label . '</span> <span class="icon-chevron-' . $direction . '" aria-hidden="true"></span>'; ?>
		</a>

<?php endif; ?>
</nav>
