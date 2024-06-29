<!-- Delete Record by single field-->
<h4>Delete Project</h4>
<form id="deleteProjectForm" class="mb-5">
    <div class="mb-3">
        <label for="deleteId" class="form-label">Select Project to Delete</label>
        <!-- <input type="number" class="form-control" id="deleteId" name="id" placeholder="ID" required> -->
        <select name="id" id="deleteId" class="form-control" placeholder="Select project" required type="number">
            <?php 
                foreach($projects as $project){
                    echo '<option value="'.$project['id'].'">'.$project['title'].'</option>';
                }
            ?>
            <p class="text-right">&circ;</p>
         </select>
    </div>
    <button type="submit" class="btn btn-danger">Delete Project</button>
</form>

<!-- Optional: Include Bootstrap JS and Popper.js for interactive components -->