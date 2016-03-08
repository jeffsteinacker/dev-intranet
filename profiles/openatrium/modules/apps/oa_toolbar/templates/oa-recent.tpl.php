<?php
/**
 * @file
 * This template handles the layout of oa_recent pane.
 */
?>
<ul class="oa-recent oa_toolbar">
  <li class="btn-group oa-no-separator dropdown">
    <a href="#" class="dropdown-toggle btn <?php print $oa_toolbar_btn_class; ?>" title="<?php print $icon_title; ?>" data-toggle="dropdown">
      <i class="<?php print $icon; ?>"></i><span class='element-invisible'><?php print $icon_title; ?></span>
    </a>
    <?php if (!empty($home_spaces)): ?>
      <ul class="dropdown-menu multi-column columns-2" id="oa-space-menu" role="menu">
        <?php if (!empty($home_spaces)): ?>
          <li class="col-sm-6">
            <ul class="multi-column-dropdown">
              <li><?php print $home_spaces; ?></li>
            </ul>
          </li>
        <?php endif; ?>
        <?php if (!empty($spaces_favorite)): ?>
          <li class="col-sm-6">
            <ul class="multi-column-dropdown">
              <li><?php print $spaces_favorite; ?></li>
            </ul>
          </li>
      <?php endif; ?>
      </ul>
    <?php endif; ?>
  </li>
</ul>
