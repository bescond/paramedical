<form method="post" action="<?php echo url_for('consultant_update', $consultant); ?>" >
	<table>
	<?php echo $form->renderHiddenFields() ?>
	<div class="field">
	    <?php echo $form['User']['first_name']->renderLabel() ?>
		<?php echo $form['User']['first_name']->renderError() ?>
		<?php echo $form['User']['first_name'] ?>
	</div>
	<div class="field">
	    <?php echo $form['User']['last_name']->renderLabel() ?>
		<?php echo $form['User']['last_name']->renderError() ?>
		<?php echo $form['User']['last_name'] ?>
	</div>
	<div class="field">
	    <?php echo $form['User']['email_address']->renderLabel() ?>
		<?php echo $form['User']['email_address']->renderError() ?>
		<?php echo $form['User']['email_address'] ?>
	</div>
	<div class="field">
	    <?php echo $form['job']->renderLabel() ?>
		<?php echo $form['job']->renderError() ?>
		<?php echo $form['job'] ?>
	</div>
	</table>
    <input type="submit" class="button" />
</form>
