function openModal(id) {
  const modal = document.getElementById('modal-' + id);
  if (modal) {
    modal.classList.add('active');
  }
}

function closeModal(id) {
  const modal = document.getElementById('modal-' + id);
  if (modal) {
    modal.classList.remove('active');
  }
}

window.addEventListener('click', function (event) {
  const modals = document.querySelectorAll('.modal-overlay');
  modals.forEach(modal => {
    if (event.target === modal) {
      modal.classList.remove('active');
    }
  });
});

document.addEventListener('keydown', function(event) {
  if (event.key === 'Escape') {
    const modals = document.querySelectorAll('.modal-overlay.active');
    modals.forEach(modal => {
      modal.classList.remove('active');
    });
  }
});