const {client} = require('../wa');

const wa = client;

exports.transaksiController = async (req, res) => {
    const {phone, username} = req.body;

    await wa.sendMessage(`${phone}@c.us`,`Hai ${username} terimakasih telah memesan layanan kami segera lakukan pembayaran`);

    return res.status(200).json({
        message: 'Success'
    });
}