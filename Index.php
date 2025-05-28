<?php include 'header.php'; ?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Form Login</h2>
    <form action="welcome.php" method="post" class="col-md-6 mx-auto">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" >
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<?php include 'footer.php'; ?>