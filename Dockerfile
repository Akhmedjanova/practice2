FROM php:latest
# Копируем файлы в контейнер
COPY . /var/www/html
# Рабочая директория
WORKDIR /var/www/html
# Экспонируем порт 80
EXPOSE 80

# Команда для запуска веб-сервера PHP
CMD ["php", "-S", "0.0.0.0:80"]