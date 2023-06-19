# Mysql
Integração do express com o Mysql 

# Aplicação Node.js CRUD

Esta é uma aplicação Node.js CRUD que demonstra endpoints básicos de API para gerenciar clientes e produtos em um banco de dados MySQL.

## Dependências

Certifique-se de ter as seguintes dependências instaladas:

- [cookie-parser](https://www.npmjs.com/package/cookie-parser)
- [debug](https://www.npmjs.com/package/debug)
- [dotenv](https://www.npmjs.com/package/dotenv)
- [express](https://www.npmjs.com/package/express)
- [http-errors](https://www.npmjs.com/package/http-errors)
- [jade](https://www.npmjs.com/package/jade)
- [morgan](https://www.npmjs.com/package/morgan)
- [mysql2](https://www.npmjs.com/package/mysql2)

## Dependências de Desenvolvimento

As seguintes dependências de desenvolvimento são necessárias:

- [eslint](https://www.npmjs.com/package/eslint)
- [eslint-config-google](https://www.npmjs.com/package/eslint-config-google)
- [nodemon](https://www.npmjs.com/package/nodemon)

## Como Começar

Instale as dependências:
    - cd node-crud-app
    - npm install

No arquivo .env na raiz do projeto tem as configurações das variáveis de ambiente:
    - DB_HOST=localhost
    - DB_USER=root
    - DB_PASSWORD=sua-senha
    - DB_DATABASE=crud_app

Execute a aplicação:
    npm start

Abra seu navegador e acesse http://localhost:3000 para ver a aplicação.

Endpoints da API utilizados: 

    GET /: Endpoint padrão que responde com uma mensagem de boas-vindas.
    GET /clientes: Obter todos os clientes.
    POST /clientes: Criar um novo cliente.
    PUT /clientes/:id: Atualizar um cliente por ID.
    DELETE /clientes/:id: Excluir um cliente por ID.
    GET /produtos: Obter todos os produtos.
    POST /produtos: Criar um novo produto.
    PUT /produtos/:id: Atualizar um produto por ID.
    DELETE /produtos/:id: Excluir um produto por ID.

Estrutura do Projeto:

    O projeto é estruturado da seguinte forma:

    configs/: Arquivos de configuração.
    controllers/: Arquivos que lidam com a lógica de negócios de cada endpoint.
    middlewares/: Middlewares de validação de requisição.
    models/: Arquivos SQL para criação do banco de dados, tabelas e inserção de dados.
    routes/: APIs e endpoints.
    services/: Acesso e manipulação do banco de dados.
    views/: Camada de apresentação.

Arquivos Incluídos:
    Os seguintes arquivos obrigatórios devem estar presentes na raiz do projeto:
    .env: Arquivo de configuração das variáveis de ambiente.
    .eslintrc.json: Arquivo de configura
