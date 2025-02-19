const header = document.getElementById("header");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("search-box");

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

const menuBtn = document.getElementById("menu-btn");
const closeMenu = document.getElementById("close-menu");
const mobileMenu = document.getElementById("mobile-menu");
const closeMenuBtn = document.getElementById("close-menu");
const mobileLanguageDropdownContainer = document.getElementById(
    "mobile-language-dropdown-container"
);
const mobileLanguageBtn = document.getElementById("mobile-language-btn");
const mobileLanguageDropdown = document.getElementById(
    "mobile-language-dropdown"
);
const lang_dropdown_arrow = document.getElementById("lang_dropdown_arrow");

// // Toggle mobile menu
menuBtn.addEventListener("click", () => {
    mobileMenu.classList.remove("-translate-x-full");
});
closeMenuBtn.addEventListener("click", () => {
    mobileMenu.classList.add("-translate-x-full");
});

// Mobile Language Dropdown
mobileLanguageBtn.addEventListener("click", () => {
    mobileLanguageDropdown.classList.toggle("hidden");
    mobileLanguageDropdown.classList.toggle("pointer-events-none");
    lang_dropdown_arrow.classList.toggle("ri-arrow-down-s-line");
    lang_dropdown_arrow.classList.toggle("ri-arrow-up-s-line");
});

// Close mobile menu if clicked outside (on the overlay)
mobileMenu.addEventListener("click", (event) => {
    if (event.target === mobileMenu) {
        // Check if the click is directly on the overlay
        mobileMenu.classList.add("-translate-x-full");
    }
});

// Close dropdowns if clicked outside
window.addEventListener("click", (event) => {
    if (
        !mobileLanguageBtn.contains(event.target) &&
        !mobileLanguageDropdown.contains(event.target)
    ) {
        mobileLanguageDropdown.classList.add("hidden");
        mobileLanguageDropdown.classList.add("pointer-events-none");
    }
});

// profile dropdown
const profileBtn = document.getElementById("profile_btn");
const profileDropdown = document.getElementById("profile_dropdown");

profileBtn.addEventListener("click", () => {
    profileDropdown.classList.toggle("opacity-0");
    profileDropdown.classList.toggle("pointer-events-none");
});

const languageDropdownContainer = document.getElementById(
    "language_dropdown_container"
);
const languageBtn = document.getElementById("language_btn");
const languageDropdown = document.getElementById("language_dropdown");

languageBtn.addEventListener("click", () => {
    languageDropdown.classList.toggle("opacity-0");
    languageDropdown.classList.toggle("pointer-events-none");
    languageDropdown.classList.toggle("hidden"); // Toggle the 'hidden' class
});

// Close dropdowns if clicked outside
window.addEventListener("click", (event) => {
    if (
        !profileBtn.contains(event.target) &&
        !profileDropdown.contains(event.target)
    ) {
        profileDropdown.classList.add("opacity-0");
        profileDropdown.classList.add("pointer-events-none");
    }
    if (
        !languageBtn.contains(event.target) &&
        !languageDropdown.contains(event.target)
    ) {
        languageDropdown.classList.add("opacity-0");
        languageDropdown.classList.add("pointer-events-none");
        languageDropdown.classList.add("hidden");
    }
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
