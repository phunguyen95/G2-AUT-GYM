
<div class="col-md-4">
    <h3 class="m_2">Our Trainers</h3>
    <div class="course_demo">
      	<ul id="flexiselDemo3">	

<?php
	require_once ('conf/setting.php');
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }    

  	$sql = "SELECT * FROM trainer";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
    	?>
		<li><?php echo '<img src="'.$row["img"].'" />';?>
			<div class="desc">
				<h3><?php echo $row['trainer_name'];?><br><span class="m_text"><?php echo $row['trainer_class'];?></span></h3>
				<p><?php echo $row['description'];?></p>
				<div class="coursel_list">
					<i class="heart1"> </i>
					<i class="like"> </i>
				</div>
				<div class="coursel_list1">
					<i class="twt"> </i>
					<i class="fb"> </i>
				</div>
				<div class="clear"></div>
			</div>
		</li>
    	<?php

    }
    mysqli_close($conn);
?>
	</ul>		
		<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 2
			    		}
			    	}
			    }); 
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
</div>
