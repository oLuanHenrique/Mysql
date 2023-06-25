const express = require('express');
const router = express.Router();

const produtosController = require('../controllers/produtosController');
const nomeMiddleware = require('../middlewares/produtos/nomeMiddleware');
const descricaoMiddleware = 
require('../middlewares/produtos/descricaoMiddleware');
const precoMiddleware = require('../middlewares/produtos/precoMiddleware');
const dataAtualizadoMiddleware = 
require('../middlewares/produtos/data_atualizadoMiddleware');

// Consulta todos os produtos - GET
router.get('/', produtosController.findAll);

// Insere um novo produto - POST
router.post('/', nomeMiddleware.validateName,
    descricaoMiddleware.validateDescricao,
    precoMiddleware.validatePreco,
    dataAtualizadoMiddleware.validateData,
    produtosController.save
);

// Atualiza um produto - PUT
