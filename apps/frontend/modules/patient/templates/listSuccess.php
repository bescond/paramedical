<?php include_partial('header', array('form' => $form)); ?>

<?php foreach ($list as $record) { ?>
Patient : <a href="<?php echo url_for('@patient_view?id=' . $record->id) ?>"><?php echo $record->firstname ?> <?php echo $record->lastname ?></a><br />
<?php } ?>
