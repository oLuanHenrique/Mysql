const express = require('express');
const mysql = require('mysql2');

// Configuração do banco de dados
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'sua_senha',
  database: 'sua_database',
});

// Criação da aplicação Express
const app = express();
app.use(express.json());

// Endpoint no caminho padrão "/"
app.get('/', (req, res) => {
  res.send('Bem-vindo à minha aplicação Node.js!');
});

// Endpoints "/clientes" e "/produtos"
app.route('/clientes')
  .get((req, res) => {
    // Consulta os clientes no banco de dados
    connection.query('SELECT * FROM clientes', (err, results) => {
      if (err) {
        console.error(err);
        res.status(500).json({ error: 'Erro ao buscar clientes no banco de dados' });
      } else {
        res.json(results);
      }
    });
  })
  .post((req, res) => {
    // Insere um novo cliente no banco de dados
    const { nome, email } = req.body;
    connection.query('INSERT INTO clientes (nome, email) VALUES (?, ?)', [nome, email], (err) => {
      if (err) {
        console.error(err);
        res.status(500).json({ error: 'Erro ao inserir cliente no banco de dados' });
      } else {
        res.sendStatus(201);
      }
    });
  })
  .put((req, res) => {
    // Atualiza um cliente no banco de dados
    const { id, nome, email } = req.body;
    connection.query('UPDATE clientes SET nome = ?, email = ? WHERE id = ?', [nome, email, id], (err) => {
      if (err) {
        console.error(err);
        res.status(500).json({ error: 'Erro ao atualizar cliente no banco de dados' });
      } else {
        res.sendStatus(200);
      }
    });
  })
  .delete((req, res) => {
    // Deleta um cliente do banco de dados
    const { id } = req.body;
    connection.query('DELETE FROM clientes WHERE id = ?', [id], (err) => {
      if (err) {
        console.error(err);
        res.status(500).json({ error: 'Erro ao deletar cliente no banco de dados' });
      } else {
        res.sendStatus(200);
      }
    });
  });

app.route('/produtos')
  // Implemente de forma semelhante aos endpoints "/clientes"

// Inicialização do servidor
const PORT = 3000;
app.listen(PORT, () => {
  console.log(`Servidor rodando na porta ${PORT}`);
});
