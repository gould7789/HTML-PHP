<pre>
<?php
/*
*
**
***
****
*****
*/


for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= $row; $col++){
        echo "*";
    }
    echo "<br>";
}


/*
    *
   **
  ***
 ****
*****
*/

for ($row = 1; $row <= 5; $row++) {
    for ($blank = 1; $blank <= 5 - $row; $blank++) {
        echo "&nbsp;";
    }

    for ($col = 1; $col <= $row; $col++) {
        echo "*";
    }
    echo "<br>";
}


/*
    *
   ***
  *****
 *******
*********
 *******
  *****
   ***
    *
*/

for ($row = 1; $row <= 5; $row++) {
    for ($blank = 1; $blank <= 5 - $row; $blank++) {
        echo "&nbsp;";
    }

    for ($col = 1; $col <= (2 * $row) - 1; $col++) {
        echo "*";
    }

    echo "<br>";
}

for ($row = 1; $row <= 4; $row++) {
    for ($blank = 1; $blank <= $row; $blank++) {
        echo "&nbsp;";
    }

    for ($col = 1; $col <= (2 * (5 - $row) - 1); $col++) {
        echo "*";
    }

    echo "<br>";
}





?>
</pre>