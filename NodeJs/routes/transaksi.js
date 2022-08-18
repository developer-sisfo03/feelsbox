var express = require('express');
var router = express.Router();
const {transaksiController} = require('../controllers/transaksiController');

router.post('/', transaksiController);

module.exports = router;
