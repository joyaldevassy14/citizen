<?php include("header1.php");	?>
<?php include("userheader.php");	?>



<?php require('../config/autoload.php'); ?>

<?php
$dao=new DataAccess();
//$name=$_SESSION['p_email'];
?>

	
	<div class="plans-section" id="rooms">
				 <div class="container">
<?php    
if(isset($_SESSION['p_email']))
{ 
   $name=$_SESSION['p_email'];
?>

 <h7 class="title-w3-agileits title-black-wthree"><?php  //echo $name ?></h7>

<?php } ?>
				  <h3 class="title-w3-agileits title-black-wthree">SPECIALIZATIONS</h3>
						<div class="priceing-table-main">
            <?php
			
			 $q="select * from specilization";

$info=$dao->query($q);

			$i=0;          
			 while($i<count($info))
			
{ 
		?>		 <div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img style="width:300px; height:300px" src=<?php echo BASE_URL."uploads/".$info[$i]["s_image"]; ?> alt=" " class="img-responsive" />
							<?php /*?> <h4>Deluxe Room</h4><?php */?>
                              <h4><?php echo $info[$i]["sp_name"]?></h4> 
                              
                             
						</div>
                       
						<div class="price-gd-bottom">
							   
							<div class="price-list">
                            
			<a href="viewdoctor.php?id=<?= $info[$i]["sp_id"]?>" >VIEW</a>
							</div>
						</div>
					</div>
				</div>
				<?php 
				$i++;
				} ?>				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
		
	