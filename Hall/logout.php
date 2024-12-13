function logout()
	 
{
		var r=confirm("Do you want to really logout?");
		if(r==true)
		{
			<?php
				
				session_start();
				session_destroy();
				header('Location:index.html');
			?>
		}		
}
