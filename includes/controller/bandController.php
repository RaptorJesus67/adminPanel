<?php

	class bandController {
		
		public function __construct() {
			
			global $url;
			
			$this->url = $url->trimURL();
			
			$this->model = new bandModel;
			$this->view = new bandView;
			
			
			///////////////////////////////
			//	BAND SUB-PAGE
			//
			if (isset($this->url[1])) {
			
				$this->pageType();
				
			}
			
			
			///////////////////////////////
			//	BAND HOMEPAGE (DASHBOARD)
			//
			elseif (isset($this->url[0])) {
			
				$this->view->loadBandPage();
				
			}
			
		}
		
		
		
		private function pageType() {
			
			switch($this->url[1]) {
			
				case "add":
					$this->addBandPage();
					break;
					
				case "edit":
					break;
					
				case "approve":
					break;
					
				# Load Main Band Page to prevent blank pages
				default:
					$this->view->loadBandPage();
					break;
				
			}
			
		}
		
		
		
		
		private function addBandPage() {
			
			$this->view->loadAddPage();
			
		}
		
		
		
		
		
		
		
	}

?>
