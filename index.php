<!doctype html>
<?php
include 'head.php'
?>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <h6 class="mb-4 text-muted">Login to your account</h6>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="mb-3 text-start">
                            <label for="name" class="form-label">Enter Username</label>
                            <input type="text" class="form-control" placeholder="Enter Username" name="user" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                         <button type="submit" name="login" class="btn btn-primary shadow-2 mb-4">login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'foot.php';
if(isset($_POST['login'])){
$user=$_POST['user'];
$pass=$_POST['password'];
$sql="SELECT *FROM auth where au_username='$user' AND au_password='$pass'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
   $row=mysqli_fetch_assoc($result);
   $_SESSION['rolle']=$row['au_role'];
   $_SESSION['name']=$row['au_name'];
   $_SESSION['opr_id']=$row['au_oprid'];
   //echo $_SESSION['rolle'];
    header('location: registration.php');
}else{
    echo "<h1>Please fill correct username and password</h1>";
}
}
?>
