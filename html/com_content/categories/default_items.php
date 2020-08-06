<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('bootstrap.tooltip');

$class = ' class="first"';

if ($this->maxLevelcat != 0 && count($this->items[$this->parent->id]) > 0) :
?>
	<?php foreach ($this->items[$this->parent->id] as $id => $item) : ?>
		<?php
		if ($this->params->get('show_empty_categories_cat') || $item->numitems || count($item->getChildren())) :
		if (!isset($this->items[$this->parent->id][$id + 1]))
		{
			$class = ' class="last"';
		}
		?>
	
		<?php $class = ''; ?>
			
				<a class="list-group-item d-flex justify-content-between align-items-center" href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute($item->id, $item->language)); ?>" style="text-decoration: none">
				<h3 class="page-header item-title list-group-item-heading" style="display:inline">
				<?php echo $this->escape($item->title); ?></h3>
				<?php if ($this->params->get('show_cat_num_articles_cat') == 1) :?>
					<span class="badge badge-primary badge-pill" title="<?php echo JHtml::_('tooltipText', 'COM_CONTENT_NUM_ITEMS_TIP'); ?>">
						<?php #<?php echo JText::_('COM_CONTENT_NUM_ITEMS'); ?>
						<?php echo $item->numitems; ?>
					</span>
				<?php endif; ?>
				</a>
			
				<?php if (count($item->getChildren()) > 0 && $this->maxLevelcat > 1) : ?>
					<a id="category-btn-<?php echo $item->id; ?>" href="#category-<?php echo $item->id; ?>"
						data-toggle="collapse" data-toggle="button" class="btn btn-mini pull-right" aria-label="<?php echo JText::_('JGLOBAL_EXPAND_CATEGORIES'); ?>"><span class="icon-plus" aria-hidden="true"></span></a>
				<?php endif; ?>
			
			
			<?php if ($this->params->get('show_description_image') && $item->getParams()->get('image')) : ?>
				<img src="<?php echo $item->getParams()->get('image'); ?>" alt="<?php echo htmlspecialchars($item->getParams()->get('image_alt'), ENT_COMPAT, 'UTF-8'); ?>" />
			<?php endif; ?>
			<?php if ($this->params->get('show_subcat_desc_cat') == 1) : ?>
				<?php if ($item->description) : ?>
					<div class="category-desc">
						<?php echo JHtml::_('content.prepare', $item->description, '', 'com_content.categories'); ?>
					</div>
				<?php endif; ?>
			<?php endif; ?>

			<?php if (count($item->getChildren()) > 0 && $this->maxLevelcat > 1) : ?>
				<div class="collapse fade" id="category-<?php echo $item->id; ?>">
				<?php
				$this->items[$item->id] = $item->getChildren();
				$this->parent = $item;
				$this->maxLevelcat--;
				echo $this->loadTemplate('items');
				$this->parent = $item->getParent();
				$this->maxLevelcat++;
				?>
				</div>
			<?php endif; ?>
		
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>
