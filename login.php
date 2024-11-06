
<?php
@include 'config.php';
session_start();

if(isset($_POST['submit'])){
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = $_POST['password'];

   $select = "SELECT * FROM user WHERE email = '$email'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
      
      // Verify password using password_verify since we're using password_hash
      if(password_verify($pass, $row['password'])){
         if($row['user_type'] == 'admin'){
            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');
         }elseif($row['user_type'] == 'user'){
            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
         }
      }else{
         $error[] = 'Password salah!';
      }
   }else{
      $error[] = 'Email tidak ditemukan!';
   }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BaliEscape</title>
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
                <li><a href="login.php" class="auth-link active">Login</a></li>
                <li><a href="signup.php" class="auth-link signup">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <div class="auth-container">
        <div class="auth-box">
            <h2>Login ke BaliEscape</h2>
            <?php
            if(isset($error)){
               foreach($error as $error){
                  echo '<span class="error-msg">'.$error.'</span>';
               };
            };
            ?>
            <form action="" method="post" class="auth-form">
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" required placeholder="Email">
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" required placeholder="Password">
                </div>
                <div class="form-options">
                    <label>
                        <input type="checkbox" id="remember"> Ingat saya
                    </label>
                    <a href="#" class="forgot-password">Lupa password?</a>
                </div>
                <button type="submit" name="submit" class="auth-button">Login</button>
            </form>
            <p class="auth-redirect">
                Belum punya akun? <a href="signup.php">Daftar sekarang</a>
            </p>
        </div>
    </div>

    <footer id="contact">
        <!-- Footer content remains the same -->
    </footer>
</body>
</html>
