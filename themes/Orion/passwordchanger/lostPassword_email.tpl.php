<?php 
$this->data['header'] = $this->t('lpw_head');
$this->includeAtTemplateBase('includes/well-header.php'); ?>

<form method="post" action="lostPassword.php" class="form-horizontal">
	<h3 class="form-signin-heading text-center"><?php echo $this->t('lpw_head'); ?></h3>

	<div class="alert alert-info"><p><?php echo $this->t('lpw_para1'); ?></p></div>

	<?php if(isset($this->data['error'])){ ?>
	<div id="error" class="alert alert-danger" role="alert">
		<i class="glyphicon glyphicon-exclamation-sign"></i>
		<?php echo $this->data['error']; ?>
	</div>
	<?php }?>

	<div class="form-group">
		<label for="myusername" class="sr-only">my.adu.edu username</label>
		<label for="myusername" class="hidden-xs">my.adu.edu Username</label>
		<input type="text" name="myusername" class="input form-control" placeholder="my.adu.edu Username" autofocus tabindex="1" />
	</div>
	<div class="form-group">	
		<label for="emailreg" class="sr-only">email address</label>
		<label for="emailreg" class="hidden-xs">Email Address</label>
		<input type="text" name="emailreg" class="input form-control" placeholder="Email Address" tabindex="2" />
	</div>
			<span class="help-block"><?php echo $this->t('lpw_para2'); ?></span>
	<div class="input-actions">
		<input type="submit" name="save" class="btn btn-primary form-control" value="<?php echo $this->t('submit_mail'); ?>" />
	</div>
</form>

<?php $this->includeAtTemplateBase('includes/well-footer.php'); ?>
