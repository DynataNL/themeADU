<?php 
if (!array_key_exists('header', $this->data)) {
    $this->data['header'] = 'selectidp';
}
$this->data['header'] = $this->t($this->data['header']);
$this->data['autofocus'] = 'dropdownlist';
$this->includeAtTemplateBase('includes/well-header.php');

foreach ($this->data['idplist'] as $idpentry) {
    if (!empty($idpentry['name'])) {
        $this->includeInlineTranslation('idpname_'.$idpentry['entityid'], $idpentry['name']);
    } elseif (!empty($idpentry['OrganizationDisplayName'])) {
        $this->includeInlineTranslation('idpname_'.$idpentry['entityid'], $idpentry['OrganizationDisplayName']);
    }
    if (!empty($idpentry['description'])) {
        $this->includeInlineTranslation('idpdesc_'.$idpentry['entityid'], $idpentry['description']);
    }
}
?>

<form method="get" action="<?php echo $this->data['urlpattern']; ?>">
	<h3 class="form-signin-heading text-center"><?php echo $this->data['header']; ?></h3>
	<input type="hidden" name="entityID" value="<?php echo htmlspecialchars($this->data['entityID']); ?>"/>
	<input type="hidden" name="return" value="<?php echo htmlspecialchars($this->data['return']); ?>"/>
	<input type="hidden" name="returnIDParam" value="<?php echo htmlspecialchars($this->data['returnIDParam']); ?>"/>
	<label for="idpentityid"><?php echo $this->t('selectidp_full'); ?></label>
	<select id="dropdownlist" name="idpentityid" id="idpentityid" class="form-control">
		<?php

		$GLOBALS['__t'] = $this;
		usort($this->data['idplist'], function ($idpentry1, $idpentry2) {
			return strcmp(
				$GLOBALS['__t']->t('idpname_'.$idpentry1['entityid']),
				$GLOBALS['__t']->t('idpname_'.$idpentry2['entityid'])
			);
		});
		unset($GLOBALS['__t']);

		foreach ($this->data['idplist'] as $idpentry) {
			echo '<option value="'.htmlspecialchars($idpentry['entityid']).'"';
			if (isset($this->data['preferredidp']) && $idpentry['entityid'] == $this->data['preferredidp']) {
				echo ' selected="selected"';
			}
			echo '>'.htmlspecialchars($this->t('idpname_'.$idpentry['entityid'])).'</option>';
		}
		?>
	</select></br>
	<button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $this->t('select'); ?></button>
	<?php
	if ($this->data['rememberenabled']) {
		echo('<br/><p><input type="checkbox" name="remember" value="1" /> '.$this->t('remember').'</p>');
	}
	?>
</form>


<?php $this->includeAtTemplateBase('includes/well-footer.php'); ?>