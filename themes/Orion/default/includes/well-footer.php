<?php
if(!empty($this->data['htmlinject']['htmlContentPost'])) {
	foreach($this->data['htmlinject']['htmlContentPost'] AS $c) {
		echo $c;
	}
}
?>
		</div> 	<!-- end of well -->
	</div>		<!-- end of container -->

	<!-- Custom Bootstrap CSS - hidden attribute CSS removed -->
	<link rel="stylesheet" href="<?php echo SimpleSAML_Module::getModuleURL('themeADU/css/bootstrap.min.css') ?>">

</body>
</html>