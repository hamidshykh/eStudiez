
        function validation()
        {

          var Fullname = document.getElementById('Fullname').value;
          var Surname = document.getElementById('Surname').value;
          var FatherName = document.getElementById('FatherName').value;
          var Email = document.getElementById('Email').value;
          var File = document.getElementById('File').value;
          var Cnic_Bform = document.getElementById('Cnic_Bform').value;
          var Country = document.getElementById('Country').value;
          var mobileno = document.getElementById('mobileno').value;
          var Password = document.getElementById('Password').value;
          var RePassword = document.getElementById('RePassword').value;
          var Email2 = document.getElementById('Email2').value;

          
          if(Fullname=="")
          {
            document.getElementById('Fname').innerHTML = "Please fill up the FullName";
            return false;
          }
          if(Surname=="")
          {
            document.getElementById('Sname').innerHTML = "Please fill up the Surname";
            return false;
          }
          if(FatherName=="")
          {
            document.getElementById('FTname').innerHTML = "Please fill up the FatherName";
            return false;
          }          
          if(Email=="")
          {
            document.getElementById('email').innerHTML = "Please fill up the Email";
            return false;
          }

          if(Email.indexOf('@')<=0)
          {
            document.getElementById('email').innerHTML = "Please fill Correct Emaiil Address";
            return false;
          }

          if(Email.charAt(Email.length-4)!='.') 
          {
            document.getElementById('email').innerHTML = "Please fill Correct Emaiil Address";
            return false;
          }

          
          if(Email2=="")
          {
            document.getElementById('email2').innerHTML = "Please fill up the Re-Type Emaiil Address";
            return false;
          }

          if(Email!=Email2) ///aqxswdsxfwwaxfxcf
          {
            document.getElementById('email2').innerHTML = "Password and Re-Type Email Are not match";
            return false;
          }

          if(File=="")
          {
            document.getElementById('file_image').innerHTML = "Please fill up the Image File";
            return false;
          }
          if(Cnic_Bform=="")
          {
            document.getElementById('CBfrom').innerHTML = "Please fill up the CNIC or BForm Number **(Without dashes)";
            return false;
          }
          if(Cnic_Bform.length!=13)
          {
            document.getElementById('CBfrom').innerHTML = "Please inter valid CNIC or BForm Number";
            return false;
          }
          if(Country=="")
          {
            document.getElementById('country').innerHTML = "Please Select the Country";
            return false;
          }
          if(mobileno=="")
          {
            document.getElementById('mobNo').innerHTML = "Please fill up the Mobile";
            return false;
          }
          
          if(isNaN(mobileno))
          {
            document.getElementById('mobNo').innerHTML = "Please fill up the Mobile not Caracters";
            return false;
          }
          if(mobileno.length!=11)
          {
            document.getElementById('mobNo').innerHTML = "Mobile must be 11 digits";
            return false;
          }
          
          if(Password=="")
          {
            document.getElementById('password').innerHTML = "Please fill up the Password";
            return false;
          }

          if((Password.length <= 6) || (Password,length > 20))
          {
            document.getElementById('password').innerHTML = "Password Length must be between 6 to 20";
            return false;
          }

          if(RePassword=="")
          {
            document.getElementById('Rpassword').innerHTML = "Please fill up the Re-Type Password";
            return false;
          }
          
          if(Password!=RePassword)
          {
            document.getElementById('Rpassword').innerHTML = "Password and Re-Type Password Are not match";
            return false;
          }
          
        }