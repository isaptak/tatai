<!doctype html>
<html>
<head>
<title>Our Funky HTML Page</title>
<meta name="description" content="Our first page">
<meta name="keywords" content="html tutorial template">
</head>
<body>

	<p> You Searched For 
<?php echo $_POST["query"]; ?>

During
<?php echo $_POST["time"]; ?>

Sorted by
<?php echo $_POST["sortingoption"]; ?>
</p>
</body>
</html>