<div class="module">
	<?php 
		$module = $sf_context->getModuleName();
		switch ($module) {
			case 'patient':
				echo link_to(ucfirst($module), 'patient_list');
				break;
			case 'calendar':
				echo link_to(ucfirst($module), 'calendar_show');
				break;
			case 'consultant':
				echo link_to(ucfirst($module), 'consultant_show', $sf_user->getGuardUser()->getConsultant());
				break;
		}
		echo ' > ';
		echo link_to(ucfirst($sf_context->getActionName()), $sf_context->getModuleName().'_'.$sf_context->getActionName()); 
	?>
</div>

<div class="user">
<?php 
	if ($sf_user->isAuthenticated() && !is_null($sf_user->getGuardUser()->getConsultant()->getId())) {
		echo link_to ($sf_user->getGuardUser()->getName(), 'consultant_show', $sf_user->getGuardUser()->getConsultant());
	} else {
		echo $sf_user->getGuardUser()->getName();
	}
?>
</div>
<div class="notification">
	<?php echo $sf_user->getCurrentNumberOfEvent(); ?>
</div>