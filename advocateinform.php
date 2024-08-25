<?php 
include 'config.php';
if(isset($_POST['data'])){
$data=$_POST['data'];
$sql="SELECT *FROM advocate where adv_aor Like '{$data}%'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
$row=mysqli_fetch_assoc($result);
echo '<div class="col">
        <label for="Docnumber" class="form-label sr-only">Doc Number</label>
        <input type="text" name="advname" placeholder="Document Number" class="form-control" value="' . $row["adv_comno"] . '" required readonly>
    </div>';
   echo '<div class="col">
        <label for="Docnumber" class="form-label sr-only">Doc Number</label>
        <input type="text" name="target" placeholder="Document Number" value="' . $row["adv_city"] . '" class="form-control" required readonly>
    </div>';
    echo '<div class="col">
    <label for="Docnumber" class="form-label sr-only">Doc Number</label>
    <input type="text" name="advid" placeholder="adv_id" value="' . $row["adv_advid"] . '" class="form-control" required readonly>
</div>';
} else {
    echo '<div class="col">
        <label for="Docnumber" class="form-label sr-only">Doc Number</label>
        <input type="text" name="target" placeholder="Data not found" class="form-control" required>
    </div>';
}
}
?>