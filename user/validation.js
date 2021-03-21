$(document).ready(function() {

    
     let boolemail = false;
     let boolpass = false;
     let boolconpass = false;
     let boolname = false;
     let boolcell = false;
    
     var emailVal ="";
     var passVal ="";
     var confirmpassVal ="";
     var nameVal ="";
     var cellVal ="";


    $("#email").blur(function() {
      emailVal = $(this).val();
      var valid = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

      if (emailVal.trim() === "" || emailVal == null) {
        $('#email-e').html('<img src="images/loading.gif" height="100" width="100">');  
        window.setTimeout(function(){
        
            $('#email-e').css("color", "red");
            $('#email-e').html('&#10060; Please enter your email');

        },500);
        
        boolemail = false;

      } else { 
        if (!valid.test(emailVal)) {

        $('#email-e').html('<img src="images/loading.gif" height="100" width="100">');  
        window.setTimeout(function(){
        
            $('#email-e').css("color", "red");
            $('#email-e').html('&#10060; Invalid email address');

        },500);  

        boolemail = false;
    
        } else {

            $('#email-e').html('<img src="images/loading.gif" height="100" width="100">');  
            window.setTimeout(function(){
            
                $('#email-e').css("color", "green");
                $('#email-e').html('&#10004; Valid email address');
    
            },500);   

            boolemail = true;
  
        }

      }


  
});


        $("#password").blur(function() {

            passVal = $(this).val();  

            if (passVal.trim() === "" || passVal == null) {
                $('#password-p').html('<img src="images/loading.gif" height="100" width="100">');  
                window.setTimeout(function(){
                
                    $('#password-p').css("color", "red");
                    $('#password-p').html('&#10060; Please enter your password');
        
                },500);

                boolpass = false;
                
              }
            else if(passVal.length < 5){

                $('#password-p').html('<img src="images/loading.gif" height="100" width="100">');  
                window.setTimeout(function(){
                
                    $('#password-p').css("color", "red");
                    $('#password-p').html('&#10060; Your password length must be greater than 5 character');
        
                },500); 

                boolpass = false;
                
            }else{

                $('#password-p').html('<img src="images/loading.gif" height="100" width="100">');  
                window.setTimeout(function(){
                
                 $('#password-p').css("color", "green");
                 $('#password-p').html(' &#10004; Valid password');
        
                },500);   

                boolpass = true;


            }


        });

        $("#confirmPass").blur(function() {

            confirmpassVal = $(this).val();  
            var validpass =  $('#password').val();  

            if (confirmpassVal .trim() === "" || confirmpassVal  == null) {
                $('#cpassword-p').html('<img src="images/loading.gif" height="100" width="100">');  
                window.setTimeout(function(){
                
                    $('#cpassword-p').css("color", "red");
                    $('#cpassword-p').html('&#10060; Please enter the confirm password');
        
                },500);

                boolconpass = false;
                
            }

               else if((confirmpassVal != validpass)  && (confirmpassVal.length<5)){

                    $('#cpassword-p').html('<img src="images/loading.gif" height="100" width="100">');  
                    window.setTimeout(function(){
                    
                        $('#cpassword-p').css("color", "red");
                        $('#cpassword-p').html('&#10060; password not matched');
            
                    },500); 
                    boolconpass = false;
                }else{
    
                    $('#cpassword-p').html('<img src="images/loading.gif" height="100" width="100">');  
                    window.setTimeout(function(){
                    
                        $('#cpassword-p').css("color", "green");
                        $('#cpassword-p').html('&#10004; password matched');
            
                    },500); 

                    boolconpass = true;
    
    
                }
            


        });

        $("#name").blur(function() {
             nameVal = $(this).val();
            var validName = /^[a-zA-Z ]+$/;
      
            if (nameVal .trim() === "" || nameVal  == null) {
              $('#fullname-nm').html('<img src="images/loading.gif" height="100" width="100">');  
              window.setTimeout(function(){
              
                  $('#fullname-nm').css("color", "red");
                  $('#fullname-nm').html('&#10060; Please enter your fullname');
      
              },500);

              boolname = false;
              
            } else { 
              if (!validName.test(nameVal)) {
      
              $('#fullname-nm').html('<img src="images/loading.gif" height="100" width="100">');  
              window.setTimeout(function(){
              
                  $('#fullname-nm').css("color", "red");
                  $('#fullname-nm').html('&#10060; Invalid naming');
      
              },500);  

              boolname = false;
          
              } else {
      
                  $('#fullname-nm').html('<img src="images/loading.gif" height="100" width="100">');  
                  window.setTimeout(function(){
                  
                      $('#fullname-nm').css("color", "green");
                      $('#fullname-nm').html(' &#10004; Valid name');
          
                  },500);   

                  boolname = true;
        
              }
      
            }
      
      
        
      });

      $("#cell").blur(function() {
        cellVal = $(this).val();
        var validCell = /^([01]|\+88)?\d{11}$/;
  
        if (cellVal .trim() === "" || cellVal  == null) {
          $('#cell-cl').html('<img src="images/loading.gif" height="100" width="100">');  
          window.setTimeout(function(){
          
              $('#cell-cl').css("color", "red");
              $('#cell-cl').html('&#10060; Please enter your cell');
  
          },500);

          boolcell = false;
          
        } else { 
          if (!validCell.test(cellVal)) {
  
          $('#cell-cl').html('<img src="images/loading.gif" height="100" width="100">');  
          window.setTimeout(function(){
          
              $('#cell-cl').css("color", "red");
              $('#cell-cl').html('&#10060; Invalid cell');
  
          },500);  

          boolcell = false;
      
          } else {
  
              $('#cell-cl').html('<img src="images/loading.gif" height="100" width="100">');  
              window.setTimeout(function(){
              
                  $('#cell-cl').css("color", "green");
                  $('#cell-cl').html(' &#10004; Valid cell');
      
              },500);   

              boolcell = true;
    
          }
  
        }
  
  });
   /*
        var emaill = $('#emailVal').val();
        var passs = $('#passVal').val();
        var namee = $('#nameVal').val();
        var celll = $('#cellVal').val();

        var data = "emaill=" + emaill + "&passs=" + passs + "&nameee=" + nameee + "&celll=" + cell ; 
       */
        

  $('#submitbtn').click(function(){
   // $("#submitbtn").attr("disabled", "disabled");
    if(boolemail == false || boolpass == false || boolconpass == false || boolname == false || boolcell == false){
        $('#validationMessage').html('<div class = "alert alert-danger">Please enter proper valid information</div>');
        window.setTimeout(function(){
          
            $('.alert').fadeTo(500 , 0).slideUp(500, function(){
   
             $(this).remove();
   
            });
   
           },1000);   
   
          
    }else{
        $.ajax({
            url: "signupcontroller.php",
            method: "POST",
              data: {
                  emailVal:emailVal, 
                  passVal:passVal , 
                  nameVal:nameVal , 
                  cellVal: cellVal ,  
                } , 
            cache: false,
            success: function(dataResult){
            console.log(data);
              $('#validationMessage').html(data); 	
              window.setTimeout(function(){
                
                window.location.href = window.location.href;
            
            },2000); 
                
            					
                
            }
        });
    }
  });
});