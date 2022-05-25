import './bootstrap';
import './order';
import './leaflet';

// Register Radios
document.getElementById('person_radio').onclick = function () {
    document.getElementById('company_name').style.display = 'none'
    document.getElementById('customer_id').innerHTML = 'პირადი ნომერი'
}

document.getElementById('company_radio').onclick = function () {
    document.getElementById('company_name').style.display = 'flex'
    document.getElementById('customer_id').innerHTML = 'საიდენტიფიკაციო ნომერი'
    document.getElementById('customer_last').innerHTML = 'დირექტორის გვარი'
    document.getElementById('customer_name').innerHTML = 'დირექტორის სახელი'
}
// flash message

setTimeout(() => {
    document.getElementById('message').style.opacity = 0
    document.getElementById('message').style.right = "-300px"
}, 2000);


// Map
let map = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(map);

