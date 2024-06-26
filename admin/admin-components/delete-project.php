<!-- Delete Record by single field-->
<h4>Delete Project</h4>
<form id="deleteProjectForm" class="mb-5">
    <div class="mb-3">
        <label for="deleteId" class="form-label">ID</label>
        <input type="number" class="form-control" id="deleteId" name="id" placeholder="ID" required>
    </div>
    <button type="submit" class="btn btn-danger">Delete Project</button>
</form>

<!-- Delete Record by Double field -->
 <h4>Delete Project</h4>
<form id="deleteProjectFormDouble" class="mb-5">
    <div class="mb-3">
        <label for="deleteIdDouble" class="form-label">ID</label>
        <input type="number" class="form-control" id="deleteIdDouble" name="id" placeholder="ID" required>
    </div>
    <div class="mb-3">
        <label for="deleteClientDouble" class="form-label">Client</label>
        <input type="text" class="form-control" id="deleteClientDouble" name="client" placeholder="Client" required>
    </div>
    <button type="submit" class="btn btn-danger">Delete Project</button>
</form>

<script src="./back-end/delete-project-ajax.js"></script>
