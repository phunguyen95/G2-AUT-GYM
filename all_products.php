
<?php
    require_once ('conf/setting.php');
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="col-sm-4">
                <div class="col-item" <?php echo 'id="'.$row["id"].'"'?>>
                    <div class="photo"><?php echo '<img src="'.$row["img"].'" class="img-responsive" alt="a"/>'?></div>
                    <div class="info" style="width:100%">
                        <div class="row" style="width:100%">
                            <div class="price col-md-6">
                                <?php 
                                echo '<h5>'.$row["name"].'</h5>
                                      <h5>Color: '.$row["colour"].'</h5>
                                      <h5>NZD $'.$row["price"].'</h5>' 
                                ?>

                            </div>
                            <div class="rating hidden-sm col-md-6">
                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                </i><i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="separator clear-left">
                            <p class="btn-details">
                                <i class="fa fa-list"></i>
                                <?php echo '<a href="more_detail.php?p='.$row["id"].'" class="hidden-sm">More details</a>'?>
                            </p>
                            <p class="btn-add">
                                <i class="fa fa-shopping-cart"></i>
                                <?php
                                  echo '<form method="POST" action="cartAction.php?action=addToCart&id='.$row["id"].'">
                                            <div>
                                                 <input type="submit" style="color: black" value="Add to cart" class="btnAddAction" />
                                            </div>
                                        </form>
                                  ';
                                ?>
                               
                            </p>
                            
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div style="height: 50px;">&nbsp;</div>
                </div>
        
        <?php
    }

?>    