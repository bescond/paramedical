<td colspan="4">
  <?php echo __('%%id%% - %%firstname%% - %%lastname%% - %%job%%', array('%%id%%' => link_to($consultant->getId(), 'consultant_edit', $consultant), '%%firstname%%' => $consultant->getFirstname(), '%%lastname%%' => $consultant->getLastname(), '%%job%%' => $consultant->getJob()), 'messages') ?>
</td>
