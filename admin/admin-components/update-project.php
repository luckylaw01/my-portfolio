<!-- Update Record with single field-->

<?php 
    // include 'select-project.php';
    $projects = selectAllProjects($conn);
    foreach($projects as $project){
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
?>
 <h4 text-light bg-dark my-2 mx-2>Update By single criteria</h4>
<form id="updateProjectForm" class="mb-5">
    <div class="mb-3">
        <label for="updateId" class="form-label">Select Project to Update</label>
        <!-- <input type="number" class="form-control" id="updateId" name="id" placeholder="ID" required> -->
         <select name="id" id="updateId" class="form-control" placeholder="Select project" required type="number">
            <?php 
                foreach($projects as $project){
                    echo '<option value="'.$project['id'].'">'.$project['title'].'</option>';
                }
            ?>
         </select>
    </div>
    <div class="mb-3">
        <label for="updateTitle" class="form-label">New Title</label>
        <input type="text" class="form-control" id="updateTitle" name="title" placeholder="New Title">
    </div>
    <div class="mb-3">
        <label for="updateDescription" class="form-label">New Description</label>
        <textarea class="form-control" id="updateDescription" name="description" rows="3" placeholder="New Description"></textarea>
    </div>
    <div class="mb-3">
        <label for="updateLink" class="form-label">New Link</label>
        <input type="text" class="form-control" id="updateLink" name="link" placeholder="New Link">
    </div>
    <div class="mb-3">
        <label for="updateImage" class="form-label">New Image URL</label>
        <input type="text" class="form-control" id="updateImage" name="image" placeholder="New Image URL">
    </div>
    <div class="mb-3">
        <label for="updateCategory" class="form-label">New Category</label>
        <input type="text" class="form-control" id="updateCategory" name="category" placeholder="New Category">
    </div>
    <div class="mb-3">
        <label for="updateClient" class="form-label">New Client</label>
        <input type="text" class="form-control" id="updateClient" name="client" placeholder="New Client">
    </div>
    <div class="mb-3">
        <label for="updateProjectDate" class="form-label">New Project Date</label>
        <input type="date" class="form-control" id="updateProjectDate" name="project_date" placeholder="New Project Date">
    </div>
    <div class="mb-3">
        <label for="updateProjectUrl" class="form-label">New Project URL</label>
        <input type="text" class="form-control" id="updateProjectUrl" name="project_url" placeholder="New Project URL">
    </div>
    <button type="submit" class="btn btn-primary">Update Project</button>
</form>

<!-- <h4 text-light bg-dark my-2 mx-2>Update By single criteria</h4> -->
<!-- Update Record with double field -->
<!-- <form id="updateProjectFormDouble" class="mb-5">
    <div class="mb-3">
        <label for="updateIdDouble" class="form-label">ID</label>
        <input type="number" class="form-control" id="updateIdDouble" name="id" placeholder="ID" required>
    </div>
    <div class="mb-3">
        <label for="updateClientDouble" class="form-label">Client</label>
        <input type="text" class="form-control" id="updateClientDouble" name="client" placeholder="Client" required>
    </div>
    <div class="mb-3">
        <label for="updateTitleDouble" class="form-label">New Title</label>
        <input type="text" class="form-control" id="updateTitleDouble" name="title" placeholder="New Title">
    </div>
    <div class="mb-3">
        <label for="updateDescriptionDouble" class="form-label">New Description</label>
        <textarea class="form-control" id="updateDescriptionDouble" name="description" rows="3" placeholder="New Description"></textarea>
    </div>
    <div class="mb-3">
        <label for="updateLinkDouble" class="form-label">New Link</label>
        <input type="text" class="form-control" id="updateLinkDouble" name="link" placeholder="New Link">
    </div>
    <div class="mb-3">
        <label for="updateImageDouble" class="form-label">New Image URL</label>
        <input type="text" class="form-control" id="updateImageDouble" name="image" placeholder="New Image URL">
    </div>
    <div class="mb-3">
        <label for="updateCategoryDouble" class="form-label">New Category</label>
        <input type="text" class="form-control" id="updateCategoryDouble" name="category" placeholder="New Category">
    </div>
    <div class="mb-3">
        <label for="updateProjectDateDouble" class="form-label">New Project Date</label>
        <input type="date" class="form-control" id="updateProjectDateDouble" name="project_date" placeholder="New Project Date">
    </div>
    <div class="mb-3">
        <label for="updateProjectUrlDouble" class="form-label">New Project URL</label>
        <input type="text" class="form-control" id="updateProjectUrlDouble" name="project_url" placeholder="New Project URL">
    </div>
    <button type="submit" class="btn btn-primary">Update Project</button>
</form> -->

<script src="update-project-ajax.js"></script>