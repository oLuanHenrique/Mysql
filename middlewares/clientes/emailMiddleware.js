const validateEmail = (request, response, next) => {
    const { body } = request;
    if (body.email == undefined || body.email === '') {
        return response.status(400)
            .json({ message: 'O campo "email" é obrigatório!' });
    }
    next();
};

module.exports = { validateEmail };
