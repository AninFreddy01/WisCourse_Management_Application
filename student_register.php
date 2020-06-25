<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport"content="width=device-width, initial-scale=1"><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Student registration</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css"rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
      <script src=" https://oss.maxcdn.com /html5shiv/3.7.2 /html5shiv.min.js"></script>
      <script src=" https://oss.maxcdn.com /respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <style>
    .me{
        width:35%;
    }
    .space {
          padding-left: 70%;
    }
    
    .size {
          font-size: 100px;
    
    }
    .wis{
         background-color:#DAA520;
    }
   
</style>

    </head>
    <body>
     <header>
       <div class="navbar navbar-default wis" >
         <div class="container">
           <div class="navbar-header">
             
            <a href="" class="navbar-brand" style="color:white;">WISCOURSE</a>
           </div>
         </div>

       </div>
 </header>
        <div class="container">
        <ul class="nav nav-tabs">
          <li class="active"><a href="index.html" data-toggle="tab">Home</a></li>
          <li><a href="#Home" data-toggle="tab">Contact</a></li>
          <li><a href="#Home" data-toggle="tab">About</a></li>
            <li class="space"><a href="LogIn.html" class="btn btn-info">Log In</a></li>
            
        </ul>

        
      </div>
   
     <br>

      <div class="container" >
      <div class="col-sm-4 " >
       <h4><b>Student Registration Form</b></h4>

      <p>Please fill in the form with all required details<br>
      User must enter his/her given index number.<br>
      Also users are rquired to have an email address.</p>
      </div>
       <div class="col-sm-2">

      </div>

      <div class="col-sm-6 well">
          
          <form>
            <div class="form-group row">
              <label class="col-sm-2 form-control-label">Firstname</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="" placeholder="first name">
              </div>
              <label class="col-sm-2 form-control-label">Lastname</label>
              <div class="col-sm-4">
                <input type="name" class="form-control" id="" placeholder="last name">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 form-control-label">Othernames</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="" placeholder="other names">
              </div>
              </div>
              <div class="form-group row">
              <label class="col-sm-2 form-control-label">IndexNo.</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="" placeholder="WIUC/xx/xxxx">
              </div>
              <label class="col-sm-2 form-control-label">Gender</label>
              <div class="col-sm-4">
                <select class="form-control">
                  <option>select gender</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 form-control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="" placeholder="email address">
              </div>
              </div>
              <div class="form-group row">
              <label class="col-sm-2 form-control-label">Password</label>
              <div class="col-sm-4">
                <input type="password" class="form-control" id="" placeholder="password">
              </div>
              <label class="col-sm-2 form-control-label">Confirm Password</label>
              <div class="col-sm-4">
                <input type="password" class="form-control" id="" placeholder="password">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 form-control-label">Current Level</label>
              <div class="col-sm-4">
                <select class="form-control">
                  <option>select level</option>
                   <option>100L</option>
                    <option>100U</option>
                     <option>200L</option>
                      <option>200U</option>
                       <option>300L</option>
                        <option>300U</option>
                         <option>400L</option>
                          <option>400U</option>
                </select>
              </div>
              <label class="col-sm-2 form-control-label">Campus</label>
              <div class="col-sm-4">
                <select class="form-control">
                  <option>select campus</option>
                  <option>Day main-campus</option>
                  <option>Evening main-campus</option>
                  <option>city-campus</option>

                </select>
             </div>
             </div>
              <div class="form-group row">
              <label class="col-sm-2 form-control-label">Programme</label>
              <div class="col-sm-10">
                <select class="form-control">
                  <option>select programme</option>
                  <option>WCOM</option>
                  <option>BMS</option>
                  <option>BBS</option>
                </select>
              </div>
              </div>

               <br>
              <button type="submit" class=" btn btn-info">Submit</button>
              <button type="cancel" class=" btn btn-info">cancel</button>
          </form>
          

      </div>
      </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=" https://ajax.googleapis.com /ajax/libs/jquery/1.11.3 /jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
