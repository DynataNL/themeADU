<?php 

$this->data['header'] = $this->t('{passwordchanger:passwordchanger:link_changepw}');
$this->includeAtTemplateBase('includes/well-header.php'); ?>

<div class="alert alert-success">
		<i class="glyphicon glyphicon-ok-circle"></i>
	  <?php echo $this->t('lpw_complete_para1') ?>
</div>

<?php $this->includeAtTemplateBase('includes/well-footer.php'); ?>