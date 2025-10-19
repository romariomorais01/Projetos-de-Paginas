<html>

<head>
<title> Boocamp Desenvolvedor net. Página de teste </title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style type ="text/css">
.linha {
font-weight: bold;
color: blue;
padding-left: 15px;
line-height: 50px;
}
</style>
</head>

<body>

<?php

for ( $i = 0; $i < 10; $i++ ) {
    print("<span class= \"linha\" > Linha número " . $i . "</span> <br />");
}
?>

</body>

<script type= "text/javascript">
$(document).ready(function () {
    $(".linha").hide().fadeIn(1000); // 1000 milissegundos = 1 segundo
});
</script>

</html>