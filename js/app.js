$(function( $ ){

   $("#result1").hide();
  //image preview
  $('#imgpreview').hide();
  $('#file').change(function () {
    var file =this.files[0];
    
    if(file)
    {
      var reader = new FileReader();
      reader.onload =function(event){
      
        $('#imgpreview').show().attr('src',event.target.result);
      }
      reader.readAsDataURL(file);
    }
  });

  //Show password
  $("#close").hide();
    $("#open").click(function()
  {
    $("#open").hide();
    $("#close").show();
    $("#password").attr("type","text");
    $("#cpassword").attr("type","text");
  });

  $("#close").click(function(){
    $("#close").hide();
    $("#open").show();
    $("#password").attr("type","password");
     $("#cpassword").attr("type","password");
  });
  

    //Jquery on submit validation
  $('#first_form').submit(function(e) {
    e.preventDefault();
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var cpassword = $('#cpassword').val();
    var address = $('#address').val();
    var accept = $("input[id='accept']:checked").val();
    var city = $('#city').val();
    var male = document.getElementById("gendermale");
    var female = document.getElementById("genderfemale");
    var file = document.getElementById("file");
    var hobbies  = [];
      $('.hobby_class').each(function (){
        if($(this).is(":checked"))
        {
          hobbies.push($(this).val());
        }
      });
      hobbies = hobbies.toString();
    var error = "";
    var f_pattern = /^[a-zA-Z\s]+$/;
    var e_pattern = /^\S+@\S+\.\S+$/;
    var pass_pattern = /^[A-Za-z]\w{8,15}$/;
    $(".error").remove();

    //validation for firstname
    if (firstname =='')
    {
      error++;
      $('#firstname').after('<span class="error text-danger">First Name is required</span>');
    }
    else if(!f_pattern.test(firstname))
    {
      error++;
      $('#firstname').after('<span class="error text-danger">Name Must be alphabet</span>'); 
    }


    //validation for lastname
    if (lastname =='') 
    {
      error++;
      $('#lastname').after('<span class="error text-danger">Last Name is required</span>');
    }
    else if(!f_pattern.test(lastname))
    {
      error++;
      $('#lastname').after('<span class="error text-danger">Name Must be alphabet</span>'); 
    }

    //validation for email
    if (email =='')
    {
      error++;
      $('#email').after('<span class="error text-danger">Email is required</span>');
    }
    else if(!e_pattern.test(email)) 
    {   
      error++;
      $('#email').after('<span class="error text-danger">Enter a valid email</span>');
    } 

    //validation for password
    if (password =='')
    {
      error++;
      $('#password').after('<span class="error text-danger">Password is required</span>');
    }
    else if(!pass_pattern.test(password))
    {
      error++;
      $('#password').after('<span class="error text-danger">contain only characters, numeric digits, underscore and first character must be a letter with 8 to 15 characters</span>');
    }

    //validation for confirm password
    if (cpassword =='')
    {
      error++;
      $('#cpassword').after('<span class="error text-danger">Confirm Password is required</span>');
    }
    else if(cpassword !== password)
    { 
      error++;
      $('#cpassword').after('<span class="error text-danger">Password and Confirm Password does not match</span>');
    }

    //validation for address
    if (address =='')
    {
      error++;
      $('#address').after('<span class="error text-danger">Address is required</span>');
    }
   
    //validation for gender
    if((male.checked == false) && (female.checked == false))
    { 
      error++;
        $('#genderlabel').after('<span class="error text-danger">Select Gender</span>');
    }    
    if(male.checked == true)
    {
      var gen1=male.value;
    }
    else
    {
       var gen1=female.value;

    } 

    //validation for city
    if (city == 'Select')
    {
      error++;
      $('#city').after('<span class="error text-danger">Please Select city is required</span>');
    }
   
   //validation for hobby
    if(!hobbies.length > 0)
    {
      error++;
      $('#hobbylabel').after('<span class="error text-danger">Please select at least one hobby</span>');

    }
  if(file.files.length != 0 )
    {
        var file_name = file.files[0].name;
        var file_size = file.files[0].size;
        var file_type = file.files[0].type;
      
        if(file_type!="image/png" && file_type!="image/jpeg" && file_type!="image/gif" && file_type!="image/jfif")
        {
            error++;
          $('#photolabel').after('<span class="error text-danger">Invalid file type. Allow only JPG, JPEG and  PNG format</span>');
        }
 
        if(file_size > 3*1024*1024)
        {
           error++;
        $('#photolabel').after('<span class="error text-danger">File too large. File must be less than 3MB</span>');
        }
 
    }
    else if(!file.files.length !=0)
    {
        error++;
        $('#photolabel').after('<span class="error text-danger">Please Choose Photo</span>');
    }

    if(error>0)
    {

      return false;
    }
   
  var formData = new FormData(first_form);
  
 // formData.append("firstname",firstname);
 // formData.append("lastname",lastname);
 // formData.append("email",email);
 // formData.append("password",password);
 // formData.append("cpassword",cpassword);
 // formData.append("address",address);
 // formData.append("gender", gen1); 
 // formData.append("city",city);
 // formData.append("hobbies",hobbies);
 // formData.append("file",file.files[0]);
 // formData.append("accept",accept);
  $.ajax
    ({
        url:'submit.php',
        method:'POST',
        data:formData,  
        processData: false,
        contentType: false,     
        success:function(data)
        {      
             //console.log(data);
            //alert("Record Add Successfully");
             $("#result1").show();
        }
    });
        //done:function(data)
        // {
        //     //console.log(data);
        //     alert(data);
        // }
    
  });

});