<?php
include_once 'Navbar.php'
?>
<div class="container">
        <h2>Login</h2>
       
        <form >
            
             <label>E-mail</label>
            <input type="email" placeholder="Email" required>
            <label>Password</label>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <p>Don't have an account? <a href="register.html">Register</a></p>
    </div>
<?php
include_once 'footer.php'
?>