<?php
class Image {
	private $imageTypes = "(bmp|gif|jpg|jpeg|png|ico|WebP|xbm)";
	
	public function getImagesFromDir($path = ''){
		if(!realpath($path)){
			return false;
		}
		$dir = new RecursiveDirectoryIterator(realpath($path));
		$iterator = new RecursiveIteratorIterator($dir);
		$filteredImages = new RegexIterator($iterator, '/^.+\.'.$this->imageTypes.'$/i', RecursiveRegexIterator::GET_MATCH);
		$images = array();
		foreach($filteredImages as $img){
			$imgPath = str_replace(realpath(''),'',$img[0]);
			array_push($images, $imgPath);
		}
		return $images;
	}
}
?>