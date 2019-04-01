<?php
class File
{
	private $fileData;
	private $changedData;
	public function __construct($fileName) { 	
		if(file_exists($fileName)){
			if(0644 === ( fileperms($fileName) & 0644 )){
				$this->fileData = file($fileName);
			} else {
				return false;
			}
		} else {
			return false;
		}
    }
    public function readSymbol($s, $row) {
		$s = (int)$s;
		$row = (int)$row;
		if($this->fileData){
			$str = $this->getString($s);
			if($row > 0) {
				$arr = $this->mbStringToArray($str);
				return $arr[$row - 1];
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	public function getString($row) { 
		$row = (int)$row;
		if($this->fileData){
			$flines = count($this->fileData);
			if($row > $flines || $row == 0){
				return false;
			} else {
				foreach($this->fileData as $line_num => $line)
				{
					$line_num += 1;
					if($row == $line_num){
						return $line;
					}
				}
			}
		} else {
			return false;
		}
	} 
	public function setString($str, $row) { 
		$line = (int)$row;
		$replace = $str;
		if($this->fileData){
			$file = $this->fileData; 
			$file[$line-1] = $replace.PHP_EOL;
			$this->changedData = $file;
			return $file;
		} else {
			return false;
		}
	}
	public function setSymbol($sym, $str, $row) {  
		$s = (int)$str;
		$row = (int)$row;
		if($this->fileData){
			$file = $this->fileData;
			$str = $this->getString($s);
			if($row > 0) {
				$arr = $this->mbStringToArray($str);
				$arr[$row - 1] = $sym;
				$str = implode("", $arr);
				$file[$s-1] = $str;
				$this->changedData = $file;
				return $str;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	public function getFileContent($fileName) {
		if(file_exists($fileName)){
			$content = file($fileName);
				return $content;
			}  else {
			return false;
		}
	}
	public function saveChanges($fileName){
		$content = $this->changedData;
		$result = file_put_contents($fileName, $content);
			if($result){
				return true;
			} else {
				return false;
			}
		}
	
	function mbStringToArray($string, $encoding = 'UTF-8') {
		$arr = array();
		$strlen = mb_strlen($string);
		while ($strlen) {
			$arr[] = mb_substr($string, 0, 1, $encoding);
			$string = mb_substr($string, 1, $strlen, $encoding);
			$strlen = mb_strlen($string, $encoding);
		}
		return $arr;
	}
}
?>
