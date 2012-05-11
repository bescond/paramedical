<?php include_partial('header', array('form' => $form)); ?>

<script type='text/javascript'>
$(document).ready(function() {
	var notFonction = function(prmEvents) {
		var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			// time formats
			titleFormat: {
				month: 'MMMM yyyy',
				week: "d[ MMM][ yyyy]{ '-' d MMM yyyy}",
				day: 'dddd d MMMM yyyy'
			},
			columnFormat: {
				month: 'ddd',
				week: 'ddd d/MM',
				day: 'dddd d/MM'
			},
			timeFormat: { // for event elements
				'': 'HH:mm',
				agenda: 'HH:mm{ - HH:mm}'
			},
			monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
			monthNamesShort: ['Jan','Fév','Mar','Avr','Mai','Juin','Juil','Août','Sep','Oct','Nov','Déc'],
			dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
			dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
			editable: true,
			firstDay: 1,
			buttonText: {
				prev: '&nbsp;&#9668;&nbsp;',
				next: '&nbsp;&#9658;&nbsp;',
				prevYear: '&nbsp;&lt;&lt;&nbsp;',
				nextYear: '&nbsp;&gt;&gt;&nbsp;',
				today: 'Aujourd\'hui',
				month: 'Mois',
				week: 'Semaine',
				day: 'Jour'
			},
			allDayText: 'Journée<br/>entière',
			firstHour: 8,
			axisFormat: 'HH:mm',
			minTime: 6,
			maxTime: 23,

			events: prmEvents,

		    eventResize: function(event,dayDelta,minuteDelta,revertFunc) {
		        alert(
		            "The end date of " + event.title + "has been moved " +
		            dayDelta + " days and " +
		            minuteDelta + " minutes."
		        );
		    },
		});
	};

	notFonction([
		<?php
			foreach($events as $event)
			{
				echo '{title:"' . $event->title . '",start:new Date(' . date('Y', strtotime($event->date)) . ', ' . (date('m', strtotime($event->date)) - 1) . ', ' . date('d', strtotime($event->date)) . ', ' . date('H', strtotime($event->date)) . ', ' . date('i', strtotime($event->date)) . '),end:new Date(' . date('Y', strtotime($event->date)) . ', ' . (date('m', strtotime($event->date)) - 1) . ', ' . date('d', strtotime($event->date)) . ', ' . (date('H', strtotime($event->date))+1) . ', ' . date('i', strtotime($event->date)) . '), allDay:false},'; 
			}
		?>
	]);
});

</script>
<div id='calendar'></div>