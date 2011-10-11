<td colspan="7">
  <?php echo __('%%id%% - %%firstname%% - %%lastname%% - %%birthdate%% - %%address%% - %%zip%% - %%city%%', array('%%id%%' => link_to($patient->getId(), 'patient_edit', $patient), '%%firstname%%' => $patient->getFirstname(), '%%lastname%%' => $patient->getLastname(), '%%birthdate%%' => false !== strtotime($patient->getBirthdate()) ? format_date($patient->getBirthdate(), "f") : '&nbsp;', '%%address%%' => $patient->getAddress(), '%%zip%%' => $patient->getZip(), '%%city%%' => $patient->getCity()), 'messages') ?>
</td>
