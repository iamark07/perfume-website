const header = document.getElementById("header");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("search-box");
const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");
const closeMenu = document.getElementById("close-menu");

// Add scroll effect to header
window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    header.classList.add("bg-gray-900", "shadow-md");
    header.classList.remove("bg-transparent");
  } else {
    header.classList.remove("bg-gray-900", "shadow-md");
    header.classList.add("bg-transparent");
  }
});

// Toggle search box
searchIcon.addEventListener("click", () => {
  searchBox.classList.toggle("opacity-100");
  searchBox.classList.toggle("pointer-events-auto");
  searchBox.classList.toggle("top-20");
});

// Close search box when clicking outside of it
document.addEventListener("click", (event) => {
  const isClickInsideSearchBox = searchBox.contains(event.target);
  const isClickOnSearchIcon = searchIcon.contains(event.target);

  if (!isClickInsideSearchBox && !isClickOnSearchIcon) {
    searchBox.classList.remove("opacity-100", "pointer-events-auto", "top-20");
  }
});

// Toggle mobile menu
menuBtn.addEventListener("click", () => {
  mobileMenu.classList.remove("-translate-x-full");
});

closeMenu.addEventListener("click", () => {
  mobileMenu.classList.add("-translate-x-full");
});



// profile dropdown
const profile_btn = document.getElementById("profile_btn");
const profile_dropdown = document.getElementById("profile_dropdown");

// Toggle search box
profile_btn.addEventListener("click", () => {
  profile_dropdown.classList.toggle("opacity-100");
  profile_dropdown.classList.toggle("pointer-events-auto");
  // profile_dropdown.classList.toggle("top-20");
});

// Close search box when clicking outside of it
document.addEventListener("click", (event) => {
  const isClickInsideprofile_dropdown = profile_dropdown.contains(event.target);
  const isClickOnprofile_btn = profile_btn.contains(event.target);

  if (!isClickInsideprofile_dropdown && !isClickOnprofile_btn) {
    profile_dropdown.classList.remove("opacity-100", "pointer-events-auto");
  }
});