function checkAvailability() {
    const location = document.getElementById("location").value;
    const oilType = document.getElementById("oil-type").value;

    fetch(`check_availability.php?location=${location}&oil_type=${oilType}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById("result").innerHTML = `Available: ${data.availability} liters`;
        })
        .catch(error => console.error('Error:', error));
}
