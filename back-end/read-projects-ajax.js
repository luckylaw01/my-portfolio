function readProjects() {
    const data = {
        action: 'read',
        table: 'projects'
    };
    ajaxRequest('POST', '../back-end/select.php', data, function(response) {
        const projectsDiv = document.getElementById('projects');
        projectsDiv.innerHTML = JSON.stringify(response, null, 2);
    });
}

