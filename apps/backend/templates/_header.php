<ul id="menu">
	<?php //if ($sf_user->isAuthenticated()): ?>
		<li><?php echo link_to('Patient', '@patient') ?></li>
		<li><?php echo link_to('Consultant', '@consultant') ?></li>
		<li><?php echo link_to('Event', '@event') ?></li>
		<li><?php echo link_to('Manage Users', '@manage_users') ?></li>
		<li><?php echo link_to('Manage Permissions', '@manage_permissions') ?></li>
		<li><?php echo link_to('Manage Groups', '@manage_groups') ?></li>
		<li><?php echo link_to('Logout', '@sf_guard_signout') ?></li>
	<?php //endif; ?>
</ul>

<div class="user">
You are 
<?php if ($sf_user->isAuthenticated()) { ?>
<?php echo $sf_user->getGuardUser()->getName(); ?>
<?php } else { ?>
not connected !
<?php } ?>
</div>

<div class="spacer">&nbsp;</div>
