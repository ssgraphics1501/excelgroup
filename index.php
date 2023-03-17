<!-- Main Container stats -->
<div>
    <?php
    $page = "index" ;
    include('header.php'); 
    ?>

    <!-- Contact Details starts -->
<div class="contacts">
        <?php include('contacts_top.php'); ?>
</div>

    <!-- Contact Details ends -->




    

        <!-- Logo and Company names Holder starts -->
        <div class="logo_names_holder">
        
        <!-- Logo Parts starts -->
        <?php include('logo_name.php'); ?>
        
        </div>
    
        <!-- Logo and Company names Holder starts -->


        <!-- Menu parts start -->
        <div>
            <?php include('menu.php'); ?>
        </div>
        <!-- Menu parts end -->


        <!-- Main Slider starts -->
        <div>
            <?php include('main_slider.php'); ?>
        </div>
        <!-- Main Slider end -->
        



        <!-- Work Area slider start -->
        <div>
            <?php include('work_area.php'); ?>
        </div>
        <!-- Work Area slider end -->
        
        
        <!-- Middle Part starts -->
        <div class="middle_part">

        <!-- Left Column Starts -->
            <div class="text_part">

                <!-- Slider of Sister Organization starts -->
                <div class="sister_org_holder">
                    <?php include('sister_org.php'); ?>
                </div>
                <!-- Slider of Sister Organization ends -->


                <!-- Our Specialities or Strength start -->
                <div class="">
                    <?php include('our_specialities.php'); ?>
                </div>
                <!-- Our Specialities or Strength end -->
                
                
                
                <!-- Our Specialities or Strength start -->
                <div class="clients_logo_holder">
                    <?php include('our_clients.php'); ?>
                </div>
                <!-- Our Specialities or Strength end -->

            </div>


            <!-- Right Side Bar starts -->
            <div class="side_bar">
                <?php include('side_bar.php'); ?>
            </div>

        </div>
        
        
        <div class="footer">
            <?php include("footer.php"); ?>
        </div>


      

</div>
<!-- Main Container ends -->