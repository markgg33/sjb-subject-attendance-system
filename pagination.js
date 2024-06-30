document.addEventListener("DOMContentLoaded", function () {
  const rows = document.querySelectorAll("#studentTableBody tr");
  const rowsPerPage = 10;
  let currentPage = 1;

  function displayRows() {
    const filteredRows = Array.from(rows).filter(
      (row) => row.style.display !== "none"
    );
    const start = (currentPage - 1) * rowsPerPage;
    const end = start + rowsPerPage;

    filteredRows.forEach((row, index) => {
      row.style.display = index >= start && index < end ? "" : "none";
    });

    updatePagination(filteredRows.length);
  }

  function updatePagination(filteredRowCount) {
    const totalPages = Math.ceil(filteredRowCount / rowsPerPage);
    const prevPage = document.getElementById("prevPage");
    const nextPage = document.getElementById("nextPage");

    // Show or hide the Previous button
    prevPage.parentElement.style.display = currentPage === 1 ? "none" : "";

    // Show or hide the Next button
    nextPage.parentElement.style.display =
      currentPage === totalPages ? "none" : "";

    // If only one page, hide pagination
    if (totalPages <= 1) {
      prevPage.parentElement.style.display = "none";
      nextPage.parentElement.style.display = "none";
    }
  }

  function searchAndFilter() {
    const searchTerm = document
      .getElementById("searchInput")
      .value.toLowerCase();
    const courseFilter = document
      .getElementById("courseFilter")
      .value.toLowerCase();
    const yearFilter = document
      .getElementById("yearFilter")
      .value.toLowerCase();

    rows.forEach((row) => {
      const cells = row.querySelectorAll("td");
      const matchesSearch =
        searchTerm === "" ||
        Array.from(cells).some((cell) =>
          cell.innerText.toLowerCase().includes(searchTerm)
        );
      const matchesCourse =
        courseFilter === "" ||
        cells[4].innerText.toLowerCase() === courseFilter;
      const matchesYear =
        yearFilter === "" || cells[5].innerText.toLowerCase() === yearFilter;

      if (matchesSearch && matchesCourse && matchesYear) {
        row.style.display = "";
      } else {
        row.style.display = "none";
      }
    });

    currentPage = 1; // Reset to the first page after filter
    displayRows();
  }

  document
    .getElementById("searchButton")
    .addEventListener("click", function () {
      searchAndFilter();
    });

  document.getElementById("searchInput").addEventListener("keyup", function () {
    searchAndFilter();
  });

  document
    .getElementById("courseFilter")
    .addEventListener("change", function () {
      searchAndFilter();
    });

  document.getElementById("yearFilter").addEventListener("change", function () {
    searchAndFilter();
  });

  document.getElementById("prevPage").addEventListener("click", function (e) {
    e.preventDefault();
    if (currentPage > 1) {
      currentPage--;
      displayRows();
    }
  });

  document.getElementById("nextPage").addEventListener("click", function (e) {
    e.preventDefault();
    const filteredRowCount = Array.from(rows).filter(
      (row) => row.style.display !== "none"
    ).length;
    const totalPages = Math.ceil(filteredRowCount / rowsPerPage);
    if (currentPage < totalPages) {
      currentPage++;
      displayRows();
    }
  });

  displayRows();
});
