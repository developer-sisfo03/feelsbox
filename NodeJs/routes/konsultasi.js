const express = require('express');
const router = express.Router();

const konsultasiController = require('../controllers/konsultasiController');

router.post('/acc', konsultasiController.accKonsultasi);

router.post('/tolak', konsultasiController.tolakKonsultasi);

module.exports = router;