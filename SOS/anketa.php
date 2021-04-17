<?php
    require_once("header.php");
    require_once("headmenu.php");	
?>
<body class="container-fluid">
   
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
		  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">	  
	</div>
	<div class="input-group mb-3">
		  <span class="input-group-text" id="basic-addon3">Имя</span>
		  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">	  
	</div>
	<div class="input-group mb-3">
		  <span class="input-group-text" id="basic-addon3">Отчество</span>
		  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">	  
	</div>

	<div class="input-group mb-3">
		  <span class="input-group-text">$</span>
		  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
		  <span class="input-group-text">.00</span>
	</div>

	<div class="input-group">
		  <span class="input-group-text">With textarea</span>
		  <textarea class="form-control" aria-label="With textarea"></textarea>
	</div>

	<div class="input-group">
		<select class="form-select form-select-sm" aria-label=".form-select-sm example">
			  <option selected>Open this select menu</option>
			  <option value="1">One</option>
			  <option value="2">Two</option>
			  <option value="3">Three</option>
		</select>
	</div>
	<div class="input-group mb-3">
	  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
	  	<div class="form-file">
		    <input type="file" class="form-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
		    <label class="form-file-label" for="inputGroupFile01">
		      <span class="form-file-text">Choose file...</span>
		      <span class="form-file-button">Browse</span>
		    </label>
  		</div>
  	</div>
</div>
</div>



<?php
    require_once("footer.php");
    	
?>
</body>
</html>