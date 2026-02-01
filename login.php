<?php
include_once 'Navbar.php'
?>
<div class="container">
        <h2>Login</h2>
       
        <form action='login_process.php' method='post'>
            
             <label>E-mail</label>
            <input type="email"  name ="email" placeholder="Email" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <p>Don't have an account? <a href="register.html">Register</a></p>
    </div>
<?php
include_once 'footer.php'
?>