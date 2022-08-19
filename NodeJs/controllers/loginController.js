require('dotenv').config();
const { User } = require('../models');
const { Op } = require("sequelize");
const bcrypt = require('bcrypt');
const jsonwebtoken = require('jsonwebtoken');

exports.loginUser = async (req, res) => {
    const {email, password} = req.body;
    
    const user = await User.findOne({
        where: {
            [Op.or]: [{email}]
        }
    });

    const data = user.dataValues;
    const hash = data.password.replace(/^\$2y(.+)$/i, '$2a$1');
    
    if(user){
        if(bcrypt.compareSync(password, hash)){
            const token = jsonwebtoken.sign({
                id: user.id,
                username: data.name,
                email: user.email,
            },process.env.JWT_SECRET,{expiresIn: '1m'});
    
            return res.status(200).json({
                message : "user berhasil login",
                token,
            });
        }else{
            return res.status(400).json({
                status: false,
                message : "user atau password salah",
            });
        }
    }else{
        return res.status(400).json({
            status: false,
            message : "user atau password salah",
        });
    }
}