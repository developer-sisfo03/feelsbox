const {Konsultasi} = require('../models');
const { Op } = require("sequelize");

exports.selesaiKonsultasi = async () => {
    const konsultasi = await Konsultasi.findAll()

    console.log(konsultasi);
}