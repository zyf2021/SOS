<?php
    require_once("header.php");
    require_once("headmenu.php");	
?>

<body>
<div class="container-md students" style="margin-top: 11%; margin-bottom:10px;">
 <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Найти работодателя" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
 </div>

<div class="container-md" style="">

<div class="card-group">
  <div class="card">
    <svg xmlns="https://openclipart.org/download/216996/1428616740.svg" viewBox="0 0 54 54" style="max-width: 80px;"></svg>
    <div class="card-body">
      <h5 class="card-title">Учебная практика</h5>
      <p class="card-text">Описание практики в крупной компании. Описание стека технологий. Описание требованиц к соискателю</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
   <svg xmlns="https://openclipart.org/download/216996/1428616740.svg" viewBox="0 0 54 54" style="max-width: 80px;"></svg>
    <div class="card-body">
      <h5 class="card-title">Производственная практика</h5>
      <p class="card-text">Описание практики в крупной компании. Описание стека технологий. Описание требованиц к соискателю</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <svg xmlns="https://openclipart.org/download/216996/1428616740.svg" viewBox="0 0 54 54" style="max-width: 80px;"></svg>
    <div class="card-body">
      <h5 class="card-title">Стажировка</h5>
      <p class="card-text">Описание практики в крупной компании. Описание стека технологий. Описание требованиц к соискателю</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<a class="btn btn-primary" href="#" role="button" style="margin-left:40%; margin-top:10px;">Больше стажировок</a>
</div>

<div class="container-md" style="">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg xmlns="https://openclipart.org/download/216996/1428616740.svg" viewBox="0 0 54 54" style="max-width: 80px;"></svg>
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <svg xmlns="https://openclipart.org/download/216996/1428616740.svg" viewBox="0 0 54 54" style="max-width: 80px;"></svg>
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item" style="border-color:gray"; >
          <svg xmlns="https://openclipart.org/download/216996/1428616740.svg" viewBox="0 0 54 54" style="max-width: 80px;"></svg>
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
<?php
    require_once("footer.php");
    	
?>
</body>
</html>