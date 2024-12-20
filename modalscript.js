//first modal
const modal = document.getElementById('modal-are-you-a-motor-trader');
const openModalBtn = document.querySelector('.govuk-summary-list__actions a');
const closeModalBtn = document.getElementById('closeModalBtn');

function openModal() {
    modal.style.display = 'block';
}

function closeModal() {
    modal.style.display = 'none';
}

openModalBtn.addEventListener('click', function (e) {
    e.preventDefault();
    openModal();
});

closeModalBtn.addEventListener('click', function () {
    closeModal();
});

window.addEventListener('click', function (e) {
    if (e.target === modal) {
        closeModal();
    }
});

//second modal
// Get modal element
const vehicleModal = document.getElementById('modal-what-have-you-done-with-your-vehicle');

// Get the button that opens the modal
const openVehicleModalBtn = document.getElementById('changeButton');

// Get the close button inside the modal
const closeVehicleModalBtn = document.getElementById('closeModalBtn2');

// Function to open the vehicle modal
function openVehicleModal() {
    vehicleModal.style.display = 'block'; // Display the modal
    setTimeout(() => {
        vehicleModal.classList.add('show'); // Add show class for animation
    }, 10);
}

// Function to close the vehicle modal
function closeVehicleModal() {
    vehicleModal.classList.add('hide'); // Add hide class for animation
    setTimeout(() => {
        vehicleModal.style.display = 'none'; // Hide the modal after animation
        vehicleModal.classList.remove('hide'); // Reset hide class for future use
    }, 500); // Animation duration (500ms)
}

// Event listener to open the modal
openVehicleModalBtn.addEventListener('click', function (e) {
    e.preventDefault(); // Prevent default link behavior
    openVehicleModal(); // Call the function to open the modal
});

// Event listener to close the modal when clicking the close button
closeVehicleModalBtn.addEventListener('click', function () {
    closeVehicleModal(); // Call the function to close the modal
});

// Event listener to close the modal when clicking outside the modal content
window.addEventListener('click', function (e) {
    if (e.target === vehicleModal) {
        closeVehicleModal(); // Close the modal if the background overlay is clicked
    }
});

// Prevent clicks inside the modal content from closing the modal
vehicleModal.querySelector('.modal-content').addEventListener('click', function (e) {
    e.stopPropagation(); // Prevent click propagation to the modal background
});


//third modal
// Variables for third modal
const modal3 = document.getElementById("modal-how-did-you-sell-your-vehicle");
const openModalBtn3 = document.getElementById("openModalBtn3"); // Ensure this ID matches your trigger button
const closeModalBtn3 = document.getElementById("closeModalBtn3");

// Open modal event
openModalBtn3.addEventListener("click", function () {
    modal3.style.display = "block";
});

// Close modal event
closeModalBtn3.addEventListener("click", function () {
    modal3.style.display = "none";
});

// Close modal when clicking outside the content
window.addEventListener("click", function (event) {
    if (event.target === modal3) {
        modal3.style.display = "none";
    }
});
