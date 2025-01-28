const header = document.getElementById("header");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("search-box");
const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");
const closeMenu = document.getElementById("close-menu");
const heroImages = document.querySelectorAll(".hero-image");
let currentImageIndex = 0;

// Image carousel functionality
function changeHeroImage() {
    heroImages[currentImageIndex].classList.remove("opacity-100");
    heroImages[currentImageIndex].classList.add("opacity-0");

    currentImageIndex = (currentImageIndex + 1) % heroImages.length;
    heroImages[currentImageIndex].classList.remove("opacity-0");
    heroImages[currentImageIndex].classList.add("opacity-100");
}

setInterval(changeHeroImage, 6000); // Change image every 6 seconds

// Add scroll effect to header
window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        header.classList.add("shadow-md");
    } else {
        header.classList.remove("shadow-md");
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
        searchBox.classList.remove(
            "opacity-100",
            "pointer-events-auto",
            "top-20"
        );
    }
});

// Toggle mobile menu
menuBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("-translate-x-full");
});

closeMenu.addEventListener("click", () => {
    mobileMenu.classList.add("-translate-x-full");
});

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
    const isClickInsideprofile_dropdown = profile_dropdown.contains(
        event.target
    );
    const isClickOnprofile_btn = profile_btn.contains(event.target);

    if (!isClickInsideprofile_dropdown && !isClickOnprofile_btn) {
        profile_dropdown.classList.remove("opacity-100", "pointer-events-auto");
    }
});

// Get references to the elements
const sortButton = document.getElementById("sortButton");
const sortOptions = document.getElementById("sortOptions");
const filterButton = document.getElementById("filterButton");
const filterOptions = document.getElementById("filterOptions");
const priceRange = document.getElementById("priceRange");
const currentPrice = document.getElementById("currentPrice");

// Toggle filter options visibility
filterButton.addEventListener("click", (event) => {
    event.stopPropagation(); // Prevent the click from propagating to the window
    const isVisible = !filterOptions.classList.contains("opacity-0");
    hideAllDropdowns(); // Hide all dropdowns first
    if (!isVisible) {
        filterOptions.classList.remove("opacity-0", "pointer-events-none");
        filterOptions.classList.add("opacity-100", "pointer-events-auto");
    }
});

// Toggle sort options visibility
sortButton.addEventListener("click", (event) => {
    event.stopPropagation(); // Prevent the click from propagating to the window
    const isVisible = !sortOptions.classList.contains("opacity-0");
    hideAllDropdowns(); // Hide all dropdowns first
    if (!isVisible) {
        sortOptions.classList.remove("opacity-0", "pointer-events-none");
        sortOptions.classList.add("opacity-100", "pointer-events-auto");
    }
});

// Update price range dynamically
priceRange.addEventListener("input", (event) => {
    currentPrice.textContent = `₹${event.target.value}`;
});

// Close dropdowns when clicking outside
window.addEventListener("click", () => {
    hideAllDropdowns();
});

// Utility function to hide all dropdowns
function hideAllDropdowns() {
    filterOptions.classList.add("opacity-0", "pointer-events-none");
    filterOptions.classList.remove("opacity-100", "pointer-events-auto");

    sortOptions.classList.add("opacity-0", "pointer-events-none");
    sortOptions.classList.remove("opacity-100", "pointer-events-auto");
}

// gallery section
const modal = document.getElementById("imageModal");
const carouselImages = document.querySelectorAll(".carousel-image");
let currentImageIndex2 = 0;

function openModal(index) {
  currentImageIndex2 = index;
    showImage(currentImageIndex2);
    modal.style.opacity = 1;
    modal.style.pointerEvents = "auto";
}

function closeModal() {
    modal.style.opacity = 0;
    modal.style.pointerEvents = "none";
}

function showImage(index) {
    carouselImages.forEach((img, i) => {
        img.style.opacity = i === index ? 1 : 0;
    });
}

function nextSlide() {
  currentImageIndex2 = (currentImageIndex2 + 1) % carouselImages.length;
    showImage(currentImageIndex2);
}

function prevSlide() {
  currentImageIndex2 =
        (currentImageIndex2 - 1 + carouselImages.length) % carouselImages.length;
    showImage(currentImageIndex2);
}

modal.addEventListener('click', function(event) {
  if (event.target === modal) { // Check if the click target is the modal backdrop
      closeModal();
  }
});