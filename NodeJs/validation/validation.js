const {check, validationResult} = require('express-validator');

exports.validation = (req, res, next) => {
    console.log(next)
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
        return res.status(404).json({
            status: false,
            message: errors.array()[0].msg,
        });
    }
    next();
}

exports.validationLogin = [
    check('email', 'Username tidak boleh kosong').notEmpty(),
    check('password', 'Password tidak boleh kosong').notEmpty(),
];