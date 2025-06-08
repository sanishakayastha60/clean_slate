<?php
$a=10;
$b=5;
?>
<html>
    <head></head>
    <body>
        <h3>Arithmetic Operator</h3>
        <table>
            <tr>
                <th>Operator</th>
                <th>Description</th>
                <th>Example</th>
            </tr>
            <tr>
                <td>+</td>
                <td>Addition</td>
                <td><?php echo "$a+$b=". $a+$b?></td>
            </tr>
            <tr>
                <td>-</td>
                <td>Subtraction</td>
                <td><?php echo "$a-$b=". $a-$b?></td>
            </tr>
            <tr>
                <td>*</td>
                <td>Multiplication</td>
                <td><?php echo "$a*$b=". $a*$b?></td>
            </tr>
            <tr>
                <td>/</td>
                <td>Division</td>
                <td><?php echo "$a/$b=". $a/$b?></td>
            </tr>
            <tr>
                <td>%</td>
                <td>Modulus</td>
                <td><?php echo "$a%$b=". $a%$b?></td>
            </tr>
            <tr>
                <td>++</td>
                <td>Increment</td>
                <td><?php echo "++$a=". ++$a?></td>
            </tr>
            <tr>
                <td>--</td>
                <td>Decrement</td>
                <td><?php echo "--$b=". --$b?></td>
            </tr>
        </table>
        <h3>Comparison Operator</h3>
        <table>
            <tr>
                <th>Operator</th>
                <th>Description</th>
                <th>Example</th>
            </tr>
            <tr>
                <td>==</td>
                <td>Equals to</td>
                <td><?php echo "$a==$b(".($a==$b).")"?></td>
            </tr>
            <tr>
                <td>===</td>
                <td>Identical (equal and same type)</td>
                <td><?php echo "$a===$b(".($a===$b).")"?></td>
            </tr>
            <tr>
                <td>!=</td>
                <td>Not equal to</td>
                <td><?php echo "$a!=$b(".($a!=$b).")"?></td>
            </tr>
            <tr>
                <td>></td>
                <td>Greater than</td>
                <td><?php echo "$a>$b(".($a>$b).")"?></td>
            </tr>
            <tr>
                <td><</td>
                <td>Less than</td>
                <td><?php echo "$a<$b(".($a<$b).")"?></td>
            </tr>
            <tr>
                <td>>=</td>
                <td>Greater than or equal to</td>
                <td><?php echo "$a>=$b(".($a>=$b).")"?></td>
            </tr>
            <tr>
                <td><=</td>
                <td>Less than or equal to</td>
                <td><?php echo "$a<=$b(".($a<=$b).")"?></td>
            </tr>
        </table>
        <h3>Logical Operator</h3>
        <table>
            <tr>
                <th>Operator</th>
                <th>Description</th>
                <th>Example</th>
            </tr>
            <tr>
                <td>&&</td>
                <td>AND</td>
                <td><?php echo "1&&1(".(1&&1).")"?></td>
            </tr>
            <tr>
                <td>||</td>
                <td>OR</td>
                <td><?php echo "1||0(".(1||0).")"?></td>
            </tr>
            <tr>
                <td>!</td>
                <td>NOT</td>
                <td><?php echo "!1(".(!1).")"?></td>
            </tr>
        </table>
    </body>
</html>