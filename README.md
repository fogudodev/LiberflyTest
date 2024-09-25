<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# APIRest Liberfly

Este é um projeto de API RESTful construído com Laravel. A API é responsável por fornecer serviços de backend e endpoints que podem ser consumidos por outras aplicações ou pelo frontend.

## Pré-requisitos

Certifique-se de ter os seguintes softwares instalados:

- PHP >= 8.0
- Composer
- MySQL ou outro banco de dados compatível
- Node.js & npm (se o frontend precisar de build)

## Passos para Configuração

### 1. Clonar o repositório

```bash
git clone https://github.com/fogudodev/LiberflyTest
cd APIRest_Liberfly
```

### 2. Instalar as dependências do PHP

Execute o seguinte comando para instalar todas as dependências listadas no `composer.json`:

```bash
composer install
```

### 3. Configurar o arquivo `.env`

Copie o arquivo de exemplo `.env.example` para `.env` e ajuste os valores conforme o ambiente local.

```bash
cp .env.example .env
```

Ajuste os detalhes da conexão com o banco de dados no arquivo `.env`:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha
```

### 4. Gerar a chave da aplicação

O Laravel requer uma chave única para ser gerada para a aplicação. Execute o comando abaixo para gerar essa chave:

```bash
php artisan key:generate
```

### 5. Executar as migrações

Após configurar o banco de dados, execute as migrações para criar as tabelas necessárias:

```bash
php artisan migrate
```

### 6. Executar o servidor de desenvolvimento

Você pode iniciar o servidor de desenvolvimento local executando:

```bash
php artisan serve
```

A aplicação estará disponível em `http://localhost:8000`.

## Testes

Para executar os testes da aplicação, utilize:

```bash
php artisan test
```

## Endpoints Disponíveis

Aqui estão alguns dos principais endpoints da API:

- `GET /api/users`: Retorna uma lista de usuários.
- `POST /api/users`: Cria um novo usuário.
- `GET /api/users/{id}`: Retorna os detalhes de um usuário específico.
- `PUT /api/users/{id}`: Atualiza os detalhes de um usuário.
- `MIDDLEWARE /protected-route` : Proteção de acesso 
- `SQL INJECTION /sql` : Protege de possiveis ameaças por SQL INJECTION

## Tecnologias Utilizadas

- **PHP** : Linguagem de programação Back-end
- **Laravel**: Framework PHP para construção de APIs e sistemas backend.
- **MySQL**: Banco de dados relacional.
- **Composer**: Gerenciador de dependências para PHP.

