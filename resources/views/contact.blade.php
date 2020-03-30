<!DOCTYPE html>
<html>
<head>
		<!-- Head -->
			@include('template.head')
		<!-- EndHead -->	
</head>
<body>
	<div class="container mb-md-2">

		<!-- Navbar -->
			<nav class="navbar navbar-light">
			  <span class="navbar-brand mb-0 h1"><img src="/logo/logoblum.png" width="80" height="55"></span>
			  <a class="navbar-brand"><img src=""></a>
			  <form class="form-inline"><b>

		        <div>
		        <a href="/" style="color: black;">HOME</a>&nbsp;&nbsp;&nbsp;
		        <a href="about" style="color: black;">ABOUT</a>&nbsp;&nbsp;&nbsp;
		        <a href="work" style="color: black;">WORK</a>&nbsp;&nbsp;&nbsp;
		        <a href="service" style="color: black;">SERVICE</a>&nbsp;&nbsp;&nbsp;
		        <a href="#" style="color: black;"><u>CONTACT</u></a></div></b>&nbsp;&nbsp;        
				<div class="garis_verikal"></div>&nbsp;&nbsp;
			    <input class="mr-sm-2" type="email" placeholder="&nbsp;Email Address" aria-label="Search">
			    <button class="btn my-2" data-toggle="modal" data-target="#registerModal" type="button" style="background-color: black;"><div style="color: white;">Register</div></button>
			  </form>
			</nav>
		<!-- EndNavbar -->

		<img src="/carousel/img01.png" width="100%" height="530px"><br><br>

			<!-- Footer -->
				@include('template.footer')
			<!-- EndFooter -->

			<!-- Script -->
				<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
			<!-- EndScript -->
	</div>
</body>
</html>

<!-- ModalRegister -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form onsubmit="myFunction()">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name</label>
		    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputEmail4">Username</label>
		      <input type="email" class="form-control" id="inputEmail4">
		    </div>
		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Password</label>
		      <input type="password" class="form-control" id="inputPassword4">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" name="telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">No. Telp</label>
		    <input type="text" name="telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		  </div><hr><br>
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
      </div>
    </div>
  </div>
</div>


<script>
function myFunction() {
  alert("Cooming Soon");
}
</script>