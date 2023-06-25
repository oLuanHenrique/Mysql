const usersRouter = require('./users');
const clientesRouter = require('./clientes');
const express = require('express');
const index = express();


index.use('/users', usersRouter);
index.use('/clientes', clientesRouter);

