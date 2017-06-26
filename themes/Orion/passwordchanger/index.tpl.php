<?php
$this->data['header'] = $this->t('{passwordchanger:passwordchanger:link_panel}');
$this->includeAtTemplateBase('includes/well-header.php'); ?>

<?php
if(isset($this->data['userMessage']) && is_string($this->data['userMessage'])){ ?>
	<div class="alert alert-success">
		<i class="glyphicon glyphicon-ok-circle"></i>
		<?php echo $this->t($this->data['userMessage']); ?>
	</div>
<?php }
elseif (isset($this->data['userMessage']) && is_array($this->data['userMessage'])) {
	$messages = '';
	foreach ($this->data['userMessage'] AS $message) {
		$messages .= '<p>' . $this->t($message) . '</p>';
	}
	$messages = substr_replace($messages, '<i class="glyphicon glyphicon-ok-circle"></i> ', 3, 0); ?>
	<div class="alert alert-success">
		<?php echo $messages; ?>
	</div>
<?php }?>

<?php if(isset($this->data['error']) && is_string($this->data['error'])){ ?>
	<div class="alert alert-danger"><?php echo $this->data['error']; ?></div>
<?php }
elseif (isset($this->data['error']) && is_array($this->data['error'])) {
	$messages = '';
	foreach ($this->data['error'] AS $message) {
		$messages .= '<p>' . $this->t($message) . '</p>';
	} ?>
	<div class="alert alert-danger"><?php echo $messages; ?></div>
<?php }?>

<h3 class="form-signin-heading">
	<?php echo $this->t('{passwordchanger:passwordchanger:link_panel}'); ?>
</h3> 

<ul>
<?php
	foreach ($this->data['links'] AS $link) {
		echo '<li><a href="' . htmlspecialchars($link['href']) . '">' . $this->t($link['text']) . '</a>';
		if(isset($link['extra_text'])) {
			echo $link['extra_text'];
		}
		echo '</li>';
	}
?>
</ul>

<?php $this->includeAtTemplateBase('includes/well-footer.php'); ?>