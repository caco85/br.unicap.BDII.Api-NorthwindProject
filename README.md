<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


O Projeto  da e-commerce foi desenvolvido para conectar ao banco de dados Northwind do SqlServer 

Foi feito a parte backend com Laravel 9x https://laravel.com/docs/9.x
o Front foi feito com Tailwindcss https://tailwindui.com/
e a base de dados foi feito no Sql Server express

para rodar o backend 

Instale o Xammp(https://www.apachefriends.org/pt_br/download.html) ou Wampserver 

depois instale o Composer https://getcomposer.org/download/

apos isto faça o clone git clone https://github.com/caco85/br.unicap.BDII.Api-NorthwindProject.git

Run: cd br.unicap.BDII.Api-NorthwindProject.git

Run: composer install 

Run: composer global require laravel/installer

apos isto tem que fazer algumas configurações para configura a conexão com o SQL server dicas no link https://www.webdesignemfoco.com/cursos/crud/crud-com-laravel-12-laravel-com-sql-server

Run: copy .env.example .env

na configuração do seu .env add ao banco de dados estas linhas

DB_CONNECTION=sqlsrv
DB_HOST=DESKTOP-Q2FKI86\SQLEXPRESS    (caso seja o sqlexpress com a conexão do auth do windowns)
DB_PORT=
DB_DATABASE=Northwind
DB_USERNAME=
DB_PASSWORD=


add os drives no xammp nesta pasta (se tiver o php 8x tem os drives na pasta drives sqlserver do projeto)
C:\xampp\php\ext 


depois add as extensões no php.ini (tbm tem uma copia nos drives da pasta sqlserver do projeto)
C:\xampp\php

extension=php_pdo_sqlsrv_81_ts_x64.dll
extension=php_sqlsrv_81_ts_x64.dll

obs instale o sqlserver em seu pc 

https://www.microsoft.com/pt-br/sql-server/sql-server-downloads
https://learn.microsoft.com/pt-br/sql/ssms/download-sql-server-management-studio-ssms?view=sql-server-ver15

rode a query de para  criar o banco do nortwind(tbm esta na pasta dos drives do sqlserver)

depois disto rode o servidor backend

run : php artisan server 

caso der algum erro de servidor http 500

limpe o casher do sua aplicação 


Run: php artisan cache:clear

Run: php artisan config:clear

Run: php artisan key:generate


apos isto tem que rodar o front para os plungs do tailwindcss funcionar

Run: npm run dev


pronto sua aplicação esta rodando e entre no link do seulocal host em seu navegador

http://localhost:8000
