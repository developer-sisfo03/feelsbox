'use strict';
const {
  Model
} = require('sequelize');
module.exports = (sequelize, DataTypes) => {
  class Konsultasi extends Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    static associate(models) {
      // define association here
    }
  }
  Konsultasi.init({
    id_pemesanan: DataTypes.STRING,
    client_id: DataTypes.INTEGER,
    psikolog_id: DataTypes.INTEGER,
    waktu: DataTypes.TIME,
    tanggal: DataTypes.DATE,
    calendar_id: DataTypes.STRING,
    link: DataTypes.STRING,
    status: DataTypes.STRING,
    bukti_pembayaran: DataTypes.STRING,
    createdAt: {
      type: DataTypes.DATE,
      field: 'created_at',
    },
    updatedAt: {
      type: DataTypes.DATE,
      field: 'updated_at',
    },
  }, {
    sequelize,
    modelName: 'Konsultasi',
  });
  return Konsultasi;
};