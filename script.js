// Data WADMKC dan Mangga
const labels = [
    "Anjatan", "Cikedung", "Gabus Wetan", "Patrol", "Lelea", "Kandanghaur",
    "Terisi", "Lohbener", "Sukra", "Kroya", "Gantar", "Bongas", "Haurgeulis",
    "Losarang", "Arahan", "Pasekan", "Bangodua", "Cantigi", "Tukdana",
    "Widasari", "Indramayu", "Sindang", "Balongan", "Juntiyuat", "Jati Barang",
    "Sliyeg", "Karangampel", "Krangkeng", "Kedokan Bunder", "Kartasemaya"
];

const data = [
    92577, 150795, 15840, 2744, 51643, 2832, 30404, 138564, 35129, 70832, 
    22059, 34510, 158675, 14016, 53740, 7218, 26827, 65685, 35257, 20718, 
    3239, 29942, 14756, 87851, 141817, 71999, 24868, 60539, 7054, 20383
];

// Konfigurasi Chart.js
const ctx = document.getElementById('barChart').getContext('2d');
const barChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Jumlah Mangga (kg)',
            data: data,
            backgroundColor: 'rgba(54, 162, 235, 0.6)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'top'
            }
        },
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'WADMKC',
                    font: { weight: 'bold' }
                }
            },
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Jumlah Mangga (kg)',
                    font: { weight: 'bold' }
                }
            }
        }
    }
});
