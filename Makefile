#=================
#Makefile para realização automática de configuração do git
#Criated by : Jhonatas Rodrigues de Barros
#Date : 12/03/2019
#=================
git-jhonatas:
	@git config --global user.name "Murielson"
	@git config --global user.email "jhonsnoow32@gmail.com"
	@echo "\033[01;40mGIT CONFIGURADO COM SUCESSO!\033[00;37m"
	@git config --global user.name
	@git config --global user.email
git-fernanda:
	@git config --global user.name "FernandaBatistaVS"
	@git config --global user.email "pontocidadaofernanda@gmail.com"
	@echo "\033[01;40mGIT CONFIGURADO COM SUCESSO!\033[00;37m"
	@git config --global user.name
	@git config --global user.email
git-carlos:	
	@git config --global user.name "josecarlosmonteiro"
	@git config --global user.email "1monteirocarlos@gmail.com"
	@echo "\033[01;40mGIT CONFIGURADO COM SUCESSO!\033[00;37m"
	@git config --global user.name
	@git config --global user.email

git-silvio:
	@git config --global user.name "Silvio"
	@git config --global user.email "silvioej@gmail.com"
	@echo "\033[01;40mGIT CONFIGURADO COM SUCESSO!\033[00;37m"
	@git config --global user.name
	@git config --global user.email

git-eduardo:
	@git config user.name "eduardobispof"
	@git config user.email "eduardobispof@gmail.com"
	@echo "\033[01;40mGIT CONFIGURADO COM SUCESSO!\033[00;37m"
	@git config --global user.name
	@git config --global user.email
git-naadabe:
	@git config --global user.name "naadabefarias"
	@git config --global user.email "naadabefarias@gmail.com"
	@echo "\033[01;40mGIT CONFIGURADO COM SUCESSO!\033[00;37m"
	@git config --global user.name
	@git config --global user.email

conf:
	composer install --no-scripts
	cp .env.example	.env
	php artisan key:generate
	php artisan storage:link
	$(MAKE) db

# Configuração do DB	
db:
	@mysql -u root -p --execute="drop database if exists SGM; create database SGM; drop user if exists master; CREATE USER 'master' IDENTIFIED BY 'origin'; GRANT ALL PRIVILEGES ON SGM . * TO master;"
	@sed -i 's/DB_DATABASE=homestead/DB_DATABASE=SGM/' .env
	@sed -i 's/DB_USERNAME=homestead/DB_USERNAME=master/' .env
	@sed -i 's/DB_PASSWORD=secret/DB_PASSWORD=origin/' .env
	php artisan migrate:refresh --seed
