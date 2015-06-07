<head>
<title>Enregistrement</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<!-- Mise en place du formulaire -->
<form name="form1" id="form1" method="post" action="enregistrerUtilisateur_action.php">

  <p> <b>Enregistrement d'un nouvel utilisateur  Partadoc</b> </p>
   
   <!--Nom de l'utilisateur(3 caract�res minimum,uniquement des caract�res alphab�tiques)-->
  <p>Nom : 
    <input type="text" name="nom" required="required" pattern="[a-zA-Z]{2,20}" />
  </p>
  <!--Prenom de l'utilisateur(3 caract�res minimum,uniquement des caract�res alphab�tiques)-->
  <p> Prenom : 
    <input type="text" name="prenom" required="required" pattern="[a-zA-Z]{2,20}" />
    </p>
	<!--Login de l'utilisateur(3 caract�res minimum,8 au maximum,uniquement des caract�res hexad�cimal,des points ou des tirets)-->
  <p>Login :
    <input type="text" name="login" required="required" maxlength="8" pattern="[a-zA-Z][a-zA-Z0-9._-]{2,20}" />
  </p>
  <!-- Mot de passe de l'utilisateur(1 caract�re mini,maximum 32 caract�res)-->
  <p> Mot de passe :
    <input type="password" name="mdp" required="required" maxlength="32" />
  </p>
  
  <!--Code d'inscription (Mon num�ro de carte �tudiant)-->
  <p> Code d'Inscription :
    <input type="password" name="code" />
  </p>
  <p>
    <input type="submit" name="submit" value="Inscription">
  </p>
</form>
<br>
<!--Lien vers la page d'identification-->
<a href="index.php">Revenir � la page d'identification de Partadoc</a>
</body>
</html>
