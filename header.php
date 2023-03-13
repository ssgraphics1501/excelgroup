<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Group Excel India</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style450px.css">
<link rel="stylesheet" href="css/style300px.css">

<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

</head>
<body>
<div class="top_header_box">

    <div class="menu_bar">
        <img src="images/m_bar.png" class="m_bar" alt="Menu Bar for Mobile">
    </div>

    <div class="logo_name">
        <img src="images/group_logo.jpg" alt="Group Logo" class="g_logo">
        <h1 class="comp_name">Group Excel India</h1>
        
    </div>

    <div class="menu_holder">
        <?php include('menu.php'); ?>
    </div>
    
    
    
</div>

<div class="mobile_view">
    <?php include('mobile_menu.php'); ?>
</div>

<script>
    $(document).ready(function(){
        $('.m_bar').on('click', function(){
            $('.mobile_view').toggle();
        });

        $('#resources').on("click", function(){
            $('.mobile_sub_menu').toggle();
        })
    })
</script>