<?php include_partial('search', array('searchKeywords' => $searchKeywords)); ?>

<form method="post" action="<?php echo url_for('@patient_create'); ?>" >
	<table>
		<?php echo $form ?>
	</table>
	<input type="submit" class="button" />
</form>