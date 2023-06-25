// Middleware para validar o campo nome
const validateName = (request, response, next) => {
    const { body } = request;

    // Verifica se o campo nome está undefined
    if (body.nome == undefined) {
        return response.status(400).json({
              message: 'O campo "nome" é obrigatório!'
        });
    }

    if (body.nome === '') {
        return response.status(400).json({
            message: 'O campo "nome" não pode ser vazio!'
        });
    }

    next();
};

module.exports = { validateName };
