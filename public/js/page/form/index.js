console.log("My JavaScript file (form/index.js) is being read!");

document.getElementById("civil_status").addEventListener("change", function () {
    var other_civil_status = document.getElementById("other_civil_status");
    var selectedOption = this.value;

    if (selectedOption === "others") {
        other_civil_status.style.display = "block";
    } else {
        other_civil_status.style.display = "none";
    }
});


// For the additional checkbox
const FilipinoCheckbox = document.getElementById("FilipinoCheckbox");
const DualCitizenshipCheckbox = document.getElementById(
    "DualCitizenshipCheckbox"
);

// Add event listeners to the checkboxes
FilipinoCheckbox.addEventListener("change", function () {
    if (FilipinoCheckbox.checked) {
        document.getElementById("AdditionalCheckbox").style.display = "block";
    } else {
        document.getElementById("AdditionalCheckbox").style.display = "none";
    }
});

DualCitizenshipCheckbox.addEventListener("change", function () {
    if (DualCitizenshipCheckbox.checked) {
        document.getElementById("AdditionalCheckbox").style.display = "block";
    } else {
        document.getElementById("AdditionalCheckbox").style.display = "none";
    }
});


// For the country dropdown
const countryDropdown = document.getElementById("country");

// Fetch data from REST Countries API
fetch("https://restcountries.com/v3.1/all")
  .then(response => response.json())
  .then(data => {
    // Extract country names from the data
    const countryNames = data.map(country => country.name.common);

    // Populate the dropdown with country names
    countryNames.forEach(country => {
      const option = document.createElement("option");
      option.text = country;
      countryDropdown.add(option);
    });
  })
  .catch(error => {
    console.error("Error fetching country data:", error);
  });
