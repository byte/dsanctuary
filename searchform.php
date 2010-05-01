<form method="get" id="searchform" action="<?php echo get_settings('home'); ?>/">
<div><input class="text" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
<input type="submit" class="searchbutton" value="Search" />
</div>
</form>
