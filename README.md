# AppPastel

Aplicação com funcionamentos básicos para fazer pedido de um único tipo de produto "pastel".

## Instalação

Baixe o projeto clonando do repositório utilizando o seguinte comando:

```bash
git clone https://github.com/RRJussiani/app-pastel.git
```
Após clonar o projeto, é necessário executar o composer e o npm dentro da pasta do projeto.

```bash
composer install
npm install
```
## Configuração

Na pasta do projeto, antes de começar fazer as configurações execute o seguinte comando:

```bash
cp .env.example .env
```
Com isso será gerado o arquivo .env, onde você terá que configurar o banco de dados do projeto.
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=NOME DO BANCO
- DB_USERNAME=USUÁRIO DO BANCO
- DB_PASSWORD=SENHA DO BANCO

E além do banco de dados, é necessário configurar os emails de SMTP, para que o projeto faça o envio de email do pedido.
- MAIL_MAILER=smtp
- MAIL_HOST=HOST SMTP
- MAIL_PORT=587
- MAIL_USERNAME=USUÁRIO SMTP
- MAIL_PASSWORD=SENHA SMTP
- MAIL_ENCRYPTION=tls
- MAIL_FROM_ADDRESS=EMAIL QUE ENVIA

## Gerar dados

Nessa etapa é necessário que o banco já esteja criado em seu servidor e configurado conforme foi citado acima.
Se tudo estiver OK na pasta do projeto execute o seguinte comando para subir as tabelas do projeto.

```bash
php artisan migrate
```
Após subir as migrations, execute o seguinte comando das Seeders

```bash
php artisan db:seed
```

## Gerar css e js
Na pasta do projeto execute o seguinte comando para gerar o css e js.

```bash
npm rum watch
```

Após ter concluído todos os processos acima basta clicar no link abaixo.

**[AppPastel](http://app-pastel.test/)**