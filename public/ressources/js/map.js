const mapUp = () => {
    let city = document.getElementById('address').value
    var requestOptions = {
        method: 'GET',
    };
    fetch(`https://api.geoapify.com/v1/geocode/search?text=${city}&apiKey=a203d55a7a1f46cda1aef5ce6655c14c`,
            requestOptions)
        .then(response => response.json())
        .then(result => {

            document.getElementById('latitude').value = result.features[0].geometry.coordinates[1]
            document.getElementById('longitude').value = result.features[0].geometry.coordinates[0]
            document.getElementById('here').innerHTML = `<div id="map"></div>`
            let here = document.getElementById('here');
            here.classList.remove("hidden")

            var map = L.map('map').setView([result.features[0].geometry.coordinates[1], result.features[0]
                .geometry.coordinates[0]
            ], 12);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            L.marker([result.features[0].geometry.coordinates[1], result.features[0].geometry.coordinates[
                    0]]).addTo(map)
                .bindPopup('The search :')
                .openPopup();
        })
        .catch(error => {
            console.log('error', error)
            document.getElementById('pipoupi').innerText = "Street not found"
        });
}