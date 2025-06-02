<?php
if(empty($_POST['nama']) || empty($_POST['email'])) {
    header("Location: error.php");
    exit();
}

date_default_timezone_set('Asia/Jakarta');
$nama = $_POST['nama'];
$email = $_POST['email'];
$jam = date("H:i:s");
$hari = date("l");
$tanggal = date("d-m-Y");
?>

<?php include 'api/header.php'; ?>

<div class="container mt-5">
    <div class="card col-md-6 mx-auto">
        <div class="card-header bg-success text-white">
            <h3 class="card-title">Login Berhasil</h3>
        </div>
        <div class="card-body">
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Jam Login:</strong> <?php echo $jam; ?></p>
            <p><strong>Hari:</strong> <?php echo $hari; ?></p>
            <p><strong>Tanggal:</strong> <?php echo $tanggal; ?></p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
