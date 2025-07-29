function openModal(id) {
  const card = document.querySelector(`[data-id="${id}"]`);
  if (!card) return;

  const img = card.querySelector('img').src;
  const title = card.querySelector('h3').innerText;
  const desc = card.querySelector('p').innerText;

  document.getElementById('modalImage').src = img;
  document.getElementById('modalTitle').innerText = title;
  document.getElementById('modalDesc').innerText = desc;
  sessionStorage.setItem('selectedItem', id);

  document.getElementById('modal').style.display = 'block';
}

function closeModal() {
  document.getElementById('modal').style.display = 'none';
}

function filterMenu(category) {
  const items = document.querySelectorAll('.menu-item');
  items.forEach(item => {
    item.style.display = (category === 'all' || item.classList.contains(category)) ? 'block' : 'none';
  });
}

function searchMenu() {
  const input = document.getElementById('searchInput').value.toLowerCase();
  const items = document.querySelectorAll('.menu-item');
  items.forEach(item => {
    const title = item.querySelector('h3').innerText.toLowerCase();
    const desc = item.querySelector('p').innerText.toLowerCase();
    item.style.display = (title.includes(input) || desc.includes(input)) ? 'block' : 'none';
  });
}

function orderNowItem(itemId) {
  if (typeof isLoggedIn !== 'undefined' && isLoggedIn) {
    window.location.href = 'order.php?item=' + encodeURIComponent(itemId);
  } else {
    window.location.href = 'login.php';
  }
}
