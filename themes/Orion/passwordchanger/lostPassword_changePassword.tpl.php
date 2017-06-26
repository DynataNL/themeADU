<?php
$this->data['header'] = $this->t('lpw_head');
$this->includeAtTemplateBase('includes/well-header.php'); ?>

<?php if(isset($this->data['error'])){ ?>
	  <div class="alert alert-danger">
	  	<i class="glyphicon glyphicon-exclamation-sign"></i>
	  	<?php echo $this->data['error']; ?>
	  </div>
<?php }?>
<h3 class="form-signin-heading text-center"><?php echo $this->t('lpw_head'); ?></h3>
<div class="alert alert-info"><?php echo $this->t('lpw_reg_para1', array('%UID%' => '<strong>' . $this->data['uid'] . '</strong>')); ?></div>
<?php print $this->data['formHtml']; ?>

<?php $this->includeAtTemplateBase('includes/well-footer.php'); ?>
