<html>
<head><title>Fibonacci</title></head>
<body>

<h1>Fibonacci</h1>
<?
	//your answer goes here
	$month=$_POST["month"];
?>
<form method="post" action="input.php">
Months: <input type="text" name="month" value="<?=$month?>" />
<input type="submit" name="btnsubmit" value="Calculate!" />
</form>

</body>
</html>