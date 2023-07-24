<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="sign.css">
</head>
<body>
        <div><h1> Create a new account </h1></div>
        <div class="container2">
        <form method="get" action="sign_up.php" name="register">
        <table>
        <tr>
            <td><input type="text" name="taikhoan" placeholder="Username"></td>    
        </tr> 
         
        <tr>
            <td><input type="text" name="email" placeholder="Email"></td>    
        </tr> 

        <tr>    
            <td><input type="text" name="matkhau" placeholder="PassWord"></td>    
        </tr>    
        </table>
            <div id="btn"><input id="signup_sub" type="submit" value="Sign Up"></div>
            <a href="log_in_form.php">Log in</a>
        </form>
    </div>
</body>
</html> 