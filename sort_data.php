<?php
    session_start();
    require_once ('config.php');   

    if(empty($_GET['key']) || $_GET['key'] == ""){
        require "all_products.php";
    }else{
        $key = $_GET['key'];

        $sql = "SELECT * FROM products ORDER BY ".$key." DESC";
        $find = $dbo->prepare($sql);
        $find->execute();
        $count = $find->rowCount();

        if($count > 0){
            foreach ($dbo->query($sql) as $row) {  
                ?> 
                <div class="col-sm-4">
                    <div class="col-item">
                        <div class="photo"><?php echo '<img src="'.$row["img"].'" class="img-responsive" alt="a"/>'?></div>
                             <div class="info" style="width:100%">
                                <div class="row" style="width:100%">
                                    <div class="price col-md-6">
                                        <?php echo '
                                            <h5 id="'.$row["id"].'_name">'.$row["name"].'</h5>
                                            <h5 id="'.$row["id"].'_price" class="price-text-color">NZD $'.$row["price"].'</h5>'

                                        ?>
                                        <input type="hidden" <?php echo 'id="'.$row["id"].'_name" value="'.$row["name"].'"'?>>
                                        <input type="hidden" <?php echo 'id="'.$row["id"].'_price" value="NZD $'.$row["price"].'"'?>> 
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
        }else {
            echo "<h2 style=\"text-align: center;\">No results.</h2>";
        }
    }
?> 