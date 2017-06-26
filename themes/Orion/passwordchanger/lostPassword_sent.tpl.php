<?php

$this->data['header'] = $this->t('lpw_success_head');
$this->data['head'] = '<link rel="stylesheet" href="resources/passwordchanger.css" type="text/css">';
$this->includeAtTemplateBase('includes/well-header.php'); ?>

<div style="margin: 1em">
	  <h3><?php echo $this->t('lpw_success_head'); ?></h3>
	  <p><?php echo $this->t('lpw_success_para1'); ?></p>
</div>

<?php $this->includeAtTemplateBase('includes/well-footer.php'); ?>
