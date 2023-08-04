if(document.querySelector('#mapa')) {

    const lat = -0.2123923
    const lng = -78.4906545
    const zoom = 16

    const map = L.map('mapa').setView([lat, lng], zoom);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lat, lng]).addTo(map)
        .bindPopup(`
            <h2 class="mapa__heading">Conferencias EPN</h2>
            <p class="mapa__texto">Escuela Politécnica Nacional</p>
        `)
        .openPopup();
}