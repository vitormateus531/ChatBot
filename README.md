<h1 align="center">Chatbot que informa quantitativo de cidades e bairros conforme os estados do Brasil</h1>
<p align="center"><img height="188" width="198" src="https://botman.io/img/botman.png"></p>

### Pré-requisitos

- Php 7.2 ou superior
- mysql instalado
- composer

### Sobre a aplicação

Esta aplicação foi desenvolvida com o framework Botman e conjunto com o framework php laravel.

### Como utilizar
 - Baixe o conteúdo deste repositório com o comando:
```sh
    git clone <repositorio remoto>
```
- Supondo que voce já tenha o `composer` devidamente instalado,dentro do projeto, execute o seguinte comando no terminal
```sh
    composer install
```
e para que o laravel possa gerar sua chave única do projeto execute o comando
```sh
    php artisan generate:key
```
 
- Crie um banco de dados mysql e importe o arquivo `chatbot_setran.sql` localizado na raiz do repositório para banco criado.

 - Após a etapa anterior ser efetuada localize o arquivo `.env.example` e renomeie para `.env` abra o arquivo e encontre o bloco:
   
  aqui voce colocará as credenciais do seu banco de dados
 ```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret
```
- Execute utilizando o comando:
```sh
   php artisan serve
```

## Demo

<a href="https://www.tagsolution.com.br/chatbot/public/" target="__blank">Veja aqui</a>

