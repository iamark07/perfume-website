// Sales Chart
const salesCtx = document.getElementById("salesChart").getContext("2d");
new Chart(salesCtx, {
    type: "line",
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May"],
        datasets: [
            {
                label: "Sales (₹)",
                data: [12000, 15000, 10000, 17000, 14000],
                borderColor: "rgba(75, 192, 192, 1)",
                backgroundColor: "rgba(75, 192, 192, 0.2)",
                borderWidth: 2,
            },
        ],
    },
    options: { responsive: true, maintainAspectRatio: false },
});

// User Growth Chart
const userGrowthCtx = document
    .getElementById("userGrowthChart")
    .getContext("2d");
new Chart(userGrowthCtx, {
    type: "bar",
    data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May"],
        datasets: [
            {
                label: "New Users",
                data: [50, 75, 60, 90, 120],
                backgroundColor: "rgba(54, 162, 235, 0.7)",
                borderColor: "rgba(54, 162, 235, 1)",
                borderWidth: 2,
            },
        ],
    },
    options: { responsive: true, maintainAspectRatio: false },
});

// Order Status Chart
const orderStatusCtx = document
    .getElementById("orderStatusChart")
    .getContext("2d");
new Chart(orderStatusCtx, {
    type: "doughnut",
    data: {
        labels: ["Pending", "Completed", "Canceled"],
        datasets: [
            {
                data: [30, 60, 10],
                backgroundColor: ["#FBBF24", "#34D399", "#F87171"],
            },
        ],
    },
    options: { responsive: true, maintainAspectRatio: false },
});

google.load("visualization", "1", { packages: ["geochart"] });
google.setOnLoadCallback(drawVisualization);

function drawVisualization() {
    var data = google.visualization.arrayToDataTable([
        ["State Code", "State", "Delivered", "In Transit"],
        ["IN-UP", "Uttar Pradesh", 1300, 500],
        ["IN-MH", "Maharashtra", 1200, 300],
        ["IN-BR", "Bihar", 1100, 400],
        ["IN-WB", "West Bengal", 1400, 350],
        ["IN-MP", "Madhya Pradesh", 1150, 200],
        ["IN-TN", "Tamil Nadu", 1250, 500],
        ["IN-RJ", "Rajasthan", 1350, 450],
        ["IN-KA", "Karnataka", 1400, 600],
        ["IN-GJ", "Gujarat", 1600, 700],
        ["IN-AP", "Andhra Pradesh", 1300, 500],
        ["IN-OR", "Orissa", 1100, 350],
        ["IN-TG", "Telangana", 1200, 400],
        ["IN-KL", "Kerala", 1150, 250],
        ["IN-JH", "Jharkhand", 900, 300],
        ["IN-AS", "Assam", 850, 150],
        ["IN-PB", "Punjab", 950, 180],
        ["IN-CT", "Chhattisgarh", 1000, 350],
        ["IN-HR", "Haryana", 900, 220],
        ["IN-JK", "Jammu and Kashmir", 700, 150],
        ["IN-UT", "Uttarakhand", 750, 100],
        ["IN-HP", "Himachal Pradesh", 600, 50],
        ["IN-TR", "Tripura", 800, 200],
        ["IN-ML", "Meghalaya", 700, 120],
        ["IN-MN", "Manipur", 750, 90],
        ["IN-NL", "Nagaland", 780, 80],
        ["IN-GA", "Goa", 950, 200],
        ["IN-AR", "Arunachal Pradesh", 1100, 150],
        ["IN-MZ", "Mizoram", 650, 110],
        ["IN-SK", "Sikkim", 700, 120],
        ["IN-DL", "Delhi", 1600, 500],
        ["IN-PY", "Puducherry", 1200, 300],
        ["IN-CH", "Chandigarh", 900, 150],
        ["IN-AN", "Andaman and Nicobar Islands", 800, 100],
        ["IN-DN", "Dadra and Nagar Haveli", 950, 250],
        ["IN-DD", "Daman and Diu", 900, 180],
        ["IN-LD", "Lakshadweep", 750, 120],
    ]);

    var opts = {
        region: "IN",
        domain: "IN",
        displayMode: "regions",
        colorAxis: { colors: ["#e5ef88", "#d4b114", "#e85a03"] },
        resolution: "provinces",
        defaultColor: "#f5f5f5",
    };

    var geochart = new google.visualization.GeoChart(
        document.getElementById("visualization")
    );
    geochart.draw(data, opts);
}


document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('top-products-chart').getContext('2d');

    // Mock Data
    const mockTopProducts = [
        { name: 'Perfume A', sales: 150 },
        { name: 'Perfume B', sales: 120 },
        { name: 'Perfume C', sales: 90 },
        { name: 'Perfume D', sales: 80 },
        { name: 'Perfume E', sales: 75 },

    ];

    const labels = mockTopProducts.map(product => product.name);
    const data = mockTopProducts.map(product => product.sales);

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Total Sales Volume',
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
});