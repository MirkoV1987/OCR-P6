# OCR-P6 - SnowTricks<br/>
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c245deefc6a345ab9b82fc806828f2dc)](https://www.codacy.com/manual/MirkoV1987/OCR-P6?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=MirkoV1987/OCR-P6&amp;utm_campaign=Badge_Grade)
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
<b>INSTALLATION</b>
</br>
<li>Clonez ou téléchargez le repository GitHub dans le dossier voulu :</li></br>
</br>

    git clone https://github.com/MirkoV1987/OCR-P6.git
</br>
<li>Ouvrez le fichier webpack.config.js à la racine du projet et configurez l'URL de votre projet dans la fonction .setPublicPath() </li>
</br>

    .setPublicPath('http://votredomaine/OCR-P6/public/build')
</br>
<li>Positionnez-vous dans la directory de votre projet et installez yarn pour télécharger le dossier node_modules. Utilisez la commande :</li>
</br>

    yarn install
</br>
<li>Créez les assets et le dossier build du projet en lançant la commande :</li>
</br>

    yarn encore dev
</br>
<li>Chargez toutes les dépendances du projet avec Composer, en lançant la commande :</li>
</br>

    composer update
</br>
<b>INSTALLATION DE LA BASE DE DONNÉES</b>
<li>Configurez vos variables d'environnement tel que la connexion à la base de données ou votre serveur SMTP ou adresse mail dans le fichier .env.</li>
</br>

    DATABASE_URL=mysql://DB_USER:DB_PASSWORD@127.0.0.1:3306/DB_NAME?serverVersion=SERVER_VERSION
</br>
<li>Créez la base de données avec la commande Doctrine :</li>
</br>

    bin/console doctrine:database:create
</br>
<li>La base de données a été créée. Générez les tables du database en lançant la commande :</li>
</br>

    bin/console doctrine:schema:update --force
</br>
<li>(Optionnel) Installer les fixtures pour avoir une démo de données fictives :</li></br>
</br>

    bin/console doctrine:fixtures:load
</br>
Félicitations ! Le projet est installé correctement !
