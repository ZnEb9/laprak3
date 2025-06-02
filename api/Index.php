<?php 
include __DIR__ . '/api/header.php';
?>

<div class="container mt-5">
  <h2 class="text-center mb-4">Form Login</h2>
  <form action="/api/welcome.php" method="post" class="col-md-6 mx-auto">
    <div class="mb-3">
      <label for="name" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>

<?php 
include __DIR__ . '/api/footer.php';
?>
