var ctx = document.getElementById("myChart").getContext('2d');


var max = document.getElementById("titles").getElementsByTagName("param");

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [max[0].name, max[1].name, max[2].name, max[3].name, max[4].name, max[5].name, max[6].name],
        datasets: [{
            label: 'Max Salaries by Title',
            data: [max[0].value, max[1].value, max[2].value, max[3].value, max[4].value, max[5].value, max[6].value],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(192,192,192,0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(192, 192, 192, 1)'
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
            }],
            xAxes: [{
                ticks: {
                    stepSize: 1,
                    min: 0,
                    autoSkip: false
                }
            }]
        }
    }
});

