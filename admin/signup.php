<!-- The Modal (contains the Sign Up form) -->
<div id="id02" class="modal">
<span onclick="document.getElementById('id02').style.display='none'"
        class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate" action="admin/signup_process.php" method="post">
      <h1>Sign Up</h1>
    <div class="container">
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Full Name" name="name" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="phoneNo"><b>Phone no.</b></label>
      <input type="number" placeholder="Enter Phone number" name="phoneNo" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="signpass" required>

      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <span style="color:dodgerblue">Terms & Privacy</span></p>

      <div class="clearfix">
        <button type="submit" class="signup">Sign Up</button>
        <center><button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button></center>
      </div>

    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>