<?php
$this->data['header'] = $this->t('cpw_head');
$this->includeAtTemplateBase('includes/well-header.php'); ?>

<h3 class="form-signin-heading text-center"><?php echo $this->t('cpw_head'); ?></h3>
<div class="alert alert-info"><?php echo $this->t('cpw_para1', array('%UID%' => '<strong>' . $this->data['uid'] . '</strong>') ); ?></div>
<?php if(isset($this->data['error'])){ ?>
	<div class="alert alert-danger">
		<i class="glyphicon glyphicon-exclamation-sign"></i>
		<?php echo $this->data['error']; ?>
	</div>
<?php }?>
<?php if(isset($this->data['userMessage'])){ ?>
	<div class="alert alert-success">
		<i class="glyphicon glyphicon-ok-circle"></i>
		<?php echo $this->t($this->data['userMessage']); ?>
	</div>
<?php }?>

<?php echo $this->data['formHtml']; ?>

<?php $this->includeAtTemplateBase('includes/well-footer.php'); ?>