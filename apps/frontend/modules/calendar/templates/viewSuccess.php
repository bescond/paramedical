<?php include_partial('header', array('defaultSearch' => $defaultSearch)); ?>

<script type='text/javascript'>
	$(document).ready(function() {
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: false,
			firstDay: 1,
			events: [
				<?php
					foreach($events as $event)
					{
						echo '{title:"' . $event->title . '",start:new Date(' . date('Y', strtotime($event->date)) . ', ' . (date('m', strtotime($event->date)) - 1) . ', ' . date('d', strtotime($event->date)) . ', ' . date('H', strtotime($event->date)) . ', ' . date('i', strtotime($event->date)) . '),end:new Date(' . date('Y', strtotime($event->date)) . ', ' . (date('m', strtotime($event->date)) - 1) . ', ' . date('d', strtotime($event->date)) . ', ' . (date('H', strtotime($event->date))+1) . ', ' . date('i', strtotime($event->date)) . '), allDay:false},'; 
					}
				?>
			]
		});

	});

</script>
<div id='calendar' style="margin:0 20%;"></div>