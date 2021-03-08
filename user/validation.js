$(document).ready(function() {
    $("#email").blur(function() {
      var emailVal = $(this).val();
      var valid = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

      if (emailVal.trim() === "" || emailVal == null) {
        $('#email-e').html('<img src="images/loading.gif" height="100" width="100">');  
        window.setTimeout(function(){
        
            $('#email-e').css("color", "red");
            $('#email-e').html('&#10060; Please enter your email');

        },500);
        
      } else { 
        if (!valid.test(emailVal)) {

        $('#email-e').html('<img src="images/loading.gif" height="100" width="100">');  
        window.setTimeout(function(){
        
            $('#email-e').css("color", "red");
            $('#email-e').html('&#10060; Invalid email address');

        },500);  
    
        } else {

            $('#email-e').html('<img src="images/loading.gif" height="100" width="100">');  
            window.setTimeout(function(){
            
                $('#email-e').css("color", "green");
                $('#email-e').html('&#10004; Valid email address');
    
            },500);   
  
        }

      }


  
});


        $("#password").blur(function() {

            var passVal = $(this).val();  

            if (passVal.trim() === "" || passVal == null) {
                $('#password-p').html('<img src="images/loading.gif" height="100" width="100">');  
                window.setTimeout(function(){
                
                    $('#password-p').css("color", "red");
                    $('#password-p').html('&#10060; Please enter your password');
        
                },500);
                
              }
            else if(passVal.length < 5){

                $('#password-p').html('<img src="images/loading.gif" height="100" width="100">');  
                window.setTimeout(function(){
                
                    $('#password-p').css("color", "red");
                    $('#password-p').html('&#10060; Your password length must be greater than 5 character');
        
                },500); 
                
            }else{

                $('#password-p').html('<img src="images/loading.gif" height="100" width="100">');  
                window.setTimeout(function(){
                
                 $('#password-p').css("color", "green");
                 $('#password-p').html(' &#10004; Valid password');
        
                },500);   


            }


        });

        $("#confirmPass").blur(function() {

            var confirmpassVal = $(this).val();  
            var validpass =  $('#password').val();  

            if (confirmpassVal .trim() === "" || confirmpassVal  == null) {
                $('#cpassword-p').html('<img src="images/loading.gif" height="100" width="100">');  
                window.setTimeout(function(){
                
                    $('#cpassword-p').css("color", "red");
                    $('#cpassword-p').html('&#10060; Please enter the confirm password');
        
                },500);
                
            }

               else if((confirmpassVal != validpass)  && (confirmpassVal.length<5)){

                    $('#cpassword-p').html('<img src="images/loading.gif" height="100" width="100">');  
                    window.setTimeout(function(){
                    
                        $('#cpassword-p').css("color", "red");
                        $('#cpassword-p').html('&#10060; password not matched');
            
                    },500); 
                    
                }else{
    
                    $('#cpassword-p').html('<img src="images/loading.gif" height="100" width="100">');  
                    window.setTimeout(function(){
                    
                        $('#cpassword-p').css("color", "green");
                        $('#cpassword-p').html('&#10004; password matched');
            
                    },500); 
    
    
                }
            


        });

        $("#name").blur(function() {
            var nameVal = $(this).val();
            var validName = /^[a-zA-Z ]+$/;
      
            if (nameVal .trim() === "" || nameVal  == null) {
              $('#fullname-nm').html('<img src="images/loading.gif" height="100" width="100">');  
              window.setTimeout(function(){
              
                  $('#fullname-nm').css("color", "red");
                  $('#fullname-nm').html('&#10060; Please enter your fullname');
      
              },500);
              
            } else { 
              if (!validName.test(nameVal)) {
      
              $('#fullname-nm').html('<img src="images/loading.gif" height="100" width="100">');  
              window.setTimeout(function(){
              
                  $('#fullname-nm').css("color", "red");
                  $('#fullname-nm').html('&#10060; Invalid naming');
      
              },500);  
          
              } else {
      
                  $('#fullname-nm').html('<img src="images/loading.gif" height="100" width="100">');  
                  window.setTimeout(function(){
                  
                      $('#fullname-nm').css("color", "green");
                      $('#fullname-nm').html(' &#10004; Valid name');
          
                  },500);   
        
              }
      
            }
      
      
        
      });



      
      $("#cell").blur(function() {
        var cellVal = $(this).val();
        var validCell = /^([01]|\+88)?\d{11}$/;
  
        if (cellVal .trim() === "" || cellVal  == null) {
          $('#cell-cl').html('<img src="images/loading.gif" height="100" width="100">');  
          window.setTimeout(function(){
          
              $('#cell-cl').css("color", "red");
              $('#cell-cl').html('&#10060; Please enter your cell');
  
          },500);
          
        } else { 
          if (!validCell.test(cellVal)) {
  
          $('#cell-cl').html('<img src="images/loading.gif" height="100" width="100">');  
          window.setTimeout(function(){
          
              $('#cell-cl').css("color", "red");
              $('#cell-cl').html('&#10060; Invalid cell');
  
          },500);  
      
          } else {
  
              $('#cell-cl').html('<img src="images/loading.gif" height="100" width="100">');  
              window.setTimeout(function(){
              
                  $('#cell-cl').css("color", "green");
                  $('#cell-cl').html(' &#10004; Valid cell');
      
              },500);   
    
          }
  
        }
  
  
    
  });





});