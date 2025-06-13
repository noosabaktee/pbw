<?php 
session_start();
if (isset($_SESSION['login_Un51k4'])) {
    header("Location: index.php?");
    exit;
}

include 'nav.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Login</title>
</head>
<body>
   <div class="container mt-4">
       <h2>Login</h2>
       <?php if (isset($_GET['message'])): ?>
            <div class="alert alert-info"><?= htmlspecialchars($_GET['message']) ?></div>
        <?php endif; ?>
       <form method="post" action="proses_login.php">
           <div class="mb-3">
               <label for="nama" class="form-label">nama</label>
               <input type="text" class="form-control" id="nama" name="nama" required>
           </div>
           <div class="mb-3">
               <label for="password" class="form-label">kata sandi</label>
               <input type="password" class="form-control" id="password" name="password" required>
           </div>
           <button type="submit" class="btn btn-primary">Login</button>
       </form>
   </div>
</body>
</html>