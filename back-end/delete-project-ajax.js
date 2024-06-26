document.getElementById('deleteProjectForm').onsubmit = function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    const data = {
        action: 'deleteSingle',
        table: 'projects',
        field: 'id',
        value: formData.get('id')
    };
    ajaxRequest('POST', '../back-end/select.php', data, function(response) {
        console.log(response);
        alert('Project deleted successfully');
    });
};

document.getElementById('deleteProjectFormDouble').onsubmit = function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    const data = {
        action: 'deleteDouble',
        table: 'projects',
        field1: 'id',
        value1: formData.get('id'),
        field2: 'client',
        value2: formData.get('client')
    };
    ajaxRequest('POST', '../back-end/select.php', data, function(response) {
        console.log(response);
        alert('Project deleted successfully');
    });
};
