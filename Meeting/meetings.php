<?php 
    include('./layouts/header.php'); 

    $sql = "SELECT * FROM meetings";
    $conn = connectdb();
    $result = $conn->query($sql);
?>
<br>
<div class="container p-3">
    <div class="row pt-4">
        <div class="col-6">
            <h2 class="text-primary">List of Meetings</h2>
        </div>
        <div class="col-6 text-end">
            <a type="button" class="btn btn-info" href="./Meeting/create.php">
                <i class="bi bi-plus-circle"></i> &nbsp; Create New Meeting
            </a>
        </div>
    </div>
    <br/>

    <table class="table table-bordered table-striped" style="width:100%">
        <thead>
            <tr>
                <th>
                    Subject 
                </th>
                <th>
                    Date of Meeting
                </th>
                <th>
                    Status
                </th>

            </tr>
        </thead>
        <tbody>  
            <tr>
            <?php 
            while($row = $result->fetch_assoc()) 
            {
            ?>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["date"]; ?></td>
                <td><?php echo $row["status"]; ?></td>
                <td> 
                    <div class="w-75 btn-group" role="group">
                            <a class="btn btn-primary mx-2"><i class="bi bi-plus-square"></i>&nbsp; Details</a>
                            <a class="btn btn-secondary mx-2"> <i class="bi bi-pencil-square"></i>&nbsp; Edit</a>
                            <a class="btn btn-danger mx-2"><i class="bi bi-trash"></i>&nbsp; Delete</a>
                    </div>
                </td>
                </tr>
            <?php 
              }
            ?> 
        </tbody>
        
    </table>
    <!-- <a class="btn btn-secondary" style="width:150px">Back</a> -->
</div>
    
<?php include('./layouts/footer.php'); ?>