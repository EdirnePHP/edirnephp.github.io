<?
	class Script{
		public $content;
		public $path;
		
		private function getContent(){
			return $this->content;
		}
		
		private function setContent($value){
			$this->content = $value;
		}
		
		private function getPath(){
			return $this->path;
		}
		
		private function setPath($value){
			$this->path = $value;
		}
		
		function js($content){
			$this->setContent($content);
			echo '<script src="'.$this->getContent().'"></script>';
		}
		
		function css($path){
			$this->setPath($path);
			echo '<link rel="stylesheet" type="text/css" href="'.$this->getPath().'" />';
		}

	}
?>