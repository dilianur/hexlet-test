install:
# Это команда полезна при клонировании репозитории или после удалении
	composer install
brain-games:
	php bin/brain-games.php
lint:
# lint ломанда запускает phpcs
	composer exec --verbose phpcs -- --standard=PSR12 src bin