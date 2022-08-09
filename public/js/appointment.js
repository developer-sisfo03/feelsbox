
function jadwalPsikolog(tanggal){
    // ambil value option
    var tanggal = document.getElementById('tanggal').value;
    
    axios('/jadwal-psikolog/?tanggal='+tanggal).then(function(response){
        console.log(response.data);
        var data = response.data.jadwal;
        var html = '';
        for(var i=0; i<data.length; i++){
            html += '<tr>';
            html += '<td>'+data[i].user.name+'</td>';
            html += '<td>'+data[i].tanggal+'</td>';
            html += '<td>'+data[i].jam+'</td>';
            html += `<td>
                <form action="/booking" method="POST">
                    <input type="hidden" name="_token" value="${response.data.csrf_token}">
                    <input type="hidden" name="psikolog_id" value="${data[i].user.id}">
                    <input type="hidden" name="tanggal" value="${data[i].tanggal}">
                    <input type="hidden" name="jam" value="${data[i].jam}">
                    <button type="submit" class="btn btn-primary">Booking</button>
                </form>
            </td>`;
            html += '</tr>';
        }
        document.getElementById('hasil').innerHTML = html;
    });
}