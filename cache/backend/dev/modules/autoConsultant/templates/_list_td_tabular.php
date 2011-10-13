<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($consultant->getId(), 'consultant_edit', $consultant) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_firstname">
  <?php echo $consultant->getFirstname() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_lastname">
  <?php echo $consultant->getLastname() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_job">
  <?php echo $consultant->getJob() ?>
</td>
