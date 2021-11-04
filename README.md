
Pré-requisitos
	Install php
	Install Composer
	Install Laravel
		composer global require laravel/installer

	na raíz do projeto:
		composer require laravel/passport
		
		Copiar o arquivo .env.example e nomear como .env
		
		composer update --ignore-platform-reqs
		composer install --ignore-platform-reqs
		composer dump-autoload

		php artisan migrate
		
		php artisan passport:install
			Copiar os dados abaixo de "Password grant client created successfully." e colar no .env.
				PASSWORD_CLIENT_ID= Client id
				PASSWORD_CLIENT_SECRET= Client secret