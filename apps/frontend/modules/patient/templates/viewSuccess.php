<?php include_stylesheets_for_form($eventForm) ?>
<?php include_javascripts_for_form($eventForm) ?>
<?php include_partial('header', array('defaultSearch' => $defaultSearch)); ?>

<!-- Patient -->
<div class="patient">
	<h2>Patient</h2>
	<div class="panel">
		<div class="firstname">
			<div class="">First Name</div>
			<?php echo $patient->firstname ?>
		</div>
		<div class="lastname">
			<div class="">Last Name</div>
			<?php echo $patient->lastname ?>
		</div>
		<div class="birthdate">
			<div class="">Birthdate</div>
			<?php echo $patient->birthdate ?>
		</div>
		<div class="address">
			<div class="">Address</div>
			<?php echo $patient->address ?>
		</div>
		<div class="zip">
			<div class="">ZIP</div>
			<?php echo $patient->zip ?>
		</div>
		<div class="city">
			<div class="">City</div>
			<?php echo $patient->city ?>
		</div>
	</div>
</div>

<!-- Events -->
<div class="events">
	<h2>Events</h2>

<div class="panel">
<form method="post" action="<?php echo url_for('@patient_event_create?id=' . $patient->id); ?>" class="event">
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
	<article>
		<header>
			<div class="date">
				<div class="year"><?php echo date('Y', strtotime($event->date)) ?></div>
				<div class="day">
					<?php echo date('d', strtotime($event->date)) ?>
					<?php echo date('M', strtotime($event->date)) ?>
				</div>
			</div>
			<div class="title">
				<h1>
					<?php echo $event->title ?>
				</h1>
				<div class="consultant">
					Consulted by <?php echo $event->consultant_id ?>
				</div>
			</div>
		</header>
		<p><?php echo $event->description ?></p>
		<footer>
			<a href="#">Continue reading</a>
		</footer>
	</article>
</div>
<?php } ?>

</div>
