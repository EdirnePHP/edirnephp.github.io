<?
	include "interface.class.php";
	
	class Input extends Events{
		
		private function getName(){
			return $this->name;
		}
		
		private function setName($value){
			$this->name = $value;
		}
		
		private function getPlaceholder(){
			return $this->placeholder;
		}
		
		private function setPlaceholder($value){
			$this->placeholder = $value;
		}		
		
		private function getMaxlength(){
			return $this->maxlength;
		}
		
		private function setMaxlenth($value){
			$this->maxlength = $value;
		}
		
		private function getSrc(){
			return $this->src;
		}
		
		private function setSrc($value){
			$this->src = $value;
		}
		
		/*
		//input tag with all attributes
		public function input($type,$name,$placeholder,$size,$value,$maxlength){
			$this->type = $type;
			$this->name = $name;
			$this->placeholder = $placeholder;
			$this->size = $size;
			$this->value = $value;
			$this->maxlength = $maxlength;
			echo '<input type="'.$type.'" name="'.$nameB.'" placeholder="'.$placeholder.'" size="'.$size.'" value="'.$value.'" maxlength="'.$maxlength.'"/>';
		}*/
		
		//text function can be changed any case of use with parameters that inherited by interface.class
		public function text($name,$placeholder,$maxlength){
			$this->setName($name);
			$this->setPlaceholder($placeholder);
			$this->setMaxlenth($maxlength);
			echo '<input type="text" name="'.$this->getName().'" placeholder="'.$this->getPlaceholder().'" maxlength="'.$this->getMaxlength().'"/>';
		}
		
		//password
		public function password($name,$placeholder,$maxlength){
			$this->setName($name);
			$this->setPlaceholder($placeholder);
			$this->setMaxlenth($maxlength);
			echo '<input type="password" name="'.$this->getName().'" placeholder="'.$this->getPlaceholder().'" maxlength="'.$this->getMaxlength().'"/>';
		}
		
		//email
		public function email($name,$placeholder,$maxlength){
			$this->setName($name);
			$this->setPlaceholder($placeholder);
			$this->setMaxlenth($maxlength);
			echo '<input type="email" name="'.$this->getName().'" placeholder="'.$this->getPlaceholder().'" maxlength="'.$this->getMaxlength().'"/>';
		}
		
		//search
		public function search($name,$placeholder,$maxlength){
			$this->setName($name);
			$this->setPlaceholder($placeholder);
			$this->setMaxlenth($maxlength);
			echo '<input type="search" name="'.$this->getName().'" placeholder="'.$this->getPlaceholder().'" maxlength="'.$this->getMaxlength().'"/>';
		}
		
		//tel
		public function tel($name,$placeholder,$maxlength){
			$this->setName($name);
			$this->setPlaceholder($placeholder);
			$this->setMaxlenth($maxlength);
			echo '<input type="tel" name="'.$this->getName().'" placeholder="'.$this->getPlaceholder().'" maxlength="'.$this->getMaxlength().'"/>';
		}
		
		//url
		public function url($name,$placeholder,$maxlength){
			$this->setName($name);
			$this->setPlaceholder($placeholder);
			$this->setMaxlenth($maxlength);
			echo '<input type="url" name="'.$this->getName().'" placeholder="'.$this->getPlaceholder().'" maxlength="'.$this->getMaxlength().'"/>';
		}
		
		//radio
		public function radio($name,$value,$checked){
			$this->setName($name);
			echo '<input type="radio" name="'.$this->getName().'" value="'.$value.'"'.$checked.'/>';
		}
		
		//checkbox
		public function checkbox($name,$value,$checked){
			$this->setName($name);
			echo '<input type="checkbox" name="'.$this->getName().'" value="'.$value.'"'.$checked.'/>';
		}
		
		//submit function can be changed any case of use with parameters that inherited by interface.class
		public function submit($name,$value){
			$this->setName($name);
			echo '<input type="submit" name="'.$this->getName().'" class="special" value="'.$value.'" onkeypress="Enter"/>';
		}
		
		//reset
		public function reset($name,$value){
			$this->setName($name);
			echo '<input type="reset" name="'.$this->getName().'" class="special" value="'.$value.'" onkeypress="Enter"/>';
		}
		
		//button
		public function button($name,$value){
			$this->setName($name);
			echo '<input type="button" name="'.$this->getName().'" class="special" value="'.$value.'" onkeypress="Enter"/>';
		}
		
		//image
		public function image($src,$alt,$width,$height){
			$this->setSrc($src);
			echo '<input type="image" src="'.$this->getSrc().'" alt="'.$alt.'" width="'.$width.'" height="'.$height.'"/>';
		}
		
		//file, syntax: <input accept="file_extension|audio/*|video/*|image/*|media_type">
		public function file($name,$accept){
			$this->setName($name);
			echo '<input type="file" name="'.$this->getName().'" accept="'.$accept.'"/>';
		}
		
		/*color
		date 
		datetime 
		datetime-local 
		hidden
		month 
		number 
		range 
		time 
		week*/
	}
?>