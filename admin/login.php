        <!-- Button to open the modal login form 
        <button onclick="document.getElementById('id01').style.display='block'">Login</button>-->

        <!-- The Modal -->
        <div id="id01" class="modal" >
        <span onclick="document.getElementById('id01').style.display='none'"class="close" title="Close Modal">&times;</span>

        <!-- Modal Content -->
        <form class="modal-content animate" action="admin/login_process.php" method="post">
            <h1>Login to Continue</h1>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>

                <div class="container">
                <label for="uname"><b>Username</b></label><br>
                <input type="text" placeholder="Enter your Registered Email-ID" name="uname"  
                style=" width: 100%;  padding: 12px 20px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc; box-sizing: border-box;" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" 
                style=" width: 100%;  padding: 12px 20px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc; box-sizing: border-box;"
                required>

                <button id="login-btn" type="submit">Login</button>

                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <center><div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
            </div></center>

            <div class="container signin">
                <p>New User? Create an account <span onclick="document.getElementById('id02').style.display='block'; document.getElementById('id01').style.display='none'; " style="color:dodgerblue; text-decoration:underline; cursor:pointer">Sign up</span>.</p>
            </div>
        </form>
        </div>

 



