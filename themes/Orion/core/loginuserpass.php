<?php 
	$this->data['header'] = $this->t('{login:user_pass_header}');
	$this->includeAtTemplateBase('includes/well-header.php'); ?>

			<form name="loginform" id="loginform" action="?" method="post" class="form-signin">
				<h3 class="form-signin-heading text-center"><?php echo $this->t('{login:user_pass_header}'); ?></h3>

				<?php if (isset($this->data['error'])) { ?>
				<div id="error" class="alert alert-danger" role="alert">
					<i class="glyphicon glyphicon-exclamation-sign"></i>
					<strong><?php echo $this->t('{error:error_header}'); ?></strong>
					<?php echo $this->t($this->data['error']); ?>
				</div>
				<?php } ?>		
						
				<?php	if ($this->data['errorcode'] !== NULL) { ?>
				<div id="error" class="alert alert-danger" role="alert">
					<i class="glyphicon glyphicon-exclamation-sign"></i>
					<strong><?php echo $this->t('{errors:title_' . $this->data['errorcode'] . '}'); ?></strong><br />
					<?php echo $this->t('{errors:descr_' . $this->data['errorcode'] . '}'); ?>
				</div>
				<?php } ?>
				<div hidden><label for="username"><?php echo $this->t('{login:username}'); ?></label></div>
				<label for="username" class="sr-only"><?php echo $this->t('{login:username}'); ?></label>
				<input type="text" name="username" id="username" class="input form-control" placeholder="Username" autofocus required tabindex="1" />
				<div hidden><br /></div>
				<div hidden><label for="user_pass"><?php echo $this->t('{login:password}'); ?></label></div>
				<label for="user_pass" class="sr-only"><?php echo $this->t('{login:password}'); ?></label>
				<input type="password" name="password" id="user_pass" class="input form-control" placeholder="Password" required tabindex="2" />

				<button class="btn btn-lg btn-primary btn-block" type="submit" name="wp-submit" id="wp-submit" ><?php echo $this->t('{login:login_button}'); ?></button>

				<?php	
					foreach ($this->data['stateparams'] as $name => $value) {
						echo('<input type="hidden" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '" />');
					} 
				?>
			</form>

			<?php 	if ($this->data['errorcode'] !== NULL) {
								$button_type = 'btn-danger';
							}
							else {
								$button_type = 'btn-default';
							}
			?>
			<form action="https://my.adu.edu/login-help" class="form-signin" id="need-help">
    		<button class="btn btn-lg <?php echo $button_type; ?> btn-block" type="submit">Login help</button>
			</form>

<?php $this->includeAtTemplateBase('includes/well-footer.php'); ?>
