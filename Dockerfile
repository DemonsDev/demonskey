FROM php:8.2-cli
WORKDIR /app
COPY verify.php .
CMD ["php", "-S", "0.0.0.0:8080"]
