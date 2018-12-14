
<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Orders Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
<script src="jquery/jquery.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="js/bootstrap.js"></script> 
</head>

<body>
   
        <div class="container">
                <h1 class="text-center">Order Form</h1>

        <form method="POST" id = "regForm" name="regForm">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>firstname: <input type="text" id="firstname" class="form-control">
                            </p>                            
                        </div>
                    </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>Lastname: <input type="text" id="lastname" class="form-control">
                                </div>
                            </div>
                                
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Email: <input type="email" class="form-control" id="email">
                        </div>    
                    </div>
                        <div class="row">
                            <div class="col-sm-12 pb-2">
                                <p>     
                                <label for="gender">Gender:</label>
                                <input type="radio" name="gender" value="male" id="male">  
                                <label for="male">Male:</label>
                                <input type="radio" name="gender" value="female" id="female">
                                <label for="female">Female:</label>
                                </p>                            
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-6">
                          <p> Phone no:          <input type="number" class="form-control" id="phoneno" > 
                        </div>
                     </div>
                <div class="row">
                    <div class="col-sm-6">
                      <p> Address:      <input type="text" class="form-control" id="address">
                    </div>
                </div>
                    <div class="row">
                        <div class="col-sm-6">
                           <p> Bus-stop: <input type="text" class="form-control" id="bus-stop" >
                        </div>
                    </div>
                            
                <div class="row">
                    <div class="col-sm-4">
                            <p> Menu name <input type="text" class="form-control" id="menu-name">
                    </div>
                </div>
                     <div>
                            <button type="submit" class="btn btn-primary mt-3 mb-3">Order</button>
                            </form> 
                      </div> 
                
</body>
</html>