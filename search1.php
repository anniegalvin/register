<?php
$conn=mysqli_connect("localhost","root","","nwslibrary");
$get=$_POST['search'];
if($get){
	$show="SELECT * FROM book_details where title LIKE '$get'";
	$result=mysqli_query($conn,$show);
	while($rows=mysqli_fetch_array($result)){
		echo $rows['title'];
		echo $rows['author'];
		echo $rows['ISBN'];
		echo "<br/>";
	}
	
}
else{
	echo "no results";
}

				