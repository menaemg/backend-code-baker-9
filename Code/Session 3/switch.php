<?php

$ch = "rrr";

if ($ch == "BCA") {
    echo "BCA is 3 years course";
} elseif ($ch == "Bsc") {
    echo "Bsc is 3 years course";
} elseif ($ch == "B.Tech") {
    echo "B.Tech is 4 years course";
} elseif ($ch == "B.Arch") {
    echo "B.Arch is 5 years course";
} else {
    echo "Wrong Choice ";
}

?>


<?php

echo "<br>";
echo "<br>";
echo "<br>";

$ch = "B.Tech";
switch ($ch) {
    case "BCA":
        echo "BCA is 3 years course";
        break;
    case "Bsc":
        echo "Bsc is 3 years course";
        break;
    case "B.Tech":

        echo "B.Tech is 4 years course";

        break;
    case "B.Arch":
        echo "B.Arch is 5 years course";
        break;
    default:
        echo "Wrong Choice";
        break;
}
?>   