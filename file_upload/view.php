
<?php
// Set the HTTP headers
//header('Content-Type: application/pdf');
//header('Content-Disposition: inline; filename="' .$filedata.'"');
//header('Cache-Control: private, max-age=0, must-revalidate');
//header('Pragma: public');

// Output the PDF data
//echo $filedata;
?>


<!--<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Display PDF in HTML</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>
</head>
<body>
  <div id="pdf-viewer"></div>
  <script>
    // Create a new PDF document object
    var pdfDoc = null;
    
    // Load the PDF data
    pdfjsLib.getDocument({data: atob("<?php// echo base64_encode($filedata); ?>")})
      .promise.then(function(pdf) {
        pdfDoc = pdf;
        // Get the first page of the PDF
        return pdf.getPage(1);
      }).then(function(page) {
        // Create a new canvas element to display the page
        var canvas = document.createElement("canvas");
        var ctx = canvas.getContext("2d");
        var viewport = page.getViewport({scale: 1.5});
        canvas.width = viewport.width;
        canvas.height = viewport.height;
        document.getElementById("pdf-viewer").appendChild(canvas);
        // Render the page on the canvas
        page.render({canvasContext: ctx, viewport: viewport});
      });
  </script>
</body>
</html>-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        
      }
      .div1{
        
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php


// $del_id=0;
// $i=0;
require("../db.class.php");
$ob=new db_operations();
// Select the PDF file from the database
$sql = "SELECT invoice_loc FROM tbl_purchase WHERE req_id=1";
$res=$ob->db_read($sql);

// Fetch the BLOB data
//if ($res->num_rows > 0) {
  //$row = $res->fetch_assoc();
 // $filedata = $row["invoice_loc"];

//}
      
      //$sql="SELECT pdf from pdf_file";
      //$query=mysqli_query($conn,$sql);


      while ($info=mysqli_fetch_array($res)) {
        ?>
      <embed type="application/pdf" src="pdf/<?php echo $info['invoice_loc'] ; ?>" width="900" height="500">
    <?php
      }

      ?>

    </div>

  </body>
</html>




