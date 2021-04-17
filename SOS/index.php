<?php
    require_once("header.php");
    require_once("headmenu.php");	
?>
<body class="container-fluid">
<div class="container-md" style="font-family: fangsong; margin-top: 10%">
    <h1>Стажировка. Опыт. Сегодня. </h1>
    <h5 style="font-style: italic;">Найди свое место уже сейчас</h5>
</div>

<div class="container-md">
    <div class="row">
      <div class="col-sm-6">
        <div class="card" style="padding: 51px;">
          <div class="card-body">
            <h5 class="card-title">Самые востребованная специальности</h5>
            <p class="card-text">Вы узнаете о самых популярных направлениях IT</p>
            <a href="#" class="btn btn-primary">Узнать подробнее</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card" style="padding: 40px;">
          <div class="card-body">
            <h5 class="card-title">Оставить заявку на стажировку</h5>
            <p class="card-text">Заполните анкету для стажировки, отметьте навыки которыми владеете и выберите подходящую компанию для практики</p>
            <a href="anketa.php" class="btn btn-primary">Заполнить анкету</a>
          </div>
        </div>
      </div>
    </div>
    <div class="card" style="margin-top: 10px;">
	  <h5 class="card-header">IT Компании</h5>
	  <div class="card-body">
	    <h5 class="card-title">Требования к кандидату</h5>
	    <p class="card-text">Узнайте о будущем месте работы и требованиях к соискателям</p>
	    <a href="#" class="btn btn-primary">Подробнее</a>
	  </div>
	</div>
</div>



<?php
    require_once("footer.php");
    	
?>
</body>
</html>