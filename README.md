Executar o Projeto

1- Faça o download do projeto

2- Abra no editor de sua preferência

3- No terminal digite: composer update

4- Mude o nome do arquivo ".env.example" para ".env"

5- Configure com os dados do seu banco no arquivo ".env" e depois rode o comando: "php artisan key:generate"

6 - Crie um banco de dados com o nome que vc configurou no arquivo: ".env"

6- Com o banco de dados configurado e ativo rode o comando : "php artisan migrate --seed"

7- Com as migrations e as seeds inseridas no banco inicie o servidor da aplicação com o comando: "php artisan serve"

8- Na tela de login as credenciais são: Email: "admin@gmail.com" && Senha:"12345678" ou "thalita@gmail.com" && Senha:"12345678"
