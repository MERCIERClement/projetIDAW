<?php
    include("db_connect.php");
    $request_method = $_SERVER["GET"];
    switch($request_method)
    {
        case 'GET':
            if(!empty($_GET["id"]))
            {
                $id = intval($_GET["id"]);
                getProducts($id);
            }
            else
            { getProducts();
            }
            break;
        default:
            header("HTTP/1.0 405 Method Not Allowed");
            break;
    }
?>

<?php 
function getAliments()
{
    global $conn;
    $query = "SELECT * FROM aliments";
    $response = array();
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result))
    {
        $response[] = $row;
    }
    return $result;
}
getAliments();
?>
