<html>
<body>

도형계산식  ?><br>
triangle area = <?php echo $_POST["width"]* $_POST["height"]/2; ?>
rectangle area = <?php echo $_POST["width"]* $_POST["height"]; ?>
circle area = <?php echo $_POST["pi"]* $_POST["radious"]^2; ?>
rectangular-prism = <?php echo $_POST["width"]* $_POST["height"]* $_POST["width"]; ?>
cylinder = <?php echo $_POST["pi"]* $_POST["radious"]^2* $_POST["height"]; ?>
sphere = <?php echo 4/3*$_POST["pi"]*$_POST["radious"]^3; ?>


</body>
</html>