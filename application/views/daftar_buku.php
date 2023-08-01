<!DOCTYPE html>
<html>

<head>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .text {
        font-size: 50px;
        position: relative;
        overflow: hidden;
    }

    .container {
        text-align: center;
        padding: 20px;
        background-color: white;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #323232;
    }

    p {
        color: #767676;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        text-align: left;
        padding: 16px;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>

    <div class="card mt-2">
        <div class="card-header text-center">
            <h1>Selamat datang di Daftar Buku Page</h1>
        </div>
    </div>
    <div class="card-body">
        <!-- menampilkan flashdata -->
        <?= $this->session->flashdata('pesan');?>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary col-12 mb-3 mt-2" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            Tambah Buku
        </button>
</body>

</html>


<table class="table" id="myTable">
    <thead>
        <tr>
            <th scope="col" class="table-primary">No</th>
            <th scope="col" class="table-secondary">Kode Buku</th>
            <th scope="col" class="table-success">Judul Buku</th>
            <th scope="col" class="table-danger">Tahun Terbit</th>
            <th scope="col" class="table-warning">Penerbit</th>
            <th scope="col" class="table-dark">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
    $no = 1;
    foreach($data_buku as $row) { ?>
        <tr>
            <th scope="row"><?=$no++;?></th>
            <td><?= $row['kode_buku'];?></td>
            <td><?= $row['judul_buku'];?></td>
            <td><?= $row['tahun_terbit'];?></td>
            <td><?= $row['nama_penerbit'];?></td>
            <!-- base url untuk hapus -->
            <td><a href="<?=base_url('Pages/hapus_buku/').$row['kode_buku'];?>" class="btn btn-danger btn-sm"
                    onClick="return confirm('Hapus Data Ini?')">
                    <!-- MENAMBAHKAN ICON -->
                    <i class="fa fa-trash " aria-hidden="true">
                        Hapus
                    </i>
                    <a href="<?=base_url('Pages/show_edit_buku/').$row['kode_buku'];?>" class="btn btn-success btn-sm">
                        <i class="fa fa-pencil" aria-hidden="true">
                            Edit
                        </i>
                    </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>