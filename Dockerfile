# Étape 1 : Image de base avec PHP 8.2
FROM php:8.2-fpm-alpine

# Étape 2 : Installer les dépendances système
RUN apk add --no-cache \
    bash \
    curl \
    zip \
    unzip \
    libzip-dev \
    libpng-dev \
    oniguruma-dev \
    nodejs \
    npm \
    git \
    openssl \
    icu-dev \
    zlib-dev \
    libxml2-dev \
    g++ \
    make \
    autoconf \
    linux-headers \
    libjpeg-turbo-dev

# Étape 3 : Installer les extensions PHP
RUN docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath

# Étape 4 : Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Étape 5 : Dossier de travail
WORKDIR /var/www

# Étape 6 : Copier tous les fichiers du projet
COPY . .

# Étape 7 : Installer les dépendances Laravel & Node
RUN composer install --optimize-autoloader --no-dev
RUN npm install && npm run build

# Étape 8 : Générer la clé d'application (facultatif si déjà dans .env)
# Copier un exemple .env si le vrai n'existe pas
RUN cp .env.example .env

# Donner les bonnes permissions
RUN chmod -R 775 storage bootstrap/cache

# Générer la clé Laravel
RUN php artisan key:generate


# Étape 9 : Exposer le port utilisé par Laravel
EXPOSE 8080

# Étape 10 : Démarrer Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
