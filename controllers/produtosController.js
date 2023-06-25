const { response } = require('express');
const produtosService = require('../services/produtosService');

const findAll = async (request, response) => {
    const produtos = await produtosService.findAll();
    return response.status(200).json(produtos);
};

const save = async (request, response) => {
    const result = await produtosService.save(request.body);
    return result ?
        response.status(200).json():
          response.status(400).json({ '[ERROR/SERVER]': 
    'Falha ao salvar o produto'});
};

const update = async (request, response) => {
    const result = await produtosService.update(request.body);
    return result ?
        response.status(200).json():
          response.status(400).json({ '[ERROR/SERVER]':
    'Falha ao atualizar produto' });
};

const remove = async (request, response) => {
    const { id } = request.params;
    const result = await produtosService.remove(id);
    return result ?
        response.status(200).json():
          response.status(400).json({'[ERROR/SERVER]': 'Falha ao remover produto'});
};

module.exports = {
    findAll,
    save,
    remove,
    update,
};
