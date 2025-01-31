<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/style/style.css">
    
    <title>email</title>
</head>

<body>
    <div>
        <h1>Contact</h1>
        <form action="" method="post">
                <label for="name">Votre nom:</label>
                <input type="text" name="name" id="name" required><br><br>

                <label for="email">Votre adresse mail:</label>
                <input type="email" name="email" id="email" placeholder="Ex: prénom.nom@gmail.com" required><br><br>
                
                <label for="ask">Objet:</label>
                <select name="ask" id="ask">
                    <option value="invite">Inscription</option>
                    <option value="quest">Question</option>
                    <option value="other">Autre</option>
                </select>
                <br><br>
                <label for="message">Votre message:</label>
                <textarea placeholder="Exprimez-vous" name="message"></textarea><br><br>
                <button type="submit">Envoyer</button> 
        </form>
        </div>
</body>

</html>