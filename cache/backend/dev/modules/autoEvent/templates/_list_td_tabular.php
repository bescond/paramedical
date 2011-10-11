<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($event->getId(), 'event_edit', $event) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_date">
  <?php echo $event->getDate() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $event->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_descritpion">
  <?php echo $event->getDescritpion() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_patient_id">
  <?php echo $event->getPatientId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_consultant_id">
  <?php echo $event->getConsultantId() ?>
</td>
