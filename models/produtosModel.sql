const db = require('../configs/dbConfig');

const createTable = async () => {
  try {
    const connection = await db;
    await connection.query(`
      CREATE TABLE IF NOT EXISTS produtos (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(255) NOT NULL,
        descricao VARCHAR(255) NOT NULL,
        preco DECIMAL(10, 2) NOT NULL,
        data_atualizado DATETIME NOT NULL
      )
    `);
  } catch (error) {
    throw new Error('Failed to create produtos table');
  }
};

const insertProduto = async (produto) => {
  try {
    const connection = await db;
    await connection.query(`
      INSERT INTO produtos (nome, descricao, preco, data_atualizado)
      VALUES (?, ?, ?, ?)
    `, [produto.nome, produto.descricao, produto.preco, produto.data_atualizado]);
  } catch (error) {
    throw new Error('Failed to insert produto');
  }
};

INSERT INTO `produtos`( `nome`, `descricao`, `preco`, `data_atualizado`) VALUES ('Oculos','Oculos para descanso','120','2023-05-16 06:37:49.060532');
INSERT INTO `produtos`( `nome`, `descricao`, `preco`, `data_atualizado`) VALUES ('Carregador','USB','50','2023-06-09 10:37:19.062130');
INSERT INTO `produtos`( `nome`, `descricao`, `preco`, `data_atualizado`) VALUES ('Mesa','Mesa gamer','1000','2023-05-03 30:31:39.323634');
INSERT INTO `produtos`( `nome`, `descricao`, `preco`, `data_atualizado`) VALUES ('Teclado','Com Led e sem fio','250','2023-02-20 25:26:21.272829');

module.exports = {
  createTable,
  insertProduto,
};
