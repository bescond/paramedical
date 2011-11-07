<ul id="menu">
<li><?php echo link_to('Patient', '@patient_list'); ?></li>
<li><?php echo link_to('Calendar', '@patient_list'); ?></li>
<?php if ($sf_user->isAuthenticated()) { ?>
<li><?php echo link_to('Logout', '@sf_guard_signout'); ?></li>
<?php } ?>
</ul>