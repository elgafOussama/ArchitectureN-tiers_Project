<?php require_once("../conn.php"); ?>
<table  id="example" class="table table table-striped table-hover dt-responsive display" cellspacing="0">
    <thead>
        <tr>
            <th>#</th>
            <th>Nom Ev</th>
            <th>Date</th>
            <th>Adresse</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="trBody">
        <?php
            // select query execution
            $sql = "SELECT * FROM events";
            if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['idEvents'] . "</td>";
                            echo "<td>" . $row['nom'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['adresse'] . "</td>";
                            echo '<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs Mod" data-title="Edit" data-toggle="modal" data-target="#edit" >Select</button></p></td>';
                        echo "</tr>";
                    }
                    // Free result set
                    mysqli_free_result($result);
                } else{
                    echo "No records matching your query were found.";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
             
            // Close connection
            mysqli_close($link);
            ?>
    </tbody>
</table>