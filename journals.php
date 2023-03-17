<?php 
$page = "publishers";
include('header.php'); 

?>
  <!-- Contact Details starts -->
  <div class="contacts">
            <?php include('contacts_top.php'); ?>
    </div>

    <!-- Contact Details ends -->

      <!-- Logo and Company names Holder starts -->
      <div class="logo_names_holder" style="height:auto;">
        
        <!-- Logo Parts starts -->
        <?php include('logo_name.php'); ?>
        
        </div>
    
        <!-- Logo and Company names Holder end-->
<!-- Vertical Navigation Starts here -->


<div id="middle_part" style="display:flex;flex-direction:row">
            <nav class="publisher_nav" style="width:25%">
                    <?php include('publisher_vert_menu.php'); ?>
            </nav>  

        

<div class="publisher_right_column">
<h2>Our Online Journals</h2>
<div id="journals">

                    <script>
                        for(var i=1; i<6; i++){
                            $('#journals').append("<div class='gallery_div'><img src='images/online_journals/" + i + ".jpg'></div>");
                        }
                    </script>

</div>
</div>
</div>







<div class="footer">
        <?php include('footer.php'); ?>
        </div> 



        