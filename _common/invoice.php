<?php
include("_common/header.php");
?>
<style type="text/css">
	body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
</style>

<page size="A4"></page>
<page size="A4"></page>


<?php
include_once("_common/footer.php");
?>