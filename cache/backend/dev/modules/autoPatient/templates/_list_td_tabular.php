<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($patient->getId(), 'patient_edit', $patient) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_firstname">
  <?php echo $patient->getFirstname() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_lastname">
  <?php echo $patient->getLastname() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_birthdate">
  <?php echo false !== strtotime($patient->getBirthdate()) ? format_date($patient->getBirthdate(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_address">
  <?php echo $patient->getAddress() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_zip">
  <?php echo $patient->getZip() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_city">
  <?php echo $patient->getCity() ?>
</td>
