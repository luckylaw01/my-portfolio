<?php
    // include '../../back-end/db-connect.php';
    if ($conn->connect_error) {
        echo "No db connection";
        die(json_encode(['error' => $conn->connect_error]));
    }
    else{
        
    function selectAllProjects($conn){
        $sql = "SELECT * FROM projects";
        $result = mysqli_query($conn, $sql);

        $rowCount = mysqli_num_rows($result);
        if($rowCount <= 0){
            echo 'No projects found';
        }
        else{
            while ($row = mysqli_fetch_assoc($result)){
                $data[] = $row; 
            }
        }
        return $data;
    }

    $projects = selectAllProjects($conn);
    foreach($projects as $project){
        // echo '<option value="'.$project['id'].'">'.$project['title'].'</option>';
        $project_id = $project['id'];
        $project_title = $project['title'];
        $project_description = $project['description'];
        $project_link = $project['link'];
        $project_image = $project['image'];
        $project_category = $project['category'];
        $project_client = $project['client'];
        $project_last_updated = $project['project_date'];
        $project_url = $project['project_url'];
    }
    }

    function selectProjectByField($conn, $field, $value){
        $sql = "SELECT * FROM projects WHERE $field = '$value'";
        $result = mysqli_query($conn, $sql);

        $rowCount = mysqli_num_rows($result);
        if($rowCount <= 0){
            echo 'No projects found';
        }
        else{
            while ($row = mysqli_fetch_assoc($result)){
                $data[] = $row; 
            }
        }
        return $data;
    }
?>
