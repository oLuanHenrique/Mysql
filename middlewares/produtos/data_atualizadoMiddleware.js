const validateData = (request, response, next) => {
    const { body } = request;

    if (body.data_atualizado == undefined || body.data_atualizado === '') {
        return response.status(400).json({
            message: 'O campo "Data" é obrigatório' });
    }

    if (isNaN(parseInt(body.data_atualizado)) ||
    parseInt(body.data_atualizado) < 0 ||
    parseInt(body.data_atualizado) > 130) {
        return response.status(400).json({
            message: 'O campo "Data" deve ser um número inteiro positivo entre 0 e 130' });
    }

    next();
};

module.exports = { validateData };
