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

// Toggle profile dropdown menu
const profileImage = document.getElementById("profileImage");
const profileDropdown = document.getElementById("profileDropdown");

profileImage.addEventListener("click", () => {
    profileDropdown.classList.toggle("hidden");
});

// Close dropdown when clicking outside
document.addEventListener("click", (e) => {
    if (
        !profileImage.contains(e.target) &&
        !profileDropdown.contains(e.target)
    ) {
        profileDropdown.classList.add("hidden");
    }
});
