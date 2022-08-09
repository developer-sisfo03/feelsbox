const fs = require('fs');

exports.transaksi = async (msg) => {
    if(msg.hasMedia) {
        const media = await msg.downloadMedia();
        const base64 = media.data;
        const buffer = Buffer.from(base64, 'base64');
        fs.writeFileSync(`storage/app/transaksi/${msg.from}-${msg.id}.jpg`, buffer);
        console.log(`File ${file} saved!`);
    }
}