# Utiliser l'image officielle PHP avec Apache
FROM php:8.0-apache

# Installe les certificats pour HTTPS
RUN apt-get update && apt-get install -y ca-certificates && update-ca-certificates
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Installer les extensions PHP nécessaires pour se connecter à MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Activer le mod_rewrite d'Apache
RUN a2enmod rewrite

# Copier les fichiers PHP dans le répertoire de l'image
COPY ./php /var/www/html

# Assurez-vous que le dossier est accessible
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80 pour le serveur PHP
EXPOSE 80