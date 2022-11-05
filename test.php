<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Page using php</title>
<link rel="stylesheet" type="text/css" href="test.css" media="all" />
</head>

<body>
<div id="apDiv1">
  <div class="first">
    <div class="right">
      </div>
  </div>
  <?php
		for ($count=0; $count <= 25; $count++) {
			echo ' <div class="second">
      <div class="right"></div>
     </div>' ;
		}
	?>
    
      <div class="right"></div>
     
     
</div>
</body>
</html>
