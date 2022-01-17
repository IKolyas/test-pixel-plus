# test-pixel-plus
test work pixel plus

настройки перенаправления запросов на главную страницу

RewriteEngine On

RewriteCond %{SCRIPT_FILENAME} !-d
RewriteCond %{SCRIPT_FILENAME} !-f

RewriteRule ^(.*)$ ./index.php?route=$1
