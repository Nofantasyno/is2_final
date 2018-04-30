var ctx = document.getElementById("myChart").getContext('2d');

var avg = document.getElementById("departments").getElementsByTagName("li");

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Marketing", "Finance", "Human Resources", "Production", "Development", "Quality Management", "Sales", "Research", "Customer Service"],
        datasets: [{
            label: 'Salaries by Departments',
            data: [avg[0].value, avg[1].value, avg[2].value, avg[3].value, avg[4].value, avg[5].value, avg[6].value, avg[7].value, avg[8].value],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(192,192,192,0.2)',
                'rgba(225,255,0,0.2)',
                'rgba(132,255,0,0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(192, 192, 192, 1)',
                'rgba(255, 168, 70, 1)',
                'rgba(132, 168, 87, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

