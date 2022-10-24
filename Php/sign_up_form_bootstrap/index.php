<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       #dob{
        display: flex;
        align-items: center;
        justify-content: space-around;
       }
       .same{
        display: flex;
        align-items: flex-end;
        justify-content: center;
       }
       .container{
        display: flex;
        align-items: center;
        justify-content: center;
       }
       .form-group{
        margin: 20px 0px 20px 0px;
       }
       h1{
        text-align: center;
        padding: 20px;
       }
    </style>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
      
        <form enctype='multipart/form-data' class="col-sm-10" action="act.php" method="POST" name="signUp_form">
            <h1>Sign Up</h1>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" id="email" name="email" class="form-control"  placeholder="Enter E-mail">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <input type="tel" name="phone" id="phone" class="form-control"  placeholder="Enter Number">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                    <input type="password" name="pword" value="" id="pword" class="form-control"  placeholder="Enter password">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Date Of Birth</label>
                <div class="col-sm-10" id="dob">
                    <div class="col-sm-4">
                      <select id="bday" class="form-select" name="date_of_birth:day" tabindex="7">
                            <option value="">
                                Day
                            </option>
                            <?php
                                for($i = 1; $i <= 31; $i++){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                }
                            ?>


                      </select>
                    </div>
                    <div class="col-sm-4">
                        <select id="bmonth" name="date_of_birth:mon" tabindex="8" class="form-select">
                            <option value="">
                                Month
                            </option>
                            <?php
                                for($i = 1; $i <= 12; $i++){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select id="byear" name="date_of_birth:year" tabindex="9" class="form-select">
                            <option value="">
                                    Year
                            </option>
                            <?php
                                for($i = 1960; $i <= 2010; $i++){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">gender</label>
                <div class="col-sm-10">
                    <input type="radio" value="male" id="male" name="gender" class="col-sm-1">Male
                    <input type="radio" value="female" id="female" name="gender" class="col-sm-1">Felmale
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <textarea id="address" name="address" class="w-100" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group row same"> 
                <div class="col-sm-4 ">
                    Same as above<input onchange="newAddd()" type="checkbox" id="sameAdd"> 
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Permanent Address</label>
                <div class="col-sm-10">
                    <textarea name="newAdd" id="newAddress" cols="27" rows="4" class="w-100"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">course</label>
                <div class="col-sm-10">
                    <input type="checkbox" id="crs1" value="html" name="course[]" class="row-sm-3 checkBoxClass">Html
                    <input type="checkbox" id="crs2" value="css" name="course[]" class="row-sm-3 checkBoxClass">Css
                    <input type="checkbox" id="crs3" value="JavaScript" name="course[]" class="row-sm-3 checkBoxClass">JavaScript
                    <input type="checkbox" id="ckbCheckAll" style="margin:0px 0px 0px 60px;"  class="row-sm-3">Select all
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">image</label>
                <div class="col-sm-4">
                    <input type="file" name="file" id="file">
                </div>
            </div>





            <div class="form-group row">
                <div class="col-sm-4 offset-sm-4">
                    <input id="submitBtn" onclick="return validate(this)" type="submit" class="btn btn-primary" value="Sign-in">
                </div>
            </div>
            
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <!-- jquery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>
        // validation
function validate(){
   
   
   var name = document.getElementById("name");
   var email = document.getElementById("email");
   var phone = document.getElementById("phone");
   var pword = document.getElementById("pword");
   var bday = document.getElementById("bday");
   var bmonth = document.getElementById("bmonth");
   var byear = document.getElementById("byear");
   var address = document.getElementById("address");
   var newAddress = document.getElementById("newAddress");

   var gender = document.signUp_form.gender; 
   var file = document.getElementById('file')




   if(name.value == ''){
      alert('Please Enter Name');
      name.focus()
      return false
   }
   else if(email.value == ''){
      alert('Please Enter Email')
      email.focus()
      return false
   }
   else if(phone.value == ''){
      alert('Please Enter Phone Number')
      phone.focus()
      return false
   }
   else if(pword.value == ''){
      alert('Please Enter a Password')
      pword.focus()
      return false
   }
   else if(bday.value == ''){
      alert('Please Enter a Birth Date')
      bday.focus()
      return false
   }
   else if(bmonth.value == ''){
      alert('Please Enter a Birth Month')
      bmonth.focus()
      return false
   }
   else if(byear.value == ''){
      alert('Please Enter a Birth Year')
      byear.focus()
      return false
   }
   else if(gender.value.length == 0){
      alert('plaease Chose Your Gender')
      return false
   }
   else if(address.value == ''){
      alert('Please Enter a Address')
      address.focus()
      return false
   }
   else if(newAddress.value == ''){
      alert('Please Enter a Permanent Address')
      newAddress.focus()
      return false
   }
   else if(file.value == ''){
      alert('Please insert a file')
   }
}






// address box
function newAddd() {
   var newAddress = document.getElementById('newAddress'); 
   var address = document.getElementById('address');
   var addCheck = document.getElementById('sameAdd')



   if (addCheck.checked) {
      newAddress.value = address.value
   }
   else {
      newAddress.value = ''
   }
}











// select all

$("#ckbCheckAll").click(function () {
      $(".checkBoxClass").prop('checked', $(this).prop('checked'));
});

$(".checkBoxClass").change(function(){
   if (!$(this).prop("checked")){
      $("#ckbCheckAll").prop("checked",false);
   }
   if($('#crs1').prop("checked") && 
      $('#crs2').prop("checked") &&
      $('#crs3').prop("checked")){
      $("#ckbCheckAll").prop("checked",true);

   }
});




   
  








    </script>

</body>
</html>







