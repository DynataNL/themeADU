<?php
/**
 * Template which is shown when there is only a short interval since the user was last authenticated.
 *
 * Parameters:
 * - 'target': Target URL.
 * - 'params': Parameters which should be included in the request.
 *
 * @package simpleSAMLphp
 */

	$this->data['header'] = $this->t('{authorize:Authorize:403_header}');
	$this->includeAtTemplateBase('includes/well-header.php');

$this->data['403_header'] = $this->t('{authorize:Authorize:403_header}');
$this->data['403_text'] = $this->t('{authorize:Authorize:403_text}');
?>
<h1 class="text-center"><?php echo $this->data['403_header']; ?></h1>
<p><?php echo $this->data['403_text']; ?></p>
<ul class="list-unstyled">
	<li><a href="https://my.adu.edu">Return to my.adu.edu</a></li>
<?php
if (isset($this->data['LogoutURL'])) {
?>
	<li><a href="<?php echo htmlspecialchars($this->data['LogoutURL']); ?>"><?php echo $this->t('{status:logout}'); ?></li>
</ul>
<?php
}
$this->includeAtTemplateBase('includes/well-footer.php'); ?>
