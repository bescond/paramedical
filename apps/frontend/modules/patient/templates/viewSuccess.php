<?php include_stylesheets_for_form($eventForm) ?>
<?php include_javascripts_for_form($eventForm) ?>
<?php include_partial('header', array('defaultSearch' => $defaultSearch)); ?>

<div class="patient">
<h2>Patient</h2>
View patient: <?php echo $patient->firstname ?> <?php echo $patient->lastname ?>
</div>

<div class="events">
<h2>Events</h2>

<div class="event">
<?php echo $eventForm->renderFormTag(url_for('@patient_event_create?id=' . $patient->id)) ?>
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


<form class="event">
<div class="field">
<label for="event_title">Title</label>
<input type="text" class="title" id="event_title" name="event[title]" />
</div>
<div class="field">
<label for="event_date">Date</label>
<input type="text" class="date" id="event_date" name="event[date]" />
</div>
<div class="field">
<label for="event_consultant">Consultant</label>
<select class="consultant" id="event_consultant" name="event[consultant]" >
<option/>
</select>
</div>
<div class="field">
<label for="event_description">Description</label>
<textarea name="event[description]" class="description" id="event_description"></textarea>
</div>
</form>


<?php foreach ($events as $event) { ?>
<div class="event">
<a href="">
<h3 class="title"><?php echo $event->title ?></h3>
<span class="date">
<span class="day"><?php echo date('d-M', $event->date) ?></span>
<span class="year"><?php echo date('Y', $event->date) ?></span>
</span>
<span class="consultant"><?php echo $event->consultant_id ?></span>
<div class="description"><?php echo $event->description ?></div>
</a>
</div>
<?php } ?>

</div>
