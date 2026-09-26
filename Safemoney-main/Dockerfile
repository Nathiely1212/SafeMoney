FROM php:8.4-apache

# Instala certificados CA para conexões HTTPS
RUN apt-get update \
    && apt-get install -y --no-install-recommends ca-certificates \
    && rm -rf /var/lib/apt/lists/*

# Copia o projeto para o diretório público do Apache
COPY . /var/www/html/

# Porta HTTP do Apache
EXPOSE 80

# Inicia o Apache em primeiro plano
CMD ["apache2-foreground"]
