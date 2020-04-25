# OCR-P6 - SnowTricks

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/6e7b60f20df54dc58410ac2439b24802)](https://app.codacy.com/manual/MirkoV1987/OCR-P6?utm_source=github.com&utm_medium=referral&utm_content=MirkoV1987/OCR-P6&utm_campaign=Badge_Grade_Settings)

Projet 6 de mon parcours de Développeur d'applications - PHP/SYMFONY chez OpenClassrooms. Création d'un site communautaire de partage de figures de snowboard. Utilisation du framework Symfony et développement des views à partir des wireframes fournis.

<b>Environnement utilisé durant le développement</b>
<li>Symfony 5.0.7</li>
<li>Composer 1.8.0</li>
<li>Bootstrap 4.2.1</li>
<li>jQuery 3.4.1</li>
<li>WampServer 3.1.9</li>
<li>Apache 2.4.37</li>
<li>PHP 7.2.18</li>
<li>PhpMyAdmin 4.8.5</li> 
<li>MySQL 5.7.26</li>
<br/>
<b>Installation</b>
</br>
<li>Clonez ou téléchargez le repository GitHub dans le dossier voulu :</li></br>
    <li>git clone https://github.com/MirkoV1987/OCR-P6.git</li></br>
<li>Configurez vos variables d'environnement tel que la connexion à la base de données ou votre serveur SMTP ou adresse mail dans le fichier .env.local qui devra être crée à la racine du projet en réalisant une copie du fichier .env.</li>
</br>
<li>Téléchargez et installez les dépendances back-end du projet avec Composer :</li>
</br>

    composer install
<li>Téléchargez et installez les dépendances front-end du projet avec Npm :</li>
</br>
    <em>npm install</em>
</br>
<li>Créer un build d'assets (grâce à Webpack Encore) avec Npm :</li>
</br>
    <em>npm run build</em>
</br>
<li>Créez la base de données et lancez la commande ci-dessous en vous plaçant dans le répertoire du projet :</li>
</br>
    <em>php bin/console doctrine:database:create</em>
</br>
<li>Créez les différentes tables de la base de données en appliquant les migrations :</li>
    <li>php bin/console doctrine:migrations:migrate</li></br>
<li>(Optionnel) Installer les fixtures pour avoir une démo de données fictives :</li></br>
    <li>php bin/console doctrine:fixtures:load</li>
    </br>
Félicitations ! Le projet est installé correctement !
