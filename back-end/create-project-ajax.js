const createPojectForm = document.getElementById('createProjectForm');
createPojectForm.onsubmit = function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    const data = {
        action: 'create',
        table: 'projects'
    };
    formData.forEach((value, key) => data['data[' + key + ']'] = value);
    ajaxRequest('POST', '../back-end/select.php', data, function(response) {
        console.log(response);
        alert('Project created successfully');
    });
};
