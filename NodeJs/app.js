const express = require('express');
const path = require('path');
const cookieParser = require('cookie-parser');
const logger = require('morgan');

const {main} = require('./wa');
main();

const indexRouter = require('./routes/index');
const usersRouter = require('./routes/users');
const loginRouter = require('./routes/login');
const welcomeRouter = require('./routes/welcome');
const transaksiRouter = require('./routes/transaksi');
const konsultasiRouter = require('./routes/konsultasi');

const app = express();

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', indexRouter);
app.use('/users', usersRouter);
app.use('/login',  loginRouter);
app.use('/welcome', welcomeRouter);
app.use('/transaksi', transaksiRouter);
app.use('/konsultasi', konsultasiRouter);

module.exports = app;
