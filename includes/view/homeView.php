<?php

	class homeView extends View {

		public function __construct() {
			parent::__construct();
			
			$this->loadHomePage();
			
		}
		
		private function loadHomePage() {
			
			$title = "Offstreams Admin Panel";
			
			$this->siteName = "Dashboard";
			$this->loadPage($title);
			
		}
		
	}

?>
