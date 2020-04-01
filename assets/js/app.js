// smooth scroll
const aboutScroll = new SmoothScroll('.learn-more[href*="#about"]', { speed: 1000 });
const specialsScroll = new SmoothScroll('.specials[href*="#specials"]', { speed: 1000 });
const galleryScroll = new SmoothScroll('.gallery[href*="#gallery"]', { speed: 1000 });
const contactScroll = new SmoothScroll('.contact[href*="#contact"]', { speed: 1000 });

// toggle menu
const toggle = document.querySelector('.toggle');
const nav = document.querySelector('.main-nav');
toggle.addEventListener('click', () => {
  nav.classList.toggle('active');
});

// search bar
const searchBar = document.querySelector('#searchbar');
searchBar.addEventListener('keyup', function(e) {
  const term = e.target.value.toUpperCase();
  const items = document.getElementsByClassName('product-item');

  Array.from(items).forEach(function(item) {
    const itemInfos = document.getElementsByClassName('product-info');
    Array.from(itemInfos).forEach(function(itemInfo) {
      const title = itemInfo.firstElementChild.textContent;

      if (title.toUpperCase().indexOf(term) !=-1) {
        itemInfo.style.display = 'block';
      } else {
        itemInfo.style.display = 'none';
      }
    });
  });
});