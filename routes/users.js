const express = require('express');
const usersRouter = express.Router();

// Definir as rotas e os manipuladores de rota para usersRouter

// Rota GET /users
usersRouter.get('/', (req, res) => {
    // Manipulador da rota GET /users
    res.send('Lista de usuários');
});

// Exportar usersRouter
module.exports = usersRouter;
