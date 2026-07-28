<!DOCTYPE html>
<html>

<body>
    <h1>My First PHP Page</h1>
    <?php
    echo "Task 1<br>";

    $length = 10;
    $width = 5;
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "Length = $length <br>";
    echo "Width = $width <br>";
    echo "Area = $area <br>";
    echo "Perimeter = $perimeter <br>";

    echo "<br><br>";


    echo "Task 2<br>";

    $amount = 1000;
    $vat = $amount * 0.15;

    echo "Amount = $amount <br>";
    echo "VAT(15%) = $vat <br>";

    echo "<br><br>";


    echo "Task 3<br>";

    $number = 9;

    if ($number % 2 == 0)
        {
            echo "$number is Even<br>";
        }

        else 
            {
                echo "$number is Odd<br>";
            }
    
            echo "<br><br>";
    
    echo "Task 4<br>";

    $num1 = 10;
    $num2 = 25;
    $num3 = 47;

    if ($num1 >= $num2 && $num1 >= $num3)
        {
            echo "Largest Number = $num1<br>";
        
        }

        elseif ($num2 >= $num1 && $num2 >= $num3)
            {
                echo "Largest Number = $num2<br>";
            }
            else 
                {
                    echo "Largest Number = $num3<br>";
                }

                echo "<br><br>";
    

    echo "Task 5<br>";

    for ($i = 10; $i <= 100; $i++)
        {
            if ($i % 2 != 0)
                {
                    echo $i." ";
                }
        }

    echo "<br><br>";



    echo "Task 6<br>";

    $array = array(10, 15, 20, 25, 30);
    $search = 25;
    $found = false;

    foreach ($array as $value)
        {
            if ($value == $search)
                {
                    $found = true;
                    break;
                }
        }

    if ($found)
        {
            echo "$search found in array<br>";
        }
        else 
            {
                echo "$search not found in array<br>";
            }

            echo "<br><br>";

    echo "Task 7";

    echo "<br><br>";

    for($i=1; $i<=3; $i++)
{
    for($j=1; $j<=$i; $j++)
    {
        echo "* ";
    }
    echo "<br>";
}

echo "<br><br>";
for($i=3; $i>=1; $i--)
{
    for($j=1; $j<=$i; $j++)
    {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<br><br>";

$letter = 'A';                             
 
for ($i = 1; $i <= 3; $i++)
     {
    for ($j = 1; $j <= $i; $j++) 
        {
        echo $letter . " ";
        $letter++;                         
    }
    echo "<br>";
}

    ?>
</body>

</html>