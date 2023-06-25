const connection = require('../configs/dbConfiguration');

// findAll
const findAll = async () => {
    const produtos = await (await connection)
        .execute('SELECT * FROM produtos');
    return produtos[0];
};

const update = async (produtos) => {
    const query =
    'UPDATE produtos SET nome = ?,'
    'descricao = ?, preco = ?, data = ? WHERE id = ?';
    const isOk = await (await connection).execute(query, [
        produtos.nome,
        produtos.descricao,
        produtos.preco,
        produtos.data_atualizado,
        produtos.id
    ]);
    return isOk[0].affectedRows === 1;
};

const save = async (produtos) => {
    const query =
    'INSERT INTO produtos(nome, descricao, preco, data_atualizado)' 
    'VALUES (?, ?, ?, ?)';
    const isOk = await (await connection).execute(query, [
        produtos.nome,
        produtos.descricao,
        produtos.preco,
        produtos.data_atualizado
    ]);
    return isOk[0].affectedRows === 1;
};

const remove = async (id) => {
    const query = 'DELETE FROM produtos WHERE id = ?';
    const isOk = await (await connection).execute(query, [id]);
    return isOk[0].affectedRows === 1;
};

