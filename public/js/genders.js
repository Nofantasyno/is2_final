var ctx = document.getElementById("myChart").getContext('2d');


var avg = document.getElementById("genders").getElementsByTagName("li");

var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["Male", "Female"],
        datasets: [{
            label: 'Genders percentage',
            data: [avg[0].value, avg[1].value],
            backgroundColor: [
                'rgba(54, 162, 235, 0.2)',
                'rgba(248, 24, 132, 0.2)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(175, 99,132,1)'
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

