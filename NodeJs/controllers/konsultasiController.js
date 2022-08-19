const {client} = require('../wa');

const wa = client;

const konsultasiController = {
    accKonsultasi: 
        async (req, res) => {
            const {
                phone, 
                username, 
                waktu, 
                tanggal,
                link
            } = req.body;

            const message = `Hai ${username} konsultasi anda telah di setujui \n\nWaktu: ${waktu}\nTanggal: ${tanggal}\nLink: ${link}`;
        
            await wa.sendMessage(`${phone}@c.us`,message);
        
            return res.status(200).json({
                message: 'Success'
            });
    },

    tolakKonsultasi:
        async (req, res) => {
            const {phone, username} = req.body;
            const message = `Hai ${username} konsultasi anda telah ditolak silahkan hubungi admin`;
        
            await wa.sendMessage(`${phone}@c.us`,message);

            return res.status(200).json({
                message: 'Success'
            });
        }
}

module.exports = konsultasiController;