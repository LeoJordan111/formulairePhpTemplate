# formulairePhpTemplate
Formulaire gérant l'envoie de mail

Pour que le formulaire fonctionne, composer (gestionnaire de dépendances) et PHP mailer (extension de messagerie ) doit être installer.
Ci-dessous les liens afin d'installer :
Composer --> https://www.devenir-webmaster.com/tuto/outils/composer/
PHP Mailer --> https://www.ionos.fr/digitalguide/email/aspects-techniques/phpmailer/

Une fois l'installation terminée, vous pouvez vérifier l'installation, dans le fichier composer.json :
    Vous devez avoir 2 require :
        _ composer "vlucas/phpdotenv": "^5.6"
        _ PHP mailer "phpmailer/phpmailer": "^6.9".

Pour générer l'envoie du mail vous pouvez copier/coller le code fourni par le lien PHP Mailer.
Ensuite modifié ligne (de la page traitement qui fait office d'expemple) ci-dessous : 
Ligne 22: Mettre en comentaire (permettra de renvoyer un message --> (le msg a été bien envoyé)
Ligne 24: Remplacer la variable mail->host, elle défini le serveur SMTP qui permettra d'envoyer.
Ligne 26: Remplacer la variable mail->username, c'est l'identifiant du SMTP.
Ligne 27: Remplacer la variable mail->password, c'est le mot de passe du SMTP
Ligne 28: Mettre en comentaire
Ligne 29: Remplacer la variable mail->port, c'est le Port TCP auquel se connecter
Ligne 32: Remplacer la variable mail->used, c'est l'adresse mail que vous voulez utiliser
Ligne 33: Remplacer la variable mail->name, c'est le nom associer à l'adresse mail utilisée
Ligne 45: Remplacer la variable mail->subject, c'est l'objet contenu du msg.
Ligne 45: Remplacer la variable mail->body, c'est le contenu du msg.

Ligne 34 à 37 / 40 / 41 / 47 : Mettre en commentaire
