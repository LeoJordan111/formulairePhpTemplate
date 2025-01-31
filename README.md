# formulairePhpTemplate
Formulaire gérant l'envoie de mail

Dans le fichier composer.json :
    Vous devez avoir 1 require
        "phpmailer/phpmailer": "^6.9"
    Pour les installer, dans l'invite commande --> composer require phpmailer/phpmailer

La page de traitement comprend 4 variables d'environnements :
MAIL_HOST --> Défini le serveur SMTP qui permettra d'envoyer.
MAIL_USERNAME --> l'identifiant du SMTP
MAIL_PASSWORD --> le mot de passe du SMTP
MAIL_PORT --> Port TCP auquel se connecter
MAIL_USED --> l'adresse mail que vous voulez utiliser
MAIL_NAME --> le nom associer à l'adresse mail utilisée

Le formulaire comprend 4 variables avec la méthode POST :
$_POST['email'] --> l'adresse mail rentré dans le formulaire
$_POST['name'] --> l'utilisateur du mail
$_POST['ask'] --> l'objet du message
$_POST['message'] --> le contenu du message

