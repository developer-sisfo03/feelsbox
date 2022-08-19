
function jadwalPsikolog(tanggal){
    // ambil value option
    var tanggal = document.getElementById('tanggal').value;
    var bulan = tanggal.split(' ')[1];
    var bulanAngka = 0;
    switch(bulan){
        case 'January':
            bulanAngka = 1;
            break;
        case 'February':
            bulanAngka = 2;
            break;
        case 'March':
            bulanAngka = 3;
            break;
        case 'April':
            bulanAngka = 4;
            break;
        case 'May':
            bulanAngka = 5;
            break;
        case 'June':
            bulanAngka = 6;
            break;
        case 'July':
            bulanAngka = 7;
            break;
        case 'August':
            bulanAngka = 8;
            break;
        case 'September':
            bulanAngka = 9;
            break;
        case 'October':
            bulanAngka = 10;
            break;
        case 'November':
            bulanAngka = 11;
            break;
        case 'December':
            bulanAngka = 12;
            break;
    }
    var tahun = tanggal.split(' ')[2];
    var tanggal = tanggal.split(' ')[0];
    var tanggal = tahun+'-'+bulanAngka+'-'+tanggal;
    console.log(tanggal);
    axios('/jadwal-psikolog/?tanggal='+tanggal).then(function(response){
        console.log(response.data);
        var data = response.data.jadwal;
        var html = '';
        
        for(var i=0; i<data.length; i++){
            html += '<tr style="width: 100%">';
            if(data[i].user.image == null){
                console.log('kosong');
                html += '<td class="gambar"><img src="storage/profile/default.png" alt="default" width="50" height="50"></td>';
            }
            else{
                html += '<td><img src="storage/profile/'+data[i].user.image+'" alt="default" width="50" height="50"></td>';
            }
            html += '<td>'+data[i].user.name+'</td>';
            html += '<td>'+data[i].tanggal+'</td>';
            html += '<td>'+data[i].jam+'</td>';
            html += `<td>
                <form id="pesan"  class="text-align" action="/pesan" method="POST" class="form-hasil">
                    <input type="hidden" name="id_jadwal" value="${data[i].id}">
                    <input type="hidden" name="_token" value="${response.data.csrf_token}">
                    <input type="hidden" name="psikolog_id" value="${data[i].user.id}">
                    <input type="hidden" name="tanggal" value="${data[i].tanggal}">
                    <input type="hidden" name="jam" value="${data[i].jam}">
                    <button type="submit" class="button" >Booking</button>
                </form>
            </td>`;
            html += '</tr>';

        }
        document.getElementById('hasil').innerHTML = html;
    });
}
