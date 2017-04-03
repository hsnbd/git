<?php 
/****************************************************************************************
*                         ekhane code dile $message variable ta error ase why ?
***************************************************************************************/

if(isset($_POST['update']))
{
print "<pre>";
print_r($_POST);
print "</pre>";

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['gender']) && !empty($_POST['age']) && !empty($_POST['contact']) && !empty($_POST['address']))
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
        if($d->Update("student", $data, array("id", $_GET['eid']))){
            header("Location: index.php?v=home&message=Update Successful");
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

<?php 

if(isset($_GET['eid']))
{
    $d = new Database();
    $data = $d->Edit("student", array("id", $_GET['eid']));
    $dt = mysqli_fetch_object($data);

/****************************************************************************************
*                                                HOW THEY WORK WITHOUT WHILE LOOP
***************************************************************************************/
?>

                <form action="" method="post">

<!--For Name -->
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" name="name" placeholder="Name" value="<?php echo $dt->name; ?>" class="form-control">
                        </div>
                    </div>

<!--For Email -->
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <div class="input-group">
                            <span class="input-group-addon">&commat;</span>
                            <input type="email" name="email" placeholder="email" value="<?php echo $dt->email; ?>" class="form-control">
                        </div>
                    </div>

<!--For Password -->
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" name="password" placeholder="password" value="<?php echo $dt->password; ?>" class="form-control">
                        </div>
                    </div>

<!--For Gender -->
                    <div class="form-group">
                        <label for="gender">Gender &nbsp;<i class="fa fa-transgender"></i> </label>
                        <div class="input-group">
                            <label class="custom-control custom-radio">
                              <input id="radio1" name="gender"  value="male" <?php if($dt->gender == "male"){ echo "checked";} ?> type="radio" class="custom-control-input">
                              <span class="custom-control-indicator"></span>
                              <span class="custom-control-description"><i class="fa fa-male"></i> &nbsp; Male</span>
                            </label>

                            <label class="custom-control custom-radio">
                              <input id="radio1" name="gender" value="female" <?php if($dt->gender == "female"){ echo "checked";} ?>  type="radio" class="custom-control-input">
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
                            <input type="number" name="age" placeholder="age" value="<?php echo $dt->age; ?>" class="form-control">
                        </div>
                    </div>

<!--For Contact -->
                    <div class="form-group">
                        <label for="Contact">Contact</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                            <input type="number" name="contact" placeholder="contact" value="<?php echo $dt->contact; ?>" class="form-control">
                        </div>
                    </div>

<!--For Address -->
                   <div class="form-group">
                        <label for="Address">Address</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                            <textarea class="form-control" name="address" placeholder="Address" rows="3"><?php echo $dt->address; ?></textarea>
                        </div>
                    </div>

                    <button type="submit" name="update" class="btn btn-primary btn-lg btn-block">Update</button>
                </form>
<?php
}
?>
            </div>


        </div>
    </div>
</div>