<!doctype html>
<html>
<head>
    <tittle></tittle>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class=container>
        <div class="header">
            <h1 class="logo">Pet Clinic Selfandy</h1>
        </div>

        <div class="container-content">
            <h3>Form Login</h3>
            <form method="post" action="login_210032.php">
            <table class="loginBox">
                <tr>
                    <td>Username</td>
                    <td>: <input type="text" name="username_210066" required /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>: <input type ="password" name="password_210066" id="pass" required /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;<input type="checkbox" onclick="show()"> Show Password
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;
                        <input type="submit" name="login" value="LOGIN" />
                        <input type="reset" name="reset" value="RESET" />

                    </td>
                </tr>    
                </table>
                </form>
        </div>
        
        
    </div>
    
    
    <script>
        function show() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text"
            }   else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>