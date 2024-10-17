// Sample portfolio items
const portfolioItems = [
  {
    image:
      "https://i.pinimg.com/enabled_hi/564x/64/ce/aa/64ceaa6f4e4524db4790ede22d4259ac.jpg",
    title: "Project 1",
  },
  {
    image:
      "https://i.pinimg.com/736x/f4/c4/17/f4c4176fe0a147f6e541ba7e1e5c8a7e.jpg",
    title: "Project 2",
  },
  {
    image:
      "https://i.pinimg.com/enabled_hi/736x/b4/e9/2f/b4e92f48f0c262af2a37b3a9c8d2350d.jpg",
    title: "Project 3",
  },
  {
    image:
      "https://i.pinimg.com/enabled_hi/736x/cb/e4/8c/cbe48c8b821d78db2201ded58e442e55.jpg",
    title: "Project 4",
  },
];

// Function to create portfolio items
function createPortfolioItems() {
  const portfolioGrid = document.querySelector(".portfolio-grid");
  portfolioItems.forEach((item) => {
    const portfolioItem = document.createElement("div");
    portfolioItem.className = "col-md-4 portfolio-item";
    portfolioItem.innerHTML = `
      <div class="card">
        <img src="${item.image}" class="card-img-top" alt="${item.title}">
        <div class="card-body">
          <h5 class="card-title">${item.title}</h5>
        </div>
      </div>
    `;
    portfolioGrid.appendChild(portfolioItem);
  });
}

// Function to handle smooth scrolling
function smoothScroll(target) {
  const element = document.querySelector(target);
  window.scrollTo({
    top: element.offsetTop - 80,
    behavior: 'smooth'
  });
}

// Event listeners
document.addEventListener('DOMContentLoaded', () => {
  createPortfolioItems();

  // Smooth scrolling for navigation links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      smoothScroll(this.getAttribute('href'));
    });
  });

  // Form submission
  const form = document.querySelector('.contact-form');
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    alert('Thank you for your message! We will get back to you soon.');
    form.reset();
  });
});
