
function jadwalPsikolog(tanggal){
    // ambil value option
    var tanggal = document.getElementById('tanggal').value;
    
    axios('/jadwal-psikolog/?tanggal='+tanggal).then(function(response){
        console.log(response.data);
        var data = response.data;
        var html = '';
        for(var i=0; i<data.length; i++){
            html += '<tr>';
            html += '<td>'+data[i].user.name+'</td>';
            html += '<td>'+data[i].tanggal+'</td>';
            html += '<td>'+data[i].jam+'</td>';
            html += '</tr>';
        }
        console.log(html);
        document.getElementById('hasil').innerHTML = html;
    });
}