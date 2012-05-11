<?php include_partial('search', array('searchKeywords' => $searchKeywords)); ?>

<div class="patient_list">
<table>
	<thead>
	<tr>
		<th>First name</th>
		<th>Last name</th>
		<th>Birthdate</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($list as $patient) { ?>
		<tr>
			<td><?php echo link_to($patient->firstname, 'patient_show', $patient) ?></td>
			<td><?php echo link_to($patient->lastname, 'patient_show', $patient) ?></td>
			<td><?php echo link_to($patient->birthdate, 'patient_show', $patient) ?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</div>