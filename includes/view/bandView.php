<?php

	class bandView extends View {
		
		public function __construct() {
			parent::__construct();
			
			
		}
		
		
		
		public function loadBandPage() {
			
			$title = "Bands | Offstreams Admin";
			
			$this->siteName = "Bands";
			$this->loadPage($title, "bandHomepageTemplate.php");
			
		}
		
		
		
		public function loadAddPage() {
			
			$title = "Add Band | Offstreams Admin";
			
			$this->siteName = "Bands";
			$this->loadPage($title, "bandAddTemplate.php");
			
		}
		
	}

?>
