<h2>Calendar</h2>
<div class="action">
	<form method="post" action="<?php echo url_for('@calendar_previous?year='.$year.'&month='.$month.'&day='.$day); ?>" >
		<input type="submit" value="<<" class="button" />
	</form>
	<form method="post" action="<?php echo url_for('@calendar_next?year='.$year.'&month='.$month.'&day='.$day); ?>" >
		<input type="submit" value=">>" class="button" />
	</form>
</div>

<?php
$start_day	= strtotime('01-'.$month.'-'.$year);
$end_date	= date('d-m-Y', strtotime('-1 second', strtotime('+1 month', $start_day)));
$last_day 	= getdate(strtotime($end_date));
?>

<table border="1" width="70%">

<?php 
for($i=0; $i<$last_day['mday']; $i++) {
	if(is_int($i/7)) {
?>
	<tr>
<?php } ?>
		<td width="10%" height="80px">
			<?php echo ($i+1); ?>
		</td>
<?php } ?>
</table>
</div>
