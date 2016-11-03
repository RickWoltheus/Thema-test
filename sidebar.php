<div id="sidebar">
  <?php
  // Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');
?>
<h2><?php _e('Search'); ?></h2>

<h2 ><?php _e('Categories'); ?></h2>

<?php wp_nav_menu( array( 'menu' => 'main-menu', 'menu_class' => 'nav') ); ?>

<h2 ><?php _e('Categories'); ?></h2>
<ul >
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>
<h2 ><?php _e('Archives'); ?></h2>
<ul >
<?php wp_get_archives('type=monthly'); ?>
</ul>
</div>