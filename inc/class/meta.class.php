<?
	class Meta{
		private $content1 = null;
		private $content2 = null;
		private $content3 = null;
		private $name = null;
		public $value;
		
		private function getContent1(){
			return $this->content1;
		}
		
		private function setContent1($value){
			$this->content1 = $value;
		}
		
		private function getContent2(){
			return $this->content2;
		}
		
		private function setContent2($value){
			$this->content2 = $value;
		}
		
		private function getContent3(){
			return $this->content3;
		}
		
		private function setContent3($value){
			$this->content3 = $value;
		}
		
		private function getName(){
			return $this->name;
		}
		
		private function setName($value){
			$this->name = $value;
		}
		
		public function __construct(){
			echo '<meta charset="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge" />';
		}
		
		public function Description($content1){
			$this->setContent1($content1);
			echo '<meta name="description" content="'.$this->getContent1().'" />';
		}
		
		public function Keywords($content2){
			$this->setContent2($content2);
			echo '<meta name="keywords" content="'.$this->getContent2().'" />';
		}
		
		public function Basic($name,$content3){
			$this->setName($name);
			$this->setContent3($content3);
			echo '<meta name="'.$this->getName().'" content="'.$this->getContent3().'" />';
		}
		
	}
?>