<?php
$donneesVue=$_SESSION['donneesVue'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
<title><?php echo $donneesVue['titre']?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="<?php echo $donneesVue['style']?>" />
</head>

<body>

<div id="zone_haute">
<?php include $donneesVue['zone_haute'];?>
</div>

<div id="zone_info">
<?php include $donneesVue['zone_info'];?>
</div>

<div id="zone_onglets">
<?php include $donneesVue['zone_onglets'];?>
</div>


<div id="zone_gauche">
<?php include $donneesVue['zone_gauche'];?>
</div>

<div id="zone_droite">
<?php include $donneesVue['zone_droite'];?>
</div>

<div id="zone_centrale">
<?php include $donneesVue['zone_centrale']; ?>
</div>

</body>
</html>
