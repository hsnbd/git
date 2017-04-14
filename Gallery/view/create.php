<?php
print("<pre>");
print_r($_FILES);
print("</pre>");

if(isset($_POST['uploadPhoto']))
{
    if(!empty($_POST['caption']))
    {
        if(isset($_FILES) && !empty($_FILES['picture']['name']))
        {
            $ext = strtolower(pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION));
//check if not valid images
            if($ext!="jpg" && $ext!="png" && $ext!="jpeg" && $ext!="gif")
            {
                $ext = "";
            }
        }
        else
        {
            $ext = "";
        }

        $data = array(
            "caption" => $_POST['caption'],
            "picture" => $ext
        );
        
        $d = new Database();
        if($d->Insert("photo_gallery", $data)){
            if($ext)
            {
                move_uploaded_file($_FILES['picture']['tmp_name'], "images/image_{$d->Id}.{$ext}");
            }

            echo $message = "Insert Successful";
        } 
        else
        {
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
            
            <div class="title">
                <h3>Create Date To Database</h3>
            </div>
                <form action="" method="post" enctype="multipart/form-data">

<!--For caption -->
                    <div class="form-group">
                        <label for="caption">caption</label>
                        <div class="input-group">
                            <span class="input-group-addon">&commat;</span>
                            <input type="caption" name="caption" placeholder="caption" class="form-control">
                        </div>
                    </div>
<!--For Pictue -->
                    <div class="form-group">
                        <label for="Profile">Profile Pictue <i class="fa fa-file-picture-o"></i></label>
                        <div class="input-group">
                            <input type="file" name="picture" class="form-control-file" >
                        </div>
                    </div>

                    <button type="submit" name="uploadPhoto" class="btn btn-primary btn-lg btn-block">Upload Photo</button>
                </form>

        </div>
    </div>
</div>