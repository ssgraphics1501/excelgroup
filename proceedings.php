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
<h2>Proceedings</h2>


<!-- Proceedings Loop Starts -->




<div class="proceedings">

</div>

<script src="javaScripts/proceedings.js"></script>
<script>
    $(document).ready(function(){

        $.each(proceedings, function(key, value){
            $('.proceedings').append(`<div class='gallery_${key}'>`);

            
            $('.gallery_' + key ).append("<img src='" + value.ImageUrl + ".jpg'>");
            $('.gallery_' + key ).append('<b>' + value.Name + "</b><br>");
            $('.gallery_' + key ).append( "<b>Editor(s) : </b>");
            if($.isArray(value.Editors)){
                $.each(value.Editors, function(k, v){
                    $('.gallery_' + key ).append( v );
                    
                }); 
                $('.gallery_' + key ).append("<br>");
            }else {
                $('.gallery_' + key ).append(value.Editors + "<br>");
                };

                $('.gallery_' + key ).append("<b>ISBN : </b>");

                if($.isArray(value.ISBN)){
                $.each(value.ISBN, function(m, n){
                    $('.gallery_' + key ).append( n + "<br> ");
                    
                }); 
               
            }else {
                $('.gallery_' + key ).append(value.ISBN + "<br>");
                }; 
                
                
                $('.gallery_' + key ).append( "<b>Pages : </b>" + value.Pages + "<br>");
                $('.gallery_' + key ).append( "<b>Book Size : </b>" + value.Book_Size + "<br>");
                $('.gallery_' + key ).append( "<b>Binding : </b>" + value.Binding + "<br>");
                $('.gallery_' + key ).append( "<b>Language of the Publication : </b>" + value.Language + "<br>");
               
        });

    });

</script>

<!-- Proceedings Loop Ends -->


</div>
</div>

<div class="footer">
        <?php include('footer.php'); ?>
</div> 

















        