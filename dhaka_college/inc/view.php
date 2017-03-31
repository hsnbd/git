
<div class="container-fluid">
    <div class="row">
        <div class="body col-md-12">
            <div class="title">
                <h3>View Student</h3>
            </div>
            
 
<?php
/****************************************************************************************
*                         col-md-4 not working
***************************************************************************************/
if(isset($_GET['vid']))
{
$d = new Database();
$data = $d->View("student", array("id", $_GET['vid']));

while($dt = mysqli_fetch_object($data))
{
?>
           <div class="data">
                <div class="col-md-4" style="float: left;">
                    <img class="img-thumbnail" src="image/thumb.png" alt="Thumbnail image"><br /><br /><br />
                    <a class="btn-danger btn-lg" href="index.php?v=home&did=<?php echo $dt->id; ?>">Delete Student <i class="fa fa-trash"></i></a>
                </div>
                <div class="col-md-6" style="float: left;">
                    <ul class="list-group">
                        <li class="list-group-item"><span class="font-weight-bold">Name: &nbsp;</span><?php echo $dt->name; ?></li>
                        <li class="list-group-item"><span class="font-weight-bold">Email: &nbsp;</span><?php echo $dt->email; ?></li>
                        <li class="list-group-item"><span class="font-weight-bold">Gender: &nbsp;</span><?php echo $dt->gender; ?></li>
                        <li class="list-group-item"><span class="font-weight-bold">Age: &nbsp;</span><?php echo $dt->age; ?></li>
                        <li class="list-group-item"><span class="font-weight-bold">Contact: &nbsp;</span><?php echo $dt->contact; ?></li>
                        <li class="list-group-item"><span class="font-weight-bold">Address: &nbsp;</span><?php echo $dt->address; ?></li>
                    </ul>
                </div>
            </div>
<?php
}
}
?>

        </div>
    </div>
</div>