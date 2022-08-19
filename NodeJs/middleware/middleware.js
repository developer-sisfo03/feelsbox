require('dotenv').config();
const jsonwebtoken = require('jsonwebtoken');

module.exports = async (req, res, next) => {
    const token = req.headers.authorization;

    if (!token) {
        return res.status(401).json({
            status: false,
            message: 'Token tidak ditemukan',
        });
    }

    try {
        const decoded = jsonwebtoken.verify(token, process.env.JWT_SECRET);
        req.user = decoded;
        next();
    }
    catch (err) {
        return res.status(401).json({
            status: false,
            message: 'Token tidak valid',
        });
    }

}