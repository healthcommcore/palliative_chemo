<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>
<div class="<?php print $classes; ?>">
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
    <div class="view-content">
      <?php print $rows; ?>
    </div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

<?php 
/**
 * This is an addition to give users the choice of skipping ahead
 * to a different page of the Palliative Chemo booklet
 *
 * Dave Rothfarb 
 * 4-8-15
 */
	$view = views_get_current_view();
	$currentPage = $view->query->pager->current_page;
	$path = current_path() . '?page=';
	if ($pager) {
		switch($currentPage) {
			case 14:
				$decisionLinks = getDecisionLinks($path, $currentPage + 1, $currentPage + 3, 'Option 1: Read about life expectancy', 'Option 2: Skip ahead to FAQs');
				$pager = modifyPager($pager, 'pager-next', $decisionLinks);
				break;
				/*
				 */
			case 17:
				//$decisionLinks = getDecisionLinks($path, $currentPage - 2, $currentPage - 3, 'Go back to: Learn about life expectancy', 'Skip back to: Making your decision');
				$pager = modifyPager($pager, 'pager-previous', '');
				break;
		}
		if($currentPage !== 0) {
			$pager .= '<a class="topspace center display-table" href="/folfox/booklet">Go back to the beginning</a>';
		}
    print $pager;
	}

	function modifyPager($pager, $pagerButton, $links) {
		$pattern = '/<li class="' . $pagerButton . '">(.*?)<\/li>/';
		$pager = preg_replace($pattern, '', $pager);
		$pager .= $links;
		return $pager;
	}

	function getDecisionLinks($path, $firstLink, $secondLink, $firstLinkText, $secondLinkText) {
		$links = '<div class="center display-table">';
		$links .= '<a class="btn btn-primary btn-lg btn-space" href="/' . $path . $firstLink . '">' . $firstLinkText . '</a>';
		$links .= '<a class="btn btn-primary btn-lg btn-space" href="/' . $path . $secondLink . '">' . $secondLinkText . '</a>';
		$links .= '</div>';
		return $links;
	}
	?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>

</div><?php /* class view */ ?>
