document.getElementById('updateProjectForm').onsubmit = function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    const data = {
        action: 'updateSingle',
        table: 'projects',
        field: 'id',
        value: formData.get('id')
    };
    formData.forEach((value, key) => {
        if (key !== 'id') data['data[' + key + ']'] = value;
    });
    ajaxRequest('POST', '../back-end/select.php', data, function(response) {
        console.log(response);
        alert('Project updated successfully');
    });
};

document.getElementById('updateProjectFormDouble').onsubmit = function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    const data = {
        action: 'updateDouble',
        table: 'projects',
        field1: 'id',
        value1: formData.get('id'),
        field2: 'client',
        value2: formData.get('client')
    };
    formData.forEach((value, key) => {
        if (key !== 'id' && key !== 'client') data['data[' + key + ']'] = value;
    });
    ajaxRequest('POST', '../back-end/select.php', data, function(response) {
        console.log(response);
        alert('Project updated successfully');
    });
};
