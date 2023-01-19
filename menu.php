<?php
include_once('header\footer/header.php');
include_once('config.php');
?>

<a href='#'>Setari cont</a>
<table class="tbMenu">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Allergies</th>
        <th>Dietary Restrictions</th>
    </tr>
<?php
        $query = "SELECT * FROM menu";
        //execute the query
        $result = mysqli_query($conn, $query);
        //iterate through the data
        while($row = mysqli_fetch_array($result)) {
            //create the HTML elements
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['allergies'] . "</td>";
            echo "<td>" . $row['dietary_restrictions'] . "</td>";
            echo "</tr>";
        }
    //close the database connection
    mysqli_close($conn);
?>
</table>

<?php
include('header\footer/footer.php');
?>
