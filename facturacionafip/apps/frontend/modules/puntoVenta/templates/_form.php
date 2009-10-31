<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<form action="<?php echo url_for('puntoVenta/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('puntoVenta/index') ?>">Cancelar</a>
          <input type="submit" value="Aceptar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
    <?php if ($form->getObject()->isNew()) {?>
      <?php echo $form ?>
    <?php } else {?>
      <?php echo $form['description']->renderRow() ?>
    <?php } ?>
    </tbody>
  </table>
</form>
