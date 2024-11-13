// Toggle sidebar visibility on mobile
const menuButton = document.getElementById("menuButton");
const sidebar = document.getElementById("sidebar");
const closeSidebarButton = document.getElementById("closeSidebarButton");

menuButton.addEventListener("click", () => {
    sidebar.classList.toggle("hidden");
});

closeSidebarButton.addEventListener("click", () => {
    sidebar.classList.add("hidden");
});

// Dropdown
const profileImage = document.getElementById("profileImage");
const profileDropdown = document.getElementById("profileDropdown");

    // Toggle profile dropdown menu
    profileImage.addEventListener("click", (e) => {
        e.stopPropagation(); // Prevent the document click from triggering immediately
        profileDropdown.classList.toggle("hidden");
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", (e) => {
        if (!profileImage.contains(e.target) && !profileDropdown.contains(e.target)) {
            profileDropdown.classList.add("hidden");
        }
    });