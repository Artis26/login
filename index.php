<?php
session_start();
?>


<header>
    <nav>
        <div>
            <h3>Test Page</h3>
            <ul class="menu-main">
                <li><a href="index.php">HOME</li>
                <li><a href="#">Products</li>
                <li><a href="#">Sales</li>
                <li><a href="#">Member</li>
            </ul>
        </div>
        <ul class="menu-member">
            <?php
            if (isset($_SESSION["userid"])) {
                ?>
                <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
                <li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
                <?php
            } else {
                ?>
                <li><a href="#">SIGNUP</a></li>
                <li><a href="#" class="header-login-a">LOGIN</a></li>
                <?php
            } ?>
        </ul>
    </nav>
</header>


<form action="includes/signup.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <button type="submit" name="submit">Sign Up</button>
</form>

<form action="includes/login.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <br>
    <button type="submit" name="submit">Login</button>
</form>
