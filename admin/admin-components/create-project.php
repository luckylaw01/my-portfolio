<h4>Create Poject</h4>

<form id="createProjectForm" class="mb-5">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description" required></textarea>
    </div>
    <div class="mb-3">
        <label for="link" class="form-label">Link</label>
        <input type="text" class="form-control" id="link" name="link" placeholder="Link" required>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image URL</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Image URL" required>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input type="text" class="form-control" id="category" name="category" placeholder="Category" required>
    </div>
    <div class="mb-3">
        <label for="client" class="form-label">Client</label>
        <input type="text" class="form-control" id="client" name="client" placeholder="Client" required>
    </div>
    <div class="mb-3">
        <label for="project_date" class="form-label">Project Date</label>
        <input type="date" class="form-control" id="project_date" name="project_date" placeholder="Project Date" required>
    </div>
    <div class="mb-3">
        <label for="project_url" class="form-label">Project URL</label>
        <input type="text" class="form-control" id="project_url" name="project_url" placeholder="Project URL" required>
    </div>
    <button type="submit" class="btn btn-primary">Create Project</button>
</form>

