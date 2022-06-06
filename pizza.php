<?php

    //check errors
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // GET AND POST DATA FOR PIZZA FORM
    if(isset($_POST["name"])) { $name = $_POST["name"]; } else { $name = ""; }
    if(isset($_POST["size"])) { $size = $_POST["size"]; } else { $size = ""; }
    if(isset($_POST["pepp"])) { $pepp = $_POST["pepp"]; } else { $pepp = ""; }
    if(isset($_POST["saus"])) { $isau = $_POST["saus"]; } else { $saus = ""; }
    if(isset($_POST["pepr"])) { $mush = $_POST["pepr"]; } else { $pepr = ""; }
    if(isset($_POST["mush"])) { $gppr = $_POST["mush"]; } else { $mush = ""; }

    //reset total amount
    $tot = 0; 

    print "
    <div>
    
        <h2>$name's Order </h2> 
        
            <p>Price</p>";

        
        // display size of pizza and add to total amount
        if($size == "Small") {
            print "Size: Small <br>";
            $tot = $tot + 9.00;
        }
        if($size == "Medium") {
            print "Size: Medium <br>";
            $tot = $tot + 12.00;
        } 
        if($size == "Large") {
            print "Size: Large <br>";
            $tot = $tot + 15.00;
        }
        
        // display toppings and add to total amount
        if($pepp) {
            print "Pepperoni <br>";
            $tot = $tot + 1.00;
        }
        if($saus) {
            print "Sausage <br>";
            $tot = $tot + 1.00;
        }
        if($pepr) {
            print "Peppers <br>";
            $tot = $tot + 1.00;
        }
        if($mush) {
            print "Mushrooms <br>";
            $tot = $tot + 1.00;
        }

        
        $ftot = number_format($tot, 2);
        // prints total
        print "<br>
            <p>Total: $$ftot  </p>
    </div>
</body>
"

?>