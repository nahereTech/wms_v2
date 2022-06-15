<?php
include_once("_common/menu.php"); // menu list
include_once("../gen/_common/header.php"); // header contents
include_once("assets/wms.php"); // header contents

?>

<?php
include_once("../gen/_common/createprofile.php"); // get the general user page
?>     

<script type="text/javascript">
  //declare the mod id for the users.js
  window.adro = 101;
  window.modea=6;
</script>

<script src="../gen/js/createprofile.js?v=4160"></script>
<?php
include_once("../gen/_common/footer.php");
?>
