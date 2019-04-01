<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo TITLE; ?></title>
</head>
<body>
	<hr>
	<p><?php echo "Line {$str}: {$line1}"; ?></p>
	<p><?php echo "Symbol {$sym} in line {$str}: {$char}"; ?></p>
	<p><?php echo "In line {$number_str} change symbol number {$change_symbol} on {$symbol} : {$line2}"; ?></p>
	<h2>File before changes</h2>
	<?php
		if(is_array($file1)){
			echo 'Lines in file: '.count($file1).'<br>';
			echo '<hr>';
			foreach($file1 as $line_num => $line)
			{
				$line_num += 1;
				echo "{$line_num}.&nbsp;&nbsp;{$line}<br>";
			}
		} else {
			echo "Permission denied";
		}
	?>
	<hr>
	<h2>File after changes line <?php echo $change_str; ?></h2>
	<?php
		if(is_array($file2)){
			foreach($file2 as $line_num => $line)
			{
				$line_num += 1;
				echo "{$line_num}.&nbsp;&nbsp;{$line}<br>";
			}
		} else {
            echo "Permission denied";
        }
	?>
	<hr>
	<h2>File after changes <?php echo "symbol {$change_symbol} in line {$number_str}"; ?></h2>
	<?php
		if(is_array($file3)){
			foreach($file3 as $line_num => $line)
			{
				$line_num += 1;
				echo "{$line_num}.&nbsp;&nbsp;{$line}<br>";
			}
		} else {
			echo "Permission denied";
		}
		
?>
</body>
</html>