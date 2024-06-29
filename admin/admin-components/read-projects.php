<!-- Use Bootstrap table to display the projects -->
<table class="table table-striped table-hover table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Link</th>
            <th>Image</th>
            <th>Category</th>
            <th>Client</th>
            <th>Last Updated</th>
            <th>Updated URL</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'select-project.php'; // Include the file that contains the function 'selectAllProjects()
            // Ensure $conn is your database connection variable
            if ($conn->connect_error) {
                echo "No db connection";
                die(json_encode(['error' => $conn->connect_error]));
            } else {
                $projects = selectAllProjects($conn);
                foreach($projects as $project){
                    echo '<tr>';
                    echo '<td>'.$project['id'].'</td>';
                    echo '<td>'.$project['title'].'</td>';
                    echo '<td>'.$project['description'].'</td>';
                    echo '<td>'.$project['link'].'</td>';
                    echo '<td>'.$project['image'].'</td>';
                    echo '<td>'.$project['category'].'</td>';
                    echo '<td>'.$project['client'].'</td>';
                    echo '<td>'.$project['project_date'].'</td>';
                    echo '<td>'.$project['project_url'].'</td>';
                    echo '<td><button class="btn btn-primary">Edit</button> <button class="btn btn-danger">Delete</button></td>';
                    echo '</tr>';
                }
            }
        ?>
    </tbody>
</table>

<!-- Optional: Include Bootstrap JS and Popper.js for interactive components -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

