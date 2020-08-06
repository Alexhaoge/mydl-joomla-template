<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_breadcrumbs
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<nav class="sticky-top" aria-label="<?php echo $module->name; ?>" role="navigation">
	<ol class="breadcrumb <?php echo $moduleclass_sfx; ?>" id="navbar">
		<?php if ($params->get('showHere', 1)) : ?>
			<li class="breadcrumb-item active">
				<?php echo JText::_('MOD_BREADCRUMBS_HERE'); ?>&#160;
			</li>
		<?php else : ?>
			<li class="breadcrumb-item active">
				<span class="divider icon-location"></span>
			</li>
		<?php endif; ?>

		<?php
		// Get rid of duplicated entries on trail including home page when using multilanguage
		for ($i = 0; $i < $count; $i++)
		{
			if ($i === 1 && !empty($list[$i]->link) && !empty($list[$i - 1]->link) && $list[$i]->link === $list[$i - 1]->link)
			{
				unset($list[$i]);
			}
		}

		// Find last and penultimate items in breadcrumbs list
		end($list);
		$last_item_key   = key($list);
		prev($list);
		$penult_item_key = key($list);

		// Make a link if not the last item in the breadcrumbs
		$show_last = $params->get('showLast', 1);

		// Generate the trail
		foreach ($list as $key => $item) :
			if ($key !== $last_item_key) :
				// Render all but last item - along with separator ?>
				<li class="breadcrumb-item">
					<?php if (!empty($item->link)) : ?>
						<a href="<?php echo $item->link; ?>" class="pathway">
							<?php echo $item->name; ?>
						</a>
					<?php else : ?>
						<?php echo $item->name; ?>
					<?php endif; ?>

					<meta itemprop="position" content="<?php echo $key + 1; ?>">
				</li>
			<?php elseif ($show_last) :
				// Render last item if reqd. ?>
				<li class="breadcrumb-item active" aria-current="page">
						<?php echo $item->name; ?>
					<meta itemprop="position" content="<?php echo $key + 1; ?>">
				</li>
			<?php endif;
		endforeach; ?>
	</ol>
</nav>
