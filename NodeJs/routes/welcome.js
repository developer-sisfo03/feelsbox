var express = require('express');
var router = express.Router();

const middleware = require('../middleware/middleware');
const {welcome} = require('../controllers/welcomeController');

// router.get('/', middleware, welcome);
router.post('/', welcome)

module.exports = router;