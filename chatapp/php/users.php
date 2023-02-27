<?php 
    session_start(); 
    include_once "config.php";

    $outgoing_id = $_SESSION['unique_id'];


    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id}");
    /*WHERE NOT unique_id = {$outgoing_id}"); atar maddhome ami jei id dia c8 korci seta chat list theke delete hoa jabe*/
    $output = "";

    if(mysqli_num_rows($sql) == 1){
    	/*if there is only one row in the database then definitely this is a current logged in user so we tell there is no user to chat if users is equal to 1*/
    	$output .= "No users are available to chat";

    }elseif(mysqli_num_rows($sql) > 0){
    	/*comment tuku data.php theke asbe*/
    	/*while($row = mysqli_fetch_assoc($sql)){
    		$output .= '<a href="#">
					    <div class="content">
						<img src="php/imagess/'.$row['img'].'" alt="">
						<div class="details">
						     <span>'. $row['fname'] . " ". $row['lname'] .'</span>
						<p>This is text message</p>
					    </div>
					    </div>
					    <div class="status-dot"><i class="fas fa-circle"></i></div>
				        </a>';
    	}*/

    	include "data.php";

    }
    echo $output;
?>