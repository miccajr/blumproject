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
		        <a href="#" style="color: black;"><u>HOME</u></a>&nbsp;&nbsp;&nbsp;
		        <a href="about" style="color: black;">ABOUT</a>&nbsp;&nbsp;&nbsp;
		        <a href="work" style="color: black;">WORK</a>&nbsp;&nbsp;&nbsp;
		        <a href="service" style="color: black;">SERVICE</a>&nbsp;&nbsp;&nbsp;
		        <a href="contact" style="color: black;">CONTACT</a></div></b>&nbsp;&nbsp;        
				<div class="garis_verikal"></div>&nbsp;&nbsp;
			    <input class="mr-sm-2" type="email" placeholder="&nbsp;Email Address" aria-label="Search">
			    <button class="btn my-2" data-toggle="modal" data-target="#registerModal" type="button"  type="button" style="background-color: black;"><div style="color: white;">Register</div></button>
			  </form>
			</nav>
		<!-- EndNavbar -->

			<!-- Carousel -->
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" width="200">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="/carousel/img01.png" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="/carousel/img2.jpg" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="/carousel/img3.png" alt="Third slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			<!-- EndCarousel--><br>
			<div>
				<img src="/carousel/img01.png" width="500" height="220" style="float: left;">&nbsp;&nbsp;&nbsp;&nbsp;
				<b>Log In</b><br>
			  	<div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;
					<i>Email or Username</i><br>&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="username" style="width: 350px;"><br>	
				</div>			
			  	<div class="form-group">&nbsp;&nbsp;&nbsp;&nbsp;
					<i>Password</i><br>&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="Password" name="password" style="width: 350px;"><br>
				</div>
			 	<div class="form-check">&nbsp;&nbsp;&nbsp;&nbsp;
			 		&nbsp;&nbsp;&nbsp;
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					<i>Remember me</i>
				</div><br>
				<table>
					<tr>
						<td>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="#" style="background-color: yellow; color: white; padding:5px 10px 5px 10px;">SIGN IN</a>
						</td>
						<td style="text-align: center; padding:5px 10px 5px 10px; line-height: 13px;">
							<i>or<br>sign in</i>
						</td>
						<td>
							<a href="#" style="background-color: blue; color: white; padding:5px 10px 5px 10px;">FACEBOOK</a>&nbsp;
						</td>
						<td>
							<a href="#" style="background-color: red; color: white; padding:5px 10px 5px 10px;">GOOGLE</a>
						</td>
					</tr> 
				</table>
			</div><br><br>


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