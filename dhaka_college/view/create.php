<?php 

//----------------------------------------------------------------------------------
//ekhane code dile $message variable ta error ase why ?
//----------------------------------------------------------------------------------




if(isset($_POST['createStudent'])){

    if(!empty($_POST['name'] && $_POST['email'] && $_POST['password'] && $_POST['gender'] && $_POST['age'] && $_POST['contact'] && $_POST['address']))
    {
        $data = array(
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "password" => $_POST['password'],
            "gender" => $_POST['gender'],
            "age" => $_POST['age'],
            "contact" => $_POST['contact'],
            "address" => $_POST['address']
        );
        
        $d = new Database();
        if($d->Insert("student", $data)){
            echo $message = "Insert Successful";
        }   
        else{
            echo $message = "Server too busy"; 
        }    
    }
    else
    {
        echo $message = "Fill All Data Field";
    }
}


?>



<div class="container-fluid">
    <div class="row">
        <div class="body col-md-12">

            <div class="form col-md-4">
            
            <div class="title">
                <h3>Create Date To Database</h3>
            </div>
                <form action="" method="post">

<!--For Name -->
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>
                    </div>

<!--For Email -->
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <div class="input-group">
                            <span class="input-group-addon">&commat;</span>
                            <input type="email" name="email" placeholder="email" class="form-control">
                        </div>
                    </div>

<!--For Password -->
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" name="password" placeholder="password" class="form-control">
                        </div>
                    </div>

<!--For Gender -->
                    <div class="form-group">
                        <label for="gender">Gender &nbsp;<i class="fa fa-transgender"></i> </label>
                        <div class="input-group">
                            <label class="custom-control custom-radio">
                              <input id="radio1" name="gender" value="male" type="radio" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                              <span class="custom-control-description"><i class="fa fa-male"></i> &nbsp; Male</span>
                            </label>

                            <label class="custom-control custom-radio">
                              <input id="radio1" name="gender" value="female" type="radio" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                              <span class="custom-control-description"><i class="fa fa-female"></i> &nbsp; Female</span>
                            </label>
                        </div>
                    </div>

<!--For Age -->
                    <div class="form-group">
                        <label for="Age">Age</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="number" name="age" placeholder="age" class="form-control">
                        </div>
                    </div>

<!--For Contact -->
                    <div class="form-group">
                        <label for="Contact">Contact</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                            <input type="number" name="contact" placeholder="contact" class="form-control">
                        </div>
                    </div>

<!--For Address -->
                   <div class="form-group">
                        <label for="Address">Address</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                            <textarea class="form-control" name="address" placeholder="Address" rows="3"></textarea>
                        </div>
                    </div>

                    <button type="submit" name="createStudent" class="btn btn-primary btn-lg btn-block">Submit</button>
                </form>

            </div>


        </div>
    </div>
</div>