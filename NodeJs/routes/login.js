var express = require('express');
var router = express.Router();

const {validationLogin, validation} = require('../validation/validation');
const {loginUser} = require('../controllers/loginController');

router.post('/', validationLogin, validation, loginUser)

module.exports = router;