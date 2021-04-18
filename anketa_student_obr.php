<?php
    //Запускаем сессию
    session_start();
 
    //Добавляем файл подключения к БД
    require_once("db_connect.php");
 
    //Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы.
    $_SESSION["error_messages"] = '';
 
    //Объявляем ячейку для добавления успешных сообщений
    $_SESSION["success_messages"] = '';


	
	if (!isset($_POST['last_name'])||
		!isset($_POST['first_name'])||
		!isset($_POST['middle_name'])||
		!isset($_POST['univer'])||
		!isset($_POST['direct'])||
        !isset($_POST['course'])){
			$_SESSION["error_messages"] = "<p class='mesage_error' >Не все данные введены.<br> Пожалуйста, вернитесь назад и закончите ввод</p>";
			//Возвращаем пользователя на страницу обращения
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: ".$address_site."/anketa_student.php");
            exit();
	}
    //$user = $_SESSION['id_user'];
    #echo $user;
    $last_name = trim($_POST['last_name']);
	$last_name = addslashes($last_name);
	
    $first_name = trim($_POST['first_name']);
    $first_name = addslashes($first_name);

    $middle_name = trim($_POST['middle_name']);
    $middle_name = addslashes($middle_name); 

	$univer = trim($_POST['univer']);
	$univer = addslashes($univer);
	$direct = trim($_POST['direct']);
	$direct = addslashes($direct);

    $course = trim($_POST['course']);
    $course = addslashes($course);

	

	$query = "INSERT INTO `student` (`id_user`,`surname`, `name`, `patronymic`, `vuz`, `faculcy`, `course`) VALUES (NULL,'".$last_name."','".$first_name."','".$middle_name."','".$univer."','".$direct."', ,'".$course."')";
	$result_query_insert = $mysqli->query($query);
    //($reslt = mysqli_query($link, $query ); 
    if(!$result_query_insert) {
    	$_SESSION["error_messages"] .= "<p class='mesage_error' >Ошибка запроса на добавления обращения в БД</p>";
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: ".$address_site."/anketa_student.php");
                //Останавливаем  скрипт
                exit();
    }
    	else{
				$_SESSION["success_messages"] = "<p class='success_message'>Обращение отправлено!</p>";
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: ".$address_site."/anketa_student.php");
    	}
    $result_query_insert->close();
    $mysqli->close();

?>

