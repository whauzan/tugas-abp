<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>MOD 6 | {{ Route::currentRouteName() }}</title>
</head>
<body class="antialiased">
    <h1><center>Data Obat</center></h1>
    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#tambahObat">Tambah Obat</button>
    <div class="modal fade" id="tambahObat" tabindex="-1" aria-labelledby="tambahObatLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mx-auto" id="tambahObatLabel">Tambah Obat</h5>
                </div>
                <div class="modal-body">
                    <form action="tambahObat" method="POST">
                        @csrf
                        <div class="container d-grid gap-3">
                            <div class="row">
                                <div class="col-6">
                                    <label>Kode</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" id="kode" name="kode"></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label>Nama</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" id="nama" name="nama"></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label>Deskripsi</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" id="deskripsi" name="deskripsi"></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label>Tipe</label>
                                </div>
                                <div class="col-6">
                                    <select id="tipe" name="tipe">
                                        <option value="tablet">Tablet</option>
                                        <option value="kapsul">Kapsul</option>
                                        <option value="bubuk">Bubuk</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label>Jumlah</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" id="jumlah" name="jumlah"></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label>Harga Satuan</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" id="harga" name="harga"></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table class="table" id="tableObat">
    <thead>
        <tr>
        <th scope="col">Ubah</th>
        <th scope="col">Hapus</th>
        <th scope="col">Kode</th>
        <th scope="col">Nama</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Tipe</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Harga Satuan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editObat">Ubah</button>
            </td>
            <td>
                <button class="btn btn-danger">Hapus</button>
            </td>
            <td>T002</td>
            <td>Vitacimin</td>
            <td>pitamin</td>
            <td>Kapsul</td>
            <td>50</td>
            <td>1000</td>
        </tr>
    </tbody>
    </table>

    <div class="modal fade" id="editObat" tabindex="-1" aria-labelledby="editObatLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mx-auto" id="editObatLabel">Edit Obat</h5>
                </div>
                <div class="modal-body">
                    <form action="tambahObat" method="POST">
                        @csrf
                        <div class="container d-grid gap-3">
                            <div class="row">
                                <div class="col-6">
                                    <label>Kode</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" id="kode" name="kode"></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label>Nama</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" id="nama" name="nama"></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label>Deskripsi</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" id="deskripsi" name="deskripsi"></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label>Tipe</label>
                                </div>
                                <div class="col-6">
                                    <select id="tipe" name="tipe">
                                        <option value="tablet">Tablet</option>
                                        <option value="kapsul">Kapsul</option>
                                        <option value="bubuk">Bubuk</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label>Jumlah</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" id="jumlah" name="jumlah"></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label>Harga Satuan</label>
                                </div>
                                <div class="col-6">
                                    <input type="text" id="harga" name="harga"></input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>