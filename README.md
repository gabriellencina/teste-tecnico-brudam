# Projeto Brudam 🥇
![imagembrudam](https://user-images.githubusercontent.com/54336473/178027541-0cf0468b-0987-4b0d-a6f6-c9d04fcbc5bd.png)


## Objetivos 🚀

O objetivo dessa sprint é fazer pedidos de entregas via endpoint e mostrar esses dados em um
relatório para os clientes.


* 1 - armazenar os pedidos de entregas
* 2 - Criar pedidos de entregas via API
* 3 - Mostrar em tela os pedidos feitos via API





### 📋 Pré-requisitos

* PHP 8.1.2 (no minimo 8.0.2)
* Composer 2.2.6
* Laravel 9.19.0
* Docker 20.10.17




### 🔧 Instalação e execução da aplicação

 Primeiro instale o php com os seguintes comandos usando o terminal:

```
sudo apt install software-properties-common ca-certificates lsb-release apt-transport-https
```
```
sudo apt update
```
```
sudo add-apt-repository ppa:ondrej/php
```
```
sudo apt update
```
```
sudo apt install php8.1
```

 Segundo, vamos instalar o composer:
 
 ```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
 ```
 
 Change chmod composer
 ```
 sudo chmod -R 777
 ```
 
 ```
 composer install
 ```
 
 ```
 composer update
 ```
 
 ```
composer dump-autoload
 ```
Logo em seguida rode no terminal o comando cp .env.example .env para gerar este arquivo no nosso projeto e configurarmos nele o banco de dados (postgreSQL):
 ```
cp .env.example .env
 ```
 Entre no arquivo .env e altera os seguintes campos como no exemplo a seguir:
* DB_CONNECTION=pgsql
* DB_HOST=127.0.0.1
* DB_PORT=5432
* DB_DATABASE=postgres
* DB_USERNAME=myusername
* DB_PASSWORD=mypassword

Agora vamos gerar nossa key
```
php artisan key:generate
```
 
 Feito as aleterações vamos subir o nosso banco de dados com o docker, executando o seguinte comando:
 ```
 docker run --name postgresql -e POSTGRES_USER=myusername -e POSTGRES_PASSWORD=mypassword -p 5432:5432 -d postgres
 ```
 Após isso rode o seguinte comando para fazer as migrations para o nosso banco de dados
```
php artisan migrate
```
Agora vamos rodar o comando npm install e depois o comando npm run dev
```
npm install
```
```
npm run dev
```
Vamos rodar o nosso servidor com o comando php artisan serve
```
php artisan serve
```
Certifique-se que o **php artisan serve** esteja rodando junto com o **comando npm run dev**

(Você pode usar o terminal do vscode e da sua máquina para rodar os dois)

Após os testes matar o banco com o comando
```
docker rm -f postgres
```
 
 
