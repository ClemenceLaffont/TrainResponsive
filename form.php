<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <title>Document</title>
</head>
<body>
    <?php 
    if($_POST['nom'] != "" && $_POST['prenom'] != "") { ?>
    <p>Alors, si je comprend bien, tu t'appelle <?php echo $_POST['prenom']." ".$_POST['nom']; ?>?</p>
    <?php } else { ?>
    <p>Tas oublier un truc !</p>
    <?php }
    if ($_POST['nom'] != "" && $_POST['prenom'] == "") {
        echo "<p>Ton nom de famille c'est ".$_POST['nom'].". Par contre t'as oublier de me donner ton prénom !</p>";
    } elseif ($_POST['nom'] == "" && $_POST['prenom'] != "") {
        echo "<p>Ton prénom c'est ".$_POST['prenom'].". Par contre, t'as oublier de me donner ton nom de famille !</p>";
    } elseif ($_POST['nom'] == "" && $_POST['prenom'] == "") {
        echo "<p>T'as oublier de me donner ton nom et ton prénom, banane !</p>";
    }
     ?>
</body>
</html>