const validatePreco = (request, response, next) => {
    const { body } = request;
  
    if (body.Preco == undefined || body.Preco === '') {
        return response.status(400).json({ 
        message: 'O campo "Preço" é obrigatório' });
    }
  
    if (isNaN(parseInt(body.Preco)) ||
    parseInt(body.Preco) < 0 || 
    parseInt(body.Preco) > 130) {
        return response.status(400).json({ 
            message:'O campo "Preço" deve ser inteiro positivo e possível'});
    }
    next();
}; 
module.exports = { validatePreco };  