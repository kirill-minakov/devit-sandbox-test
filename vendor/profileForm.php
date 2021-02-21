<h1>User <?=$user['full_name']?> profile <a type="button" class="btn btn-primary" href="/vendor/logout.php">Logout</a></h1>
	<div class="container">
		<div class="row align-items-start">
	    <div class="col">
	      <img src="../<?=$user['avatar']?>" class="img-thumbnail" alt="...">
		<form action="updateAvatar.php" method="post"  enctype="multipart/form-data">
	    	<div class="input-group mb-3">
  				<input type="file" class="form-control" name='avatar' id="inputGroupFile02">
  				<label class="input-group-text" for="inputGroupFile02">Upload</label>
			</div>
			<button class="btn btn-success" type="submit">Update avatar</button>
		</form>
	    </div>
	    <div class="col">
	     <form action="/vendor/updateProfile.php" method="post">
	     	<div class="mb-3">
	 			<label for="fullName" class="form-label">Full name</label>
	  			<input type="text" class="form-control" name='full_name' id="fullName" placeholder="name@example.com" value="<?=$user['full_name']?>">
			</div>
			<div class="mb-3">
	 			<label for="phoneNumber" class="form-label">Phone</label>
	  			<input type="phone" class="form-control" name="tel" id="phoneNumber" value="<?=$user['phone']?>">
			</div>
			<div class="mb-3">
	 			<label for="email" class="form-label">Email</label>
	  			<input type="email" class="form-control" name="email" id="fullName" placeholder="name@example.com" value="<?=$user['email']?>">
			</div>
			<button class="btn btn-success" type="submit">Update profile</button>
		</form>
	    </div>
	  
	  </div>
