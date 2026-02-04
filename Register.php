<?php
include_once 'Navbar.php'
?>

    <div class="container">
        <div class="form_box">
        <h2>Register</h2>
        <form  action="register_process.php" method="post"  onsubmit="return validate()">
            <label>UserName</label>
            <input type="text" placeholder="Full Name" name="username" id="name">
            <span id="name_error"></span>
             <label>E-mail</label>
            <input type="email" placeholder="Email" name="email" id="email" required>
            <span id="email_error"></span>
            <label>Password</label>
            <input type="password" placeholder="Password" name="password" id="password" required>
            <span id="password_error"></span>
          
  <input type="checkbox" id="terms">
  <label for="terms">I agree to all the terms and conditions</label>
   <span id="checkbox_error"></span>
</div>

            <button type="submit">Register</button>
            <p>Already have an account? <a href="login.html">Login</a></p>
        </form>
    </div>
</div>


<?php
include_once 'footer.php'
?>