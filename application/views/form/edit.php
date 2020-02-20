<html>
<link rel="stylesheet" href="<?= base_url('assets/stylee.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <script type="text/javascript" src="<?= base_url('assets/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/bootstrap..js'); ?>"></script>
<title><?= $judul; ?></title>

<body class="body" align="center"
    style="font-family: ubuntu;
    background: #d5f0f3;
    text-align: center;">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $tb_test['id']; ?>">
        <div class="kotak">

            <p align="center">
                <h2><?= $judul; ?></h2>
            </p>

            <label for="name"><b>Name</b></label>
            <input type="text" name="Name" placeholder="Nama Lengkap" value="<?= $tb_test['Name']; ?>">
            <small class="form-text text-danger"><?= form_error('Name'); ?></small>

            <label for="email"><b>Email</b></label>
            <input type="email" name="Email" placeholder="Silakan Isi Email Anda" value="<?= $tb_test['Email']; ?>">
            <small class="form-text text-danger"><?= form_error('Email'); ?></small>

            <label for="gender"><b>Gender</b></label>
            <div class="radio">
                <input type="radio" name="Gender" value="Male">Male
                <input type="radio" name="Gender" value="Female">Female
            </div>
            <small class="form-text text-danger"><?= form_error('Gender'); ?></small>

            <label for="city"><b>City</b></label><br>
            <select name="City">
                <?php foreach($City as $c) : ?>
                    <?php if( $c == $tb_test['City'] ) : ?>
                <option value="<?= $c; ?>"selected><?= $c; ?></option>
                    <?php else : ?>
                <option value="<?= $c; ?>"><?= $c; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>

            <label for="status"><b>Status</b></label><br>
            <input type="checkbox" name="Status" value="Pelajar">Pelajar
            <input type="checkbox" name="Status" value="Kerja">Kerja
            <input type="checkbox" name="Status" value="Menikah">Menikah</th><br>
            <small class="form-text text-danger"><?= form_error('Status'); ?></small>

            <button type="submit" value="Daftar" name="Daftar" class="tbsimpan">Edit </button>
            <a href="<?= base_url('test/index'); ?>" class="tbkembali mt-2">Kembali</a>

        </div>
    </form>
</body>

</html>