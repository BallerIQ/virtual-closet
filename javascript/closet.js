// Get references to elements
const addButton = document.getElementById('add-button');
const addForm = document.getElementById('add-form');

// Function to toggle the visibility of the edit form
function toggleEditForm() {
  addForm.style.display = (addForm.style.display === 'none') ? 'block' : 'none';
}
addButton.addEventListener('click', toggleEditForm);
