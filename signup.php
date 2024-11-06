<?php
@include 'config.php';

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = $_POST['password'];
   $cpass = $_POST['confirmPassword'];
   $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);

   $select = "SELECT * FROM user WHERE email = '$email'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'Email sudah terdaftar!';
   }else{
      if($pass != $cpass){
         $error[] = 'Password tidak cocok!';
      }else{
         // Using password_hash for secure password storage
         $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
         $insert = "INSERT INTO user(name, email, password, user_type) VALUES('$name', '$email', '$hashed_pass', '$user_type')";
         if(mysqli_query($conn, $insert)){
            header('location:login.php');
         }else{
            $error[] = 'Gagal mendaftar. Silakan coba lagi.';
         }
      }
   }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - BaliEscape</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="auth.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <i class="fas fa-umbrella-beach logo-icon"></i>
                <h1>BaliEscape</h1>
            </div>
            <ul class="nav-links">
                <li><a href="index.html">Beranda</a></li>
                <li><a href="layanan.html">Layanan</a></li>
                <li><a href="aktivitas.html">Aktivitas</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="login.php" class="auth-link">Login</a></li>
                <li><a href="signup.php" class="auth-link signup active">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <div class="auth-container">
        <div class="auth-box">
            <h2>Daftar di BaliEscape</h2>
            <?php
            if(isset($error)){
               foreach($error as $error){
                  echo '<span class="error-msg">'.$error.'</span>';
               };
            };
            ?>
            <form action="" method="post" class="auth-form">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" required placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" required placeholder="Email">
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" required placeholder="Password">
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="confirmPassword" required placeholder="Konfirmasi Password">
                </div>
                <select name="user_type">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
                <div class="form-options">
                    <label>
                        <input type="checkbox" id="terms" required> Saya setuju dengan syarat dan ketentuan
                    </label>
                </div>
                <button type="submit" name="submit" class="auth-button">Daftar</button>
            </form>
            <p class="auth-redirect">
                Sudah punya akun? <a href="login.php">Login di sini</a>
            </p>
        </div>
    </div>

    <footer id="contact">
        <!-- Footer content remains the same -->
    </footer>
</body>
</html>