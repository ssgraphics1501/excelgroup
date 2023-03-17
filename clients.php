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
            <nav class="publisher_nav publisher_left">
                    <?php include('publisher_vert_menu.php'); ?>
            </nav>  

        

<div class="publisher_right_column">
<h2>Clients List</h2>
<div id="client_list">
<table style="border-collapse:collapse" id="clientTable">
<tr>
    <th style='border:1px solid black;padding:0.3em;'>Client Name</th>
    <th style='border:1px solid black;padding:0.3em'>Place</th>
</tr>
</table>
</div>
</div>
</div>







<div class="footer">
        <?php include('footer.php'); ?>
        </div> 



        <script>
        const obj = [
            {name:"A N Sinha Institute of Social Studies", city : "Patna"},
            {name:"Adikavi Nannaya University", city : "Rajahmundry"},
            {name:"Advanced Institute of Education", city : "Palwal"},
            {name:"Advanced Institute of Technology & Management", city : "Palwal "},
            {name:"Aghor Gurupeeth Brahmnisthalaya", city : "Banora"},
            {name:"AK Garg Engg. College", city : "Ghaziabad"},
            {name:"Alagappa University", city : "Karaikudi"},
            {name:"APIIT SD India", city : "Panipat"},
            {name:"Algol School of Management", city : "Gurgaon"},
            {name:"Aligarh Muslim University", city : "Aligarh"},
            {name:"All India Social Science Research Association", city : "Mumbai"},
            {name:"Allana Institute of Management Sciences", city : "Pune"},
            {name:"Amity University", city : "Haryana"},
            {name:"Amity University", city : "Noida"},
            {name:"Amity University", city : "Rajasthan"},
            {name:"Amrita School  of Business", city : "Coimbatore"},
            {name:"Amrutvahini College of Engineering", city : "Ahmednagar"},
            {name:"Animal Nutrition Society of India", city : "Karnal"},
            
        ];


        

        
       $.each(obj, function(key, value){
        //    document.getElementById("client_list").innerText += value.name + ", " + value.city + "\n ";
           
           $('#clientTable').append( "<tr><td style='border:1px solid black;padding:0.3em; padding-right:10em'>" + value.name + "</td><td style='border:1px solid black;padding:0.3em'>"+ value.city + '</td></tr>');
        });

        $('#clientTable tr').each(function(){
            
        });
        </script>