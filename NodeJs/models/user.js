'use strict';
const {
  Model
} = require('sequelize');
module.exports = (sequelize, DataTypes) => {
  class User extends Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    static associate(models) {
      // define association here
    }
  }
  User.init({
    name: DataTypes.STRING,
    email: DataTypes.STRING,
    password: DataTypes.STRING,
    role: DataTypes.STRING,
    jenis_kelamin: DataTypes.STRING,
    tanggal_lahir: DataTypes.STRING,
    domisili: DataTypes.STRING,
    image: DataTypes.STRING,
    updatedAt: {
      field: 'updated_at',
      type: DataTypes.DATE,
    },
    createdAt: {
      field: 'created_at',
      type: DataTypes.DATE,
    },
  }, {
    sequelize,
    modelName: 'user',
  });
  return User;
};