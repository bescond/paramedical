<ul id="menu">
<?php

foreach (array(
	'Patient' => '@patient_list',
	'Calendar' => '@calendar_view?year='.date('Y').'&month='.date('m').'&day='.date('d'),
) as $module => $route) {
	$options = array();
	if (strtolower($module) == $sf_context->getModuleName()) {
		$options = array('class' => 'current');
	}
?>
<li><?php echo link_to($module, $route, $options); ?></li>
<?php	
}

?>
<?php if ($sf_user->isAuthenticated()) { ?>
<li><?php echo link_to('Logout', '@sf_guard_signout'); ?></li>
<?php } ?>
</ul>

<div class="user">
You are 
<?php if ($sf_user->isAuthenticated()) { ?>
<?php echo $sf_user->getGuardUser()->getName(); ?>
<?php } else { ?>
not connected !
<?php } ?>
</div>

<div class="spacer">&nbsp;</div>
