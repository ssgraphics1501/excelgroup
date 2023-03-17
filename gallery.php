<!-- Main Container stats -->

<div>
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

        <div class="middle_part">
            <!-- Vertical Navigation Starts here -->
            <nav class="publisher_nav">
                    <?php include('publisher_vert_menu.php'); ?>
            </nav>   
            
            
            <!-- Recent books starts here -->
            <div class="publisher_right_column">

            
            

                <!-- Gallery starts -->
                    <div class="gallery">

                    

                    <script>
                        for(var i=1; i<4; i++){
                            $('.gallery').append("<div class='gallery_div'><img src='images/book_cover/" + i + ".jpg'></div>");
                        }
                    </script>
                
                
               


                    </div>
                <!-- Gallery end -->


                
            </div>

            </div>

            <div>

                


            </div>


        </div>
    <div class="footer">

        <?php include('footer.php'); ?>
    </div>    
</div>