<ul id="menu">
<?php  if ($sf_user->isAuthenticated()) { ?>

<?php
	$menu =	array(
				'Patient' => '@patient_list',
				'Calendar' => '@calendar_show',
			);

	foreach ($menu as $module => $route) {
		$options = array();
		if (strtolower($module) == $sf_context->getModuleName()) {
			$options = array('class' => 'current');
		}
?>
		<li><?php echo link_to($module, $route, $options); ?></li>
<?php  
	} 
?>
		<li><?php echo link_to('Logout', '@sf_guard_signout'); ?></li>
</ul>
<?php } ?>

<div class="spacer">&nbsp;</div>
