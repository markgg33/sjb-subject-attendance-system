function changePage(page) {
  // Hide all pages
  document.querySelectorAll(".page-content").forEach(function (pageContent) {
    pageContent.style.display = "none";
  });

  // Show the selected page
  document.getElementById(page + "-page").style.display = "block";
}

// Set the default page to be the dashboard page
document.addEventListener("DOMContentLoaded", function () {
  changePage("dashboard");
});

document.addEventListener("DOMContentLoaded", function () {
  const sidebarItems = document.querySelectorAll(".sidebar-list-item");

  sidebarItems.forEach((item) => {
    item.addEventListener("click", function () {
      // Remove the "active" class from all sidebar items
      sidebarItems.forEach((item) => {
        item.classList.remove("active");
      });

      // Add the "active" class to the clicked sidebar item
      this.classList.add("active");
    });
  });
});
