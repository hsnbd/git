<!-- <?php
//for delete data
// if(isset($_GET['did']))
// {
//     $d = new Database();
//     $data = $d->View("photo_gallery", array("id", $_GET['did']));
//     $dt = mysqli_fetch_object($data);

//         unlink("images/image_{$_GET['did']}.{$dt->picture}");
// }
?>-->


<div class="container-fluid">
           <div class="title">
                <h3>Read All Data From Database</h3>
            </div>
    <div class="row">
            <div class="col-md-12">
                    <div class="row">
                           

<?php
$d    = new Database();
$data = $d->Read("photo_gallery", array("id", "asc"));

while ($dt = mysqli_fetch_object($data)) {
	?>
                <div class="col-md-2">
                       <div class="card image-card">
                            <img class="card-img-top" src="images/image_<?php echo $dt->id.'.'.$dt->picture;?>"  alt="<?php echo $dt->caption;?>" width="100%">

                            <div class="card-img-overlay">
                                    <p><?php echo $dt->caption;?></p>
                          </div>
                                     <p><?php echo $dt->caption;?></p>
                       </div> 
                </div>
	<?php
}

?>

                    </div>
            </div>
    </div>
</div>