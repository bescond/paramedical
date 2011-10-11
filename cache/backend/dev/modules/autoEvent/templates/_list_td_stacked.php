<td colspan="6">
  <?php echo __('%%id%% - %%date%% - %%title%% - %%descritpion%% - %%patient_id%% - %%consultant_id%%', array('%%id%%' => link_to($event->getId(), 'event_edit', $event), '%%date%%' => $event->getDate(), '%%title%%' => $event->getTitle(), '%%descritpion%%' => $event->getDescritpion(), '%%patient_id%%' => $event->getPatientId(), '%%consultant_id%%' => $event->getConsultantId()), 'messages') ?>
</td>
