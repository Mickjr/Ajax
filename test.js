$( document ).ready(function() {

    console.log('js running');

    var volunteers = {};

    // $("div#test1.testclass1").html('<span>Hello World</span>');

    $("body div#test1.testclass1").on ("click", "button#btn2", function(){

       // console.log('btn clicked:', this.id);

       $.ajax({
               type: "POST",                    
               url: 'test2.php',
               //data:{method:method,data:formData},
               success: function(resp){ 

                 volunteers = JSON.parse(resp);
                 
               }
       });

   });



});