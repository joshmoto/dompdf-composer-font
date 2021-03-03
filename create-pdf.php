<?php

// load our composer autoloader
require 'vendor/autoload.php';

// use dom pdf
use Dompdf\Dompdf;
use Dompdf\Options;

$pdf = new Dompdf();
$options = new Options();
$options->set(array(
    'isRemoteEnabled' => true
));

// get our quote template partial and pass data to it
ob_start();

?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="dist/css/pdf.css">
    </head>
    <body>
        <h1><i class="fa fa-stack-overflow"></i> stackoverflow</h1>
    </body>
</html>
<?php

// output html on page
//$html = ob_get_clean();
//echo $html;
//exit;

// generate our PDF from our html
$pdf = new Dompdf($options);
$pdf->loadHtml($html = ob_get_clean());
$pdf->setPaper('A4','portrait');
$pdf->render();
$pdf->stream("codex",["Attachment" => 0]);