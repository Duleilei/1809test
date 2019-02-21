<?php

$int1   = mt_rand(10, 200);
$int2   = mt_rand(0, 200);
$int3   = mt_rand(0, 200);
$int2   = mt_rand(1, 9) * 100;
$color1 = mt_rand(0, 255);
$color2 = mt_rand(0, 255);
$color3 = mt_rand(0, 255);
$color4 = mt_rand(0, 255);
$color5 = mt_rand(0, 255);
$color6 = mt_rand(0, 255);
$color7 = mt_rand(0, 255);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta http-equiv="refresh" content="1">
	<style type="text/css">
	div{
		position: relative;
		font-size:<?php echo $int1; ?>px;
		font-weight: <?php echo $int2; ?>;
		top:<?php echo $int2; ?>px;
		left:<?php echo $int3; ?>px ;
	}
			.span1{
				color: rgb(<?php echo $color1; ?>,<?php echo $color2; ?>,<?php echo $color3; ?>) ;
			}
			.span2{
				color: rgb(<?php echo $color2; ?>,<?php echo $color3; ?>,<?php echo $color4; ?>) ;
			}
			.span3{
				color: rgb(<?php echo $color3; ?>,<?php echo $color4; ?>,<?php echo $color5; ?>) ;
			}
			.span4{
				color: rgb(<?php echo $color5; ?>,<?php echo $color6; ?>,<?php echo $color7; ?>) ;
			}
			.span5{
				color: rgb(<?php echo $color7; ?>,<?php echo $color6; ?>,<?php echo $color5; ?>) ;
			}
			.span6{
				color: rgb(<?php echo $color4; ?>,<?php echo $color3; ?>,<?php echo $color2; ?>) ;
			}
			.span7{m
				color: rgb(<?php echo $color1; ?>,<?php echo $color5; ?>,<?php echo $color2; ?>) ;
			}
	</style>
</head>
<body>
<div>
	<span class="span1">我</span>
	<span class="span2">想</span>
	<span class="span3">吃</span>
	<span class="span4">桥</span>
	<span class="span5">头</span>
	<span class="span6">排</span>
	<span class="span7">骨</span>
</div>
</body>
</html>
