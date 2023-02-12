document.addEventListener('DOMContentLoaded', () => {
  
    var selection = document.getElementsByClassName("selection")[0];

    function showFilters() {
        selection.style.display = "block";
    }

    function hideFilters() {
        selection.style.display = "none";
      }

    document.getElementById("filtersIcon").addEventListener ("click", showFilters);
    document.getElementById("closeIcon").addEventListener ("click", hideFilters);
});