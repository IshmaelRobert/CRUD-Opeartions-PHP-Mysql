<?php
include "crud3con.php";


$id=$_GET["id"];
$delete=mysqli_query($conn,"DELETE FROM `crud3` WHERE id=$id");
?>
<script type="text/javascript">
window.location="htmlt.php";
</script>