// Function to fetch car details based on the registration number (VRM)
async function getCarDetails() {
    const registrationNumber = document.getElementById("registration").value.trim();

    if (!registrationNumber) {
        alert("Please enter a valid car registration number.");
        return;
    }

    const apiKey = "2e1b4d62c8e142e04595668ce27c1b06";
    const url = `https://api.checkcardetails.co.uk/vehicledata/ukvehicledata?apikey=${apiKey}&vrm=${registrationNumber}`;

    try {
        const response = await fetch(url);

        if (!response.ok) {
            throw new Error(`Error fetching data: ${response.status}`);
        }

        const carData = await response.json();

        if (!carData || !carData.VehicleRegistration) {
            document.getElementById("car-details").innerHTML =
                `<p style='color: red;'>API Response: ${JSON.stringify(carData)}</p>`;
            return;
        }

        const make = carData.VehicleRegistration.Make || "N/A";
        const model = carData.VehicleRegistration.Model || "N/A";

        // Send data to the server for session storage
        await saveToSession(make, model);

        document.getElementById("car-details").innerHTML = `
            <h2>Car Details:</h2>
            <p><strong>Make:</strong> ${make}</p>
            <p><strong>Model:</strong> ${model}</p>
        `;

    } catch (error) {
        console.error(error);
        document.getElementById("car-details").innerHTML =
            "<p style='color: red;'>Failed to fetch car details. Please try again later.</p>";
    }
}

// Function to send data to the server for session storage
async function saveToSession(make, model) {
    try {
        await fetch('save_to_session.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ make, model })
        });
    } catch (error) {
        console.error("Failed to save data to session:", error);
    }
}


//address fetching
// Function to fetch addresses based on postcode
async function getAddresses(postalCode) {
    alert('hiiiiii',);
    const postcode = document.getElementById("postcode").value.trim();


    // Check if postcode is entered
    if (!postcode) {
        alert("Please enter a valid postcode.");
        return;
    }

    const apiKey = "9XZq0IDOLnXkbrqwf6vSyoSVkG3wkYf5xY51dTQpvNI";
    const url = `https://api.easypostcodes.com/addresses/${postcode || postalCode}`;

    try {
        // Fetch data from API
        const response = await fetch(url, {
            method: 'GET',
            headers: {
                'Key': apiKey
            }
        });

        // Check if the response is OK (status code 200)
        if (!response.ok) {
            throw new Error(`Error fetching data: ${response.status}`);
        }

        // Parse the JSON response
        const addressData = await response.json();

        // Extract the address summary lines
        const addressList = addressData.map(item => item.envelopeAddress.summaryLine);
        console.log(addressList); // For debugging

        // Populate the address options in the dropdown
        populateAddressDropdown(addressList);

    } catch (error) {
        console.error(error);
        document.getElementById("address-details").innerHTML =
            "<p style='color: red;'>Failed to fetch addresses. Please try again later.</p>";
    }
}

// Function to populate the address dropdown
function populateAddressDropdown(addressList) {
    const selectElement = document.getElementById("address-select");

    // Clear any existing options (except the first default option)
    selectElement.innerHTML = '<option value="">Please select an address</option>';

    // Map through the array of addresses and create an option for each address
    addressList.forEach(address => {
        const optionElement = document.createElement("option");
        optionElement.value = address;
        optionElement.textContent = address;
        selectElement.appendChild(optionElement); // Add the option to the select box
    });
}