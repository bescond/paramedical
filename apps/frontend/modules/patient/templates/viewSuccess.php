<?php include_partial('header', array('defaultSearch' => $defaultSearch)); ?>

<!-- Patient -->
<h2>Patient</h2>
<div class="patient">
	<div class="panel">
		<label for="firstname">First Name</label>
		<div class="firstname"><?php echo $patient->firstname ?></div>
		<label for="lastname">Last Name</label>
		<div class="lastname"><?php echo $patient->lastname ?></div>
		<label for="birthdate">Birthdate</label>
		<div class="birthdate"><?php echo date('d-M-Y', strtotime($patient->birthdate)) ?></div>
		<label for="address">Address</label>
		<div class="address"><?php echo $patient->address ?></div>
		<label for="zip">ZIP</label>
		<div class="zip"><?php echo $patient->zip ?></div>
		<label for="city">City</label>
		<div class="city"><?php echo $patient->city ?></div>
	</div>
</div>

<!-- Events -->
<div class="events">

<div class="panel">
<form method="post" action="<?php echo url_for('@patient_event_create?id=' . $patient->id); ?>" class="event">
  <table>
    <?php echo $eventForm ?>
    <tr>
      <td colspan="2">
        <input type="submit" class="button" />
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
					<?php if(!empty($event->consultant_id)) { ?>
						Consulted by <?php echo $event->getConsultant()->getFirstname().' '.$event->getConsultant()->getLastname() ?>
					<?php } ?>
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