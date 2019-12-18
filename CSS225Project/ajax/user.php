<?php
		if(isset($_COOKIE['user'])){
			echo "
				
				<div style='display: flex;'>
					<p style='margin-right: 5px;
						color: #fff;
						border: 1px solid #fff;
						padding: 10px;
						border-radius: 5px;' 
					>".$_COOKIE['user']."</p> <a href='php/exit.php'
						style='margin-right: 5px;
						color: #fff;
						border: 1px solid #fff;
						padding: 10px;
						border-radius: 5px;' 
					>Выйти</a>
				</div>";
		}
?>
