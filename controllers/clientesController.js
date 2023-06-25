const { response } = require('express');
const clientesService = require('../services/clientesServices');

const findAll = async (request, response) => {
    const clientes = await clientesService.findAll();
    return response.status(200).json(clientes);
};

const save = async (request, response) => {
    const result = await clientesService.save(request.body);
    return result ?
        response.status(200).json() :
        response.status(400).json({ 
            '[ERROR/SERVER]': 'Falha ao salvar o cliente'
        });
};

const update = async (request, response) => {
    const result = await clientesService.update(request.body);
    return result ?
        response.status(200).json() :
        response.status(400).json({'[ERROR/SERVER]':'Falha ao atualizar'});
};

const remove = async (request, response) => {
    const { id } = request.params;
    const result = await clientesService.remove(id);
    return result ?
        response.status(200).json() :
        response.status(400).json({'[ERROR/SERVER]':'Falha ao remover'});
};

module.exports = {
    findAll,
    save,
    remove,
    update,
};
