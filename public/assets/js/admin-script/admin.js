// Toggle mobile menu

const menuBtn = document.getElementById("admin-menu-btn");
const mobileMenu = document.getElementById("admin-mob-nav");
menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("left-0");
});

document.addEventListener('DOMContentLoaded', () => {
    const searchBtn = document.getElementById('admin-search-btn');
    const searchBar = document.getElementById('search-bar');
    const body = document.body;

    // Toggle search bar on search icon click
    searchBtn.addEventListener('click', (event) => {
        event.stopPropagation(); // Prevent click event from propagating to body
        searchBar.classList.toggle('hidden');
        searchBar.classList.toggle('flex');
    });

    // Hide search bar when clicking anywhere else
    body.addEventListener('click', () => {
        if (!searchBar.classList.contains('hidden')) {
            searchBar.classList.add('hidden');
            searchBar.classList.remove('flex');
        }
    });

    // Prevent hiding when clicking inside the search bar
    searchBar.addEventListener('click', (event) => {
        event.stopPropagation();
    });
})

// Get today's date in Y-m-d format

// Initialize flatpickr with the current date as the default
flatpickr("#dateRangePicker", {
    mode: "range",
    dateFormat: "Y-m-d", // Use Y-m-d format
});