<html>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css'); ?>">
<script type="text/javascript" src="<?= base_url('assets/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap..js'); ?>"></script>
<style>
    body {
        font-family: ubuntu;
    }

    tr:nth-child(even) {
        background-color: #E3E3E3;
    }

    th,
    td,
    table {
        border: 1px solid #ddd;
        text-align: center;

    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        padding: 15px;
    }
    a {
        text-decoration : none;
    }
</style>

<title>Tabel</title>

<body background="white">
    <div class="container">
    <header align="center">

        <h1>Tabel Anggota</h1>
        <a href="<?= base_url('test/add') ?>">Tambah</a>

        <?php if($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-succes alert-dismissible fade show" role="alert">
                Data<strong>Berhasil</strong><?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        </div>
        <?php endif; ?>
    </div>

    </header>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>City</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($tb_test as $tabel) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $tabel['Name'] ?></td>
                <td><?= $tabel['Email'] ?></td>
                <td><?= $tabel['Gender'] ?></td>
                <td><?= $tabel['City'] ?></td>
                <td><?= $tabel['Status'] ?></td>
                <td><a href="<?= base_url(); ?>test/edit/<?= $tabel['id']; ?>"
                 class="badge badge-warning">Edit</a> | 
                    <a href="<?= base_url(); ?>test/delete/<?= $tabel['id']; ?>"
                onclick="return confrim('yakin?');" class="badge badge-danger">Delete</a></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
        </center>
    </table>
    </div>
    </body>

</html>