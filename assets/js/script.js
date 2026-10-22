document.getElementById("contact").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent form submission

  // Simulate sending data to the database (replace with your actual code)
  // For demonstration purposes, we'll show the popup immediately
  showPopup();
});

function showPopup() {
  // Display the popup window
  document.getElementById("popup").style.display = "block";

  // Hide the popup after 3 seconds (adjust as needed)
  setTimeout(function() {
    document.getElementById("popup").style.display = "none";
  }, 3000);
}
