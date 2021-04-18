<?php
	session_start();
 	//require_once("db_connect.php");
    require_once("header.php");
    require_once("headmenu.php");	
?>
<body class="container-fluid">
<form name = "anketa_student_obr" method="post" action="anketa_student_obr.php" onsubmit="return validate_form()">   
<div class="container-sm" style="margin-top: 12%; width: 50%">
	<div class="input-group mb-3">
		  <span class="input-group-text" id="basic-addon1">@</span>
		  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
	</div>

	<div class="input-group mb-3">
		  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
		  <span class="input-group-text" id="basic-addon2">@example.com</span>
	</div>

	<label for="basic-url" class="form-label">Ваши данные</label>
	<div class="input-group mb-3">
		  <span class="input-group-text" id="basic-addon3">Фамилия</span>
		  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="last_name">	  
	</div>
	<div class="input-group mb-3">
		  <span class="input-group-text" id="basic-addon3">Имя</span>
		  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="first_name">	  
	</div>
	<div class="input-group mb-3">
		  <span class="input-group-text" id="basic-addon3">Отчество</span>
		  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="middle_name">	  
	</div>

	<div class="input-group mb-3">
		  <span class="input-group-text" id="basic-addon3">ВУЗ</span>
		  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="univer">	  
	</div>

	<div class="input-group mb-3">
		  <span class="input-group-text" id="basic-addon3">Направление</span>
		  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="direct">	  
	</div>

	<div class="input-group mb-3">
		<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="course">
			  <option selected>Выберите курс</option>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="3">4</option>
		</select>
	</div>
	<input class="btn btn-primary" type="submit" value="Отправить">
</div>

</form>

<div class="container-sm" style="margin-top:500px; border-style: solid; border-width: 2px; border-color: black;">
	<?php
        //Если в сессии существуют сообщения об ошибках, то выводим их
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
 
            //Уничтожаем чтобы не выводились заново при обновлении страницы
            unset($_SESSION["error_messages"]);
        }
 
        //Если в сессии существуют радостные сообщения, то выводим их
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            //Уничтожаем чтобы не выводились заново при обновлении страницы
            unset($_SESSION["success_messages"]);
        }
    	?>
</div>

<?php
    require_once("footer.php");
    	
?>
</body>
</html>