<div id="sidebar">

<h2><?php _e('Search'); ?></h2>
<ul>
<input class="searchbar" placeholder="Search" type="search">
<input class="buttons" value="Go" type="submit">

<h2><?php _e('Categories'); ?></h2>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&hierachical=0'); ?>
</ul>

<ul>
<a href="/wordpress/sample-page">Main Page</a>
</ul>

<ul>
<a href="/wordpress/about">About</a>
</ul>

<h2><?php _e('Archives'); ?></h2>
<ul>
<?php wp_get_archives('type=monthly'); ?>
</ul>
</div>