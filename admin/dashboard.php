<?php
session_start();
  if(!isset($_SESSION['login_user'])){
    header('Location:login.php');
  }else{
      include '../database.php'; 
      include 'layout-top.php' ;
?>
<script>
    var products = [];
</script>

<?php $data = mysqli_query($conn,"SELECT * FROM products"); 
?>
<div class="container-fluid">
  <div class="row">
  <div class="col" style='text-align:center;background-color:#d6d6d6;color:#000;margin-top:1rem;letter-spacing:1px;font-family:roboto;padding:2px'> 
        <a href="logout.php" class="btn" style="float:right;margin-top:10px;margin-right:1rem;background-color:white;color:#333;letter-spacing:1px;">Logout</a>
       <h3>Products table</h3>
        
     </div>
  </div>
</div>
<div class='container-fluid' style="margin:1rem 2rem">
    <div class="row">
           
        <table class="table table-hover table-bordered" style="margin:2rem 0;table-layout:fixed;overflow-wrap:break-word;">
  <thead style="letter-spacing:1px;background-color:#daeaef!important;color:#333!important">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Images</th>
      <th scope="col">Product popularity image</th>
      <th scope="col">Description</th>
      <th scope="col">Product Price</th>
      <th scope="col">Regular Price</th>
      <th scope="col">Shipping</th>
      <th scope="col">Image URL</th>
      <th scope="col">Swap URL</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $counter = 0;      
      $last = (mysqli_num_rows($data) -1);
      //print_r($last);exit;
      while($row = mysqli_fetch_array($data,MYSQLI_BOTH)) { 
          ?>
                <script type="text/javascript">
                var product = {};
                product.id = '<?php echo $row['id'];?>';
                product.order = '<?php echo $counter;?>';
                product.product_name = '<?php echo $row['product_name'] =str_replace("'","\'",$row['product_name']);?>';
                product.images = '<?php echo $row['images'] ?>';
               
                product.description = '<?php echo $row['description'] = str_replace("'","\'",$row['description']); ?>';
                product.product_price = '<?php echo $row['product_price'] ?>';
                product.regular_price = '<?php echo $row['regular_price'] ?>';
                product.shipping = '<?php echo $row['shipping'] ?>';
                product.URL = '<?php echo $row['url_1'] ?>';
                products.push(product);
                </script>
                <?php
         
        ?>
                <tr id="<?php echo $counter; ?>" class="cls_<?php echo $row['id']; ?>">
                    <td scope="row"><?php echo $row['id'] ?></td>
                    <td class="product_name">
                        <?php echo $row['product_name'] ?>
                    </td>
                    <td class="images">
                        <?php
                            if($row['images'] != "")
                            {
                               ?>
                                <img src="../<?php echo $row['images'];?>" width="100px">
                                <a href="javascript:void(0);" class="removePic"><i class="fa fa-trash"></i></a>
                               <?php     
                            }
                            else if($row['images'] == "" || $row['images'] == NULL)
                            {
                                ?>
                                <img src="../images/products_image/default-product-img.jpg" width="100px">
                                <?php    
                            }
                        ?>                        
                    </td>
                    <td class="img_popular">
                    <?php 
                     
                    if($row['img_popular'] != "")
                    {
                        ?>
                                               
                        <img src="../<?php echo $row['img_popular'];?>" alt="no image" width="100px">
                        <a href="javascript:void(0)" class="remove_pic"><i class="fa fa-trash"></i></a>
                    <?php 
                    }
                    elseif($row['img_popular'] == "" || $row['img_popular'] == NULL )
                    {
                        ?>
                        <img src="../images/popular_image/default-product-img.jpg" alt="" width="100px">
                        <?php
                    }
                    ?>
                    </td>
                    
                    <td class="description">
                        <?php echo $row['description'] ?>
                    </td>
                    <td class="product_price">
                        <?php echo $row['product_price'] ?>
                    </td>
                    <td class="regular_price">
                        <?php echo $row['regular_price'] ?>
                    </td>
                    <td class="shipping">
                        <?php echo $row['shipping'] ?>
                    </td>
                    <td class="URL">
                        <a target='_blank' href="<?php echo $row['url_1'] ?>"><?php echo $row['url_1'] ?></a>
                    </td>                    
                    <td>
                        <?php
          if($counter == 0)
          {
            ?>
                        <a target='_blank' class="swap" title="DOWN" href="javascript:void(0);"><i
                                class="fa fa-arrow-down" style="margin:1rem 1rem; font-size:30px;"></i></a>
                        <?php
          }
          elseif($counter == $last)
          {
            ?>
                        <a target='_blank' class="swap" title="UP" href="javascript:void(0);"><i
                                class="fa fa-arrow-up" style="margin:1rem 1rem; font-size:30px;"></i></a>
                        <?php
          }
          else
          {
            ?>
                        <a target='_blank' class="swap" title="UP" href="javascript:void(0);"><i
                                class="fa fa-arrow-up" style="margin:1rem 1rem; font-size:30px;"></i></a>
                        <a target='_blank' class="swap" title="DOWN" href="javascript:void(0);"><i
                                class="fa fa-arrow-down" style="margin:1rem 1rem; font-size:30px;"></i></a>
                        <?php
          }
          ?>

                    </td>

                    <td>
                        <a href="update_products.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm"
                            id="update_products" style="letter-spacing:1px;font-family:roboto">Update</a></br>
                            <a href="add_products.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm add_delet_edi" style="letter-spacing:1px;font-family:roboto;margin-top:10px;width:62%;">Add</a></br>
                            <a href="delete_products.php?eid=<?php echo $row['id']; ?>" 
                           class="btn btn-primary btn-sm add_delet_edi" onclick="return(confirm('Are You Sure You Want to Delete?'));" style="letter-spacing:1px;font-family:roboto;margin-top:10px;width:62%;">Delete</a></br>
                           
                    </td>
                </tr>
                <?php 
$counter++;
    } ?>
    
   
  </tbody>
</table>
        </div>
    </div>


<?php  include 'layout-bottom.php' ;
  }

?>
