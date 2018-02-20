<!DOCTYPE html>
	<html>
	    <head>
	    </head>
	    <body>
			<h1>Add a New Car To The List</h1>
			  <section>
			    
				<br>
				<hr>
				<br>

			    <ul>
				<?php while($row = $cars->fetch_object()): ?>
				    <li>
						<?php echo $row->id; ?> <?php echo $row->owner; ?> has a <?php echo $row->car; ?>
				    </li>
				<?php endwhile; ?>
			    </ul>

				<br>
				<hr>
				<br>

			      <h1>Add a New Car To The List</h1>
				<form action="create" method="POST">
					<input type="text" name="owner" placeholder="owner" /><br/>
					<input type="text" name="car" placeholder="car"/><br/>
					<input type="submit" value="Submit"/>
				</form>
				
				<br>
				<hr>
				<br>

				<form action="delete" method="POST">
					<input placeholder="put the id in hear" name="id" value="<?php echo $row->id;?>"> 
                	<input type="submit" value="Delete">
                </form>
				
				<br>
				<hr>
				<br>
				
				<h1> This Section Is Not Working Yet </h1>

				<form action="update" method="POST">
					<input name="id" type="text" value="<?php echo $_POST['id']; ?>" style="display:none" />
					<label for="car">Car name:</label>
					<input name="car" type="text" placeholder="<?php echo $_POST['car']; ?>">
					<br>
					<label for="owner">Owner:</label>
					<input name="owner" type="text" placeholder="<?php echo $_POST['owner']; ?>">
					<br>
					<input type="submit" value="Submit"/>
				</form>
				
				
			  </section>	
	    </body>
	</html>