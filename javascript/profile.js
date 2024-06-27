// Get references to elements
const addButton = document.getElementById('edit-button');
const addForm = document.getElementById('edit-form');

console.log('addButton:', addButton);
console.log('addForm:', addForm);

// Function to toggle the visibility of the edit form
function toggleEditForm() {
  console.log('toggleEditForm called');
  addForm.style.display = (addForm.style.display === 'none') ? 'block' : 'none';
}

// Attach the event listener to the button
addButton.addEventListener('click', toggleEditForm);