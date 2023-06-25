const db = require('../configs/dbConfig');

const createTable = async () => {
  try {
    const connection = await db;
    await connection.query(`
      CREATE TABLE IF NOT EXISTS clientes (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(255) NOT NULL,
        sobrenome VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        idade INT NOT NULL
      )
    `);
  } catch (error) {
    throw new Error('Failed to create clientes table');
  }
};

const insertCliente = async (cliente) => {
  try {
    const connection = await db;
    await connection.query(`
      INSERT INTO clientes (nome, sobrenome, email, idade)
      VALUES (?, ?, ?, ?)
    `, [cliente.nome, cliente.sobrenome, cliente.email, cliente.idade]);
  } catch (error) {
    throw new Error('Failed to insert cliente');
  }
};

module.exports = {
  insertCliente,
};


INSERT INTO `clientes` ( `nome`, `sobrenome`, `email`, `idade`) VALUES ('Luan ', 'Henrique', 'luantavres23@gmail.com', '19');
INSERT INTO `clientes` ( `nome`, `sobrenome`, `email`, `idade`) VALUES ('Jorge ', 'Amado', 'jorgeamado@gmail.com', '91');
INSERT INTO `clientes` ( `nome`, `sobrenome`, `email`, `idade`) VALUES ('Marcos ', 'Alvarenga', 'marcosalvarenga@gmail.com', '32');
INSERT INTO `clientes` ( `nome`, `sobrenome`, `email`, `idade`) VALUES ('Ana ', 'Fernandes', 'anafernandes@gmail.com', '23');

module.exports = {
  createTable,
};
