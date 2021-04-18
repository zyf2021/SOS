<?php
    require_once("db_connect.php");
    require_once("header.php");
    require_once("headmenu.php");	
    if(isset($_GET['act'])) 
    {$act = $_GET['act'];} 
    else {$act = 'home';}
    switch($act) {
      case 'home':
?>
<body class="container-fluid" >
    <div class="container-sm" style="margin-top: 12%; width: 100%">
        <div class="card text-center">
          <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
              <li class="nav-item">
                <a class="nav-link active" href="#">Компетенции</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Стажировки</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Работодатели</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Студенты</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">ВУЗы</a>
              </li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Компетенции</h5>
            <p class="card-text">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Код</th>
                          <th scope="col">Название</th>
                          <th scope="col">Описание</th>
                          <th scope="col">Удалить</th>
                        </tr>
                      </thead>


                  <tbody>
                      <?php
                          $comp_result = $mysqli->query("SELECT * FROM competencies");
                          if(mysqli_num_rows($comp_result) >= 1) {
                          //echo "<table class = 'admin'>";
                          while($comp_array = mysqli_fetch_array($comp_result)) {
                            echo "<tr>
                              <th>".$comp_array[0]."</th>
                              <th> 
                                <a href = '?act=edit_comp&id=$comp_array[0]'>".$comp_array[1]."</a>
                              </th>
                              <th>".$comp_array[2]."</th>
                              <th>".$comp_array[3]."</th>
                              <th><a href = '?act=delete_comp&id=$comp_array[0]'>Удалить</a></th>
                              </tr>";
                            }
                          }
                          break;
                      ?>
                    </tbody>
                </table>
            </p>
            <a href="#" class="btn btn-primary">Добавить запись</a>
            <a href="#" class="btn btn-primary">Удалить запись</a>
            <?php
              case 'edit_comp':
                if(isset($_GET['id'])){
                  $id = $_GET['id'];
                  $result = $mysqli->query("SELECT * FROM competencies WHERE id='$id'") or die("Не выбран id из таблицы");
                  if(mysqli_num_rows($result) == 1){
                    if(isset($_POST[2]) && isset($_POST[3]) && isset($_POST[1])){
                      $update = $mysqli->query("UPDATE competencies SET name='$_POST[2]', 
                             content='$_POST[3]', 
                             code='$_POST[1]' 
                             WHERE id='$id'") 
                      or die("Не обновлена таблица");
                      if($update){
                        $result = $mysqli->query("SELECT * FROM competencies WHERE id='$id'") or die("Не удалось прочитать данные из таблицы");
                        $message = "Успешно обновлено!";
                      }
                    }
                  $news = mysqli_fetch_array($result);
                  echo "<div class=\"container-sm\" style=\"margin-top: 12%; width: 100%\"><table class = 'table table-striped'>
                        <tr>
                          <a href='?act=home' class = \"go_back\">[Вернуться]</a><br>
                          $message
                        </tr>
                        <tr>
                          <th>
                            <form action = '' method='post' class='comp-form'>
                              <div class=\"input-group\">
                                  <span class=\"input-group-text\">Название</span>
                                  <input type=\"text\" aria-label=\"Название\" class=\"form-control\" name='name' value='".$competencies[2]."'>
                              </div>
                              <div class=\"input-group\">
                                  <span class=\"input-group-text\">Код</span>
                                  <input type=\"text\" aria-label=\"Название\" class=\"form-control\" name='code' value='".$competencies[1]."'>
                              </div>
                              <div class=\"input-group\">
                                  <span class=\"input-group-text\">Описание</span>
                                  <textarea class=\"form-control\" aria-label=\"With textarea\"name='content'>$competencies[3]</textarea>
                              </div>
                                                           
                              <input type='submit' class='button' value='Сохранить'>
                            </form>
                          </th>
                        </tr>
                        </table></div>";
                  } 
                }
                break;
              }
            ?>
          </div>

        </div>
    </div>
<?php
    //$comp_result ->close();
    //$mysqli->close();
    require_once("footer.php");	
?>
</body>
</html>