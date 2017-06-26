<?php 
	$this->data['header'] = $this->t($this->data['dictTitle']);
	$this->includeAtTemplateBase('includes/well-header.php'); ?>

			<div class="text-left" style="word-wrap: break-word;">
				<h1 class="text-center"><?php echo $this->t($this->data['dictTitle']); ?></h1>
				<br />
				<p><?php
					echo htmlspecialchars($this->t($this->data['dictDescr'], $this->data['parameters']));?></p>
				<p>
          <?php echo $this->t('report_trackid'); ?>
          <?php echo $this->data['error']['trackId']; ?>
				</p>		
			</div>	

<?php $this->includeAtTemplateBase('includes/well-footer.php'); ?>