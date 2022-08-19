<!DOCTYPE html>
<html lang="en">
    <head>
        <title>voucher</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">voucher</h3>
                        </div>
                        <a href="/admin/voucher/create" class="btn btn-primary">tambah voucher</a>
                        <br>
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Voucher</th>
                                        <th>Kode Voucher</th>
                                        <th>Masa Berlaku</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($vouchers as $voucher)
                                    <tr>
                                        <td>{{ $voucher->nama }}</td>
                                        <td>{{ $voucher->kode }}</td>
                                        <td>{{ $voucher->masa_berlaku }}</td>
                                        <td>
                                            <!-- <a href="/admin/voucher/{{ $voucher->id }}/edit" class="btn btn-primary">Edit</a> -->
                                            <form action="/admin/voucher/{{ $voucher->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="id" value="{{ $voucher->id }}">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>