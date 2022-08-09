const {client} = require('../wa');

const wa = client;

exports.welcome = async (req, res) => {
    const {phone, username} = req.body;
    console.log(phone, username);
    const message = `Halo ${username}, Selamat datang di Aplikasi Chatbot.`;
    console.log(message);
    const result = await wa.sendMessage(`${phone}@c.us`, message);

    return res.status(200).json({
        message: 'Success'
    });
}