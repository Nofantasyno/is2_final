var ctx = document.getElementById("myChart").getContext('2d');

var age = document.getElementById("ages").getElementsByTagName("param");

var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
        labels: [age[0].name, age[1].name],
        datasets: [{
            label: 'Difference in Ages',
            data: [age[0].value, age[1].value],
            backgroundColor: [
                'rgba(70, 242, 0, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(70, 242, 0,1)',
                'rgba(153, 102, 255, 1)'
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
                    beginAtZero:true
                }
            }]
        }
    }
});

