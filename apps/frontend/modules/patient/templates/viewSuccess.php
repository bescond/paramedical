<?php include_partial('header', array('defaultSearch' => $defaultSearch)); ?>

<div class="patient">
<h3>Patient</h3>
View patient: <?php echo $patient->firstname ?> <?php echo $patient->lastname ?>
</div>

<div class="events" style="border: 1px solid black; margin-left: 300px;">
<h2>Events</h2>

<div class="event">
<?php echo $eventForm->renderFormTag('create/SD lh') ?>
  <table>
    <?php echo $eventForm ?>
    <tr>
      <td colspan="2">
        <input type="submit" />
      </td>
    </tr>
  </table>
</form>
</div>

<?php foreach ($events as $event) { ?>
<div class="event">
<span class="date"><?php echo $event->date ?></span>
<span class="title"><?php echo $event->title ?></span>
<span class="description"><?php echo $event->description ?></span>
<span class="consultant"><?php echo $event->consultant_id ?></span>
</div>
<?php } ?>

</div>
