console.log("My JavaScript file (form/index.js) is being read!");

// To display the other civil status
document.getElementById("civil_status").addEventListener("change", function () {
    var other_civil_status = document.getElementById("other_civil_status");
    var selectedOption = this.value;

    if (selectedOption === "Others") {
        other_civil_status.style.display = "block";
    } else {
        other_civil_status.style.display = "none";
    }
});

// to allow only one checkbox
document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('#checkboxes input[type="checkbox"]');

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            checkboxes.forEach(function(cb) {
                if (cb !== checkbox) {
                    cb.checked = false;
                }
            });
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('#checkboxes2 input[type="checkbox"]');

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            checkboxes.forEach(function(cb) {
                if (cb !== checkbox) {
                    cb.checked = false;
                }
            });
        });
    });
});

// For the country dropdown
document.addEventListener('DOMContentLoaded', function() {
    const countryDropdown = document.getElementById('country');

    // Fetch country data from REST API
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            // Append options for each country
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name.common;
                option.text = country.name.common;
                countryDropdown.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching country data:', error));
});



