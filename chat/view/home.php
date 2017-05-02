<?php
//for delete data
if(isset($_GET['did']))
{
    $d = new Database();
    $data = $d->View("student", array("id", $_GET['did']));
    $dt = mysqli_fetch_object($data);

    if($dt->picture)
    {
        unlink("images/profile/profile_{$_GET['did']}.{$dt->picture}");
    }
    if($dt->video)
    {
        unlink("videos/video_{$_GET['did']}.{$dt->video}");
    }
    if(file_exists("files/about_{$_GET['did']}.txt"))
    {
        unlink("files/about_{$_GET['did']}.txt");
    }

    if($data = $d->Delete("student", array("id", $_GET['did'])))
    {
        echo $message = "Delete Successful";
    }
    else
    {
        echo $message = "Some Error Occurs";
    }
}
?>

<div class="container-fluid">
    <div class="row">
        <div class="body col-md-12">
            <div class="title">
                <h3>Read All Data From Database</h3>
            </div>
            
            <div class="data">
                <table class="table table-striped">
                    <thead class="thead-default">
                         <tr>
                            <th>sl.</th>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
<?php 
$d = new Database();
$data = $d->Read("student", array("name", "asc"));

$sl = 1;
while($dt = mysqli_fetch_object($data))
{
?>

                        <tr>
                            <td><?php echo $sl; ?></td>
                            <td><img src="images/profile/profile_<?php echo $dt->id.'.'.$dt->picture; ?>" width="50"></td>
                            <td><?php echo $dt->name; ?></td>
                            <td><?php echo $dt->email; ?></td>
                            <td><?php echo $dt->gender; ?></td>
                            <td><?php echo $dt->age; ?></td>
                            <td><?php echo $dt->contact; ?></td>
                            <td><?php echo $dt->address; ?></td>
                            <td>
                                <a href="index.php?v=view&vid=<?php echo $dt->id; ?>"><i class="fa fa-eye btn-success btn-sm"></i></a>
                                <a href="index.php?v=update&eid=<?php echo $dt->id; ?>"><i class="fa fa-edit btn-info btn-sm"></i></a>
                                <a href="index.php?v=home&did=<?php echo $dt->id; ?>"><i class="fa fa-trash btn-danger btn-sm"></i></a>
                            </td>
                        </tr>
<?php
$sl++;
}

?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>