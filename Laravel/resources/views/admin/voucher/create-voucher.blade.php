<form action="/admin/voucher" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Voucher</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Voucher">
    </div>
    <div class="form-group">
        <label for="kode">Kode Voucher</label>
        <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode Voucher">
    </div>
    <div class="form-group">
        <label for="expired">Masa Berlaku</label>
        <input type="date" class="form-control" id="expired" name="expired" placeholder="Masa Berlaku">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>