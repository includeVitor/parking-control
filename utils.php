<script src="libs\jquery\jquery-3.3.1.min.js"></script>
<script src="libs\jquery\jquery.form.min.js"></script>
<script src="\parking-control\libs\boostrap\js\bootstrap.min.js"></script>
<?php

$getUrl = strip_tags(trim(filter_input(INPUT_GET,'url',FILTER_DEFAULT)));
$setUrl = (empty($getUrl)? 'index': $getUrl);
$Url = explode('/',$setUrl);



?>