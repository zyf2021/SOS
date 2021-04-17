<?php
    require_once("header.php");
    require_once("headmenu.php");	
?>
<body class="container-fluid" >
<div class="container-sm" style="margin-top: 12%; width: 50%">
<form action="login_action.php" method="post">
        <div class="form-floating mb-3">
            <input type="tel" class="form-control" id="phoneInput" name="username">
            <label for="floatingInput">username</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Пароль" name="password">
            <label for="floatingPassword">Пароль</label>
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>
        <a href="/registration">Регистрация</a>
    </form>
</div>

<?php
    require_once("footer.php");
    	
?>
</body>
</html>