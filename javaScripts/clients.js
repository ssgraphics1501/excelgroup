const clients =
[
    {name:"Adikavi Nannaya University", city:"Rajahmundry"},
    {name:"Advanced Institute of Education", city:"Rajahmundry"},
    {name:"Advanced Institute of Technology & Management", city:"Rajahmundry"},
    {name:"Aghor Gurupeeth Brahmnisthalaya", city:"Rajahmundry"},

]

$(document).ready(function(){
 
    $.each(clients, function( key, value ){

        value['name'].appendTo('.middle_part');

    })

});

