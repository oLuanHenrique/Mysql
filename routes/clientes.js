const express = require('express');
const router = express.Router();

const clientesController = require('../controllers/clientesController');
const nomeMiddleware = require('../middlewares/clientes/nomeMiddleware');
const sobrenomeMiddleware = 
require('../middlewares/clientes/sobrenomeMiddleware');
const emailMiddleware = require('../middlewares/clientes/emailMiddleware');
const idadeMiddleware = require('../middlewares/clientes/idadeMiddleware');

// Consulta todos os clientes - GET
router.get('/', clientesController.findAll);

// Insere um novo cliente - POST
router.post('/', nomeMiddleware.validateName,
    sobrenomeMiddleware.validateFamillyName,
    emailMiddleware.validateEmail,
    idadeMiddleware.validateAge,
    clientesController.save
);

// Atualiza um cliente - PUT
router.put('/', clientesController.update);

// Deleta um cliente - DELETE
router.delete('/:id', clientesController.remove);

module.exports = router;