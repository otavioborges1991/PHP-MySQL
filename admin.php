<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
<?php
if ($_SESSION['tipo']=='admin') {
    echo 
        "<td>
            <i class='fa-solid fa-square-plus'></i>
            <i class='fa-solid fa-file-pen'></i>
            <i class='fa-solid fa-square-minus'></i>
        </td>";
} else if ($_SESSION["tipo"]=="editor") {
    echo 
        "<td>
            <i class='fa-solid fa-file-pen'></i>
        </td>";
}