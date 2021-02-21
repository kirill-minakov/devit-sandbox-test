<?php
 $id = $_SESSION['user']['id'];
 $users = mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `users` WHERE `id` != '$id'"), MYSQLI_ASSOC);

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full name</th>
      <th scope="col">Role</th>
      <th scope="col">Status</th>
 	<th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


    <?php foreach ($users as $user) { ?> 
    	
    	<tr>
    		<td>
    			 <form method="POST" autocomplete="off" id="myForm_<?=$user['id']?>" action="/vendor/updateUser.php">
                    <input type="hidden" name='id' value="<?=$user['id']?>"> 
                    <input type="hidden" name="block" id="block-<?=$user['id']?>"> 
                    <input type="hidden" name="admin" id="admin-<?=$user['id']?>">  
                </form> 
    			<?=$user['id']?>
    		</td>
    		<td>
    			<?=$user['full_name']?>
    		</td>
    		<td>
    			<select class="form-select" id="select-role-<?=$user['id']?>" value="<?=$user['admin']?>"  <?php echo $user['admin'] ?  "disabled" :  "";?> aria-label="Default select example">
  					<option value="0" <?php echo $user['admin'] == "0" ?  "selected" :  "";?>>Editor</option>
  					<option value="1" <?php echo $user['admin'] == "1" ?  "selected" :  "";?>>Admin</option>
  				</select>
    		</td>
    		<td>
    			<select class="form-select" id="select-status-<?=$user['id']?>" value="<?=$user['block']?>" <?php echo $user['admin'] ?  "disabled" :  "";?> aria-label="Default select example">
  					<option value="0" <?php echo $user['block'] == "0" ?  "selected" :  "";?> >Active</option>
  					<option value="1" <?php echo $user['block'] == "1" ?  "selected" :  "";?>>Banned</option>
  				</select>
    		</td>
    		<td>
    		<button class="btn btn-success" <?php echo $user['admin'] ?  "disabled" :  "";?> onclick="updateUser(<?=$user['id']?>)">Update</button>
    		
    		</td>
    		    	</form>

	     </tr>
    <?php };?>
  </tbody>
</table>
<script>
	function updateUser(id){
		let block = document.getElementById('block-'+id);
		let admin = document.getElementById('admin-'+id);

		let formBlock = document.getElementById('select-status-'+id); 
		let formRole = document.getElementById('select-role-'+id); 

		block.value = formBlock.value;
		admin.value = formRole.value;
		
		let form = document.getElementById('myForm_' + id);
    	console.log(form);
   		form.submit(); 
	}
	</script>