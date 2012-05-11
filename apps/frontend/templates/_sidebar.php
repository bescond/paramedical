<div class="list">
<?php 
	switch ($sf_context->getModuleName()) {
		case 'patient':
			echo link_to('New', 'patient_new');
			echo link_to('List', 'patient_list');
			break;
		case 'calendar':
			echo link_to('Create', 'calendar_show');
			echo link_to('Agenda', 'calendar_show');
			break;
	}
?>
</div>