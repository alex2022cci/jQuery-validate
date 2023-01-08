<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./jquery.js"></script>
    <link rel="stylesheet" href="style.css">
    <script>
        $(function(){
            $("#nom").keyup(function(){
                if(!$("#nom").val().match(/^[a-z]+$/i)){
                    $("#nom").next(".error-message").show().text("Enter votre nom valide (unquement des lettres)");
                } else {
                    $("#nom").next(".error-message").hide().text("");
                }
            });
            
            $("#mdp").keyup(function(){
                if(!$("#mdp").val().match(/^[a-z0-9]{8,}$/i)){
                    $("#mdp").next(".error-message").show().text("Enter un mot de passe valide (lettres + chiffres & 8 caractères minimum)");
                } else {
                    $("#mdp").next(".error-message").hide().text("");
                }
            });

            $("#envoyer").click(function(){
                valid = true ;
                  
                    if($("#adresse").val() == ""){
                        $("#adresse").next(".error-message").fadeIn().text("Enter votre adresse");
                            valid = false;
                    } else {
                        $("#adresse").next(".error-message").fadeOut();
                    }
                    return false ;
            });
        });
    </script>
</head>
<body>
    
<div id="page">
    <div id="conteneur">
        <a href="" id="logo"></a>
        <div id="menu">
            <ul>
                <li><a href="">Items</a></li>
                <li><a href="">Items</a></li>
                <li><a href="">Items</a></li>
                <li><a href="">Items</a></li>
            </ul>
        </div>
        <div id="contenu">
            <h1>contacter nous</h1>
            <h2>n'hésiter pas</h2>
            <hr/>
            <div id="formcom">
                <form action="index.php" method="post">
                    <p>Nom :</p>
                    <input type="text" name="nom" id="nom">
                    <span class="error-message"></span>

                    
                    <p>adresse :</p>
                    <input type="text" name="adresse" id="adresse">
                    <span class="error-message"></span>
                   

                    <p>Mot de passe</p>
                    <input type="password" name="mdp" id="mdp">
                    <span class="error-message"></span>

                    <p><input type="submit" value="Envoyer" id="envoyer"></p>
                </form>

            </div>
        </div>

    </div>
</div>

</body>
</html>