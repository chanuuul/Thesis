
<form action="gexec.php" method="POST"  enctype="multipart/form-data">
<div class="az-content-label mg-b-5">Fill up all fields to create an examination account</div>
<hr width="500px">
          
			<!-- start row -->
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Name</p>
              <input class="form-control" required placeholder="Name" type="text" name="name" >
            </div><!-- col -->
          </div>
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Contact Number</p>
              <input class="form-control" required placeholder="Contact" type="text" name="contact" >
            </div><!-- col -->
          </div>
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Email Address</p>
              <input class="form-control" required placeholder="EmailAddress" type="email" name="email" >
            </div><!-- col -->
          </div>
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Username</p>
              <input class="form-control" required placeholder="Username" type="text" name="username" >
            </div><!-- col -->
          </div>
		  <!-- end row -->
			<!-- start row -->
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Password</p>
              <input class="form-control" required placeholder="Password" type="text" name="password" value="stc@2023">
            </div><!-- col -->
          </div>
		  <!-- end row -->
			<!-- start row -->
          <div class="row row-sm">
            <div class="col-lg">
			<p class="mg-b-0">Confirm Password</p>
              <input class="form-control" required placeholder="Confirm Password" type="text" name="cpassword" value="stc@2023">
            </div><!-- col -->
          </div>
		  <!-- end row -->
		  <br>
		  <input type="submit" name="submit" value="Create Guidance Account" class="btn btn-primary">
		  </form>
