// *** Modal ***
document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("promoModal")
  const closeBtn = document.getElementById("closeBtn")

  if (!modal) return

  // If modalShown isn't set in localStorage, display the modal
  if (!localStorage.getItem("modalShown")) {
    setTimeout(() => {
      modal.style.display = "block"
    }, 1000) // Show modal after 1 second

    // Set the modalShown flag in localStorage
    localStorage.setItem("modalShown", "true")
  }

  closeBtn.addEventListener("click", function () {
    modal.style.display = "none"
  })

  window.addEventListener("click", function (event) {
    if (event.target === modal) {
      modal.style.display = "none"
    }
  })

  // Close modal with the escape key
  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" && modal.style.display === "block") {
      modal.style.display = "none"
    }
  })
})
// *** End Modal ***

// *** Mobile ***
document.addEventListener("DOMContentLoaded", function () {
  console.log("DOM fully loaded and parsed")

  // Selecting the 'Best Sellers' link and the overlay
  const bestSellersLink = document.querySelector(".best-sellers")
  const booksOverlay = document.querySelector(".books-overlay")

  if (!bestSellersLink || !booksOverlay) {
    console.log("Unable to find the bestSellersLink or booksOverlay elements.")
    return
  } else {
    console.log("bestSellersLink and booksOverlay elements found.")
  }

  // Event listener for 'Best Sellers' link click
  bestSellersLink.addEventListener("click", function (e) {
    e.preventDefault()
    console.log("'Best Sellers' link clicked.")

    if (booksOverlay.style.display === "none" || !booksOverlay.style.display) {
      console.log("Displaying the booksOverlay.")
      booksOverlay.style.display = "block"
    } else {
      console.log("Hiding the booksOverlay.")
      booksOverlay.style.display = "none"
    }
  })

  document.addEventListener("click", function (e) {
    console.log("Document clicked.")

    if (!bestSellersLink.contains(e.target) && !booksOverlay.contains(e.target)) {
      console.log("Click outside the 'Best Sellers' link and booksOverlay.")
      booksOverlay.style.display = "none"
    }
  })
})

// New code for 'strikethrough' link and dbOverlay
const strikethroughLink = document.querySelector(".strikethrough")
const dbOverlay = document.querySelector(".db-overlay")

let dbOverlayTimeout // Declare a variable to hold the timeout ID

// Initially hide the dbOverlay
dbOverlay.style.display = "none"

// New Event listener for 'strikethrough' link click
strikethroughLink.addEventListener("click", function (e) {
  e.preventDefault()
  console.log("'strikethrough' link clicked.")

  clearTimeout(dbOverlayTimeout) // Clear any existing timeout

  if (dbOverlay.style.display === "none" || !dbOverlay.style.display) {
    console.log("Displaying the dbOverlay.")
    dbOverlay.style.display = "flex"

    // Set a timeout to hide the dbOverlay after 1 second
    dbOverlayTimeout = setTimeout(function () {
      console.log("Hiding the dbOverlay after 1.5 seconds.")
      dbOverlay.style.display = "none"
    }, 1000)
  } else {
    console.log("Hiding the dbOverlay.")
    dbOverlay.style.display = "none"
  }
})

// Hide the dbOverlay when clicking outside of it and the link
document.addEventListener("click", function (e) {
  console.log("Document clicked.")

  if (!strikethroughLink.contains(e.target) && !dbOverlay.contains(e.target)) {
    console.log("Click outside the 'strikethrough' link and dbOverlay.")
    clearTimeout(dbOverlayTimeout) // Clear any existing timeout
    dbOverlay.style.display = "none"
  }
})
