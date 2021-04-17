<?php
    require_once("header.php");
    require_once("headmenu.php");	
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
            <h5 class="card-title">Название таблицы</h5>
            <p class="card-text">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                      </tbody>
                </table>
            </p>
            <a href="#" class="btn btn-primary">Добавить запись</a>
            <a href="#" class="btn btn-primary">Удалить запись</a>
          </div>

        </div>
    </div>
<?php
    require_once("footer.php");
    	
?>
</body>
</html>