const ct = document.getElementById('others').getContext('2d');
const othersct = new Chart(ct, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 7, 15, 8, 5],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                '#fff',
                '#fff',
                '#fff',
                '#fff',
                '#fff',
                '#fff'
            ],
            borderWidth: 2
        }]
    },
    options: {

        legend: {
            position: 'top',
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


const c = document.getElementById('pri2').getContext('2d');
const pri = new Chart(c, {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 7, 15, 8, 5],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderColor: [
                '#fff',
                '#fff',
                '#fff',
                '#fff',
                '#fff',
                '#fff'
            ],
            borderWidth: 2
        }]
    },
    options: {

        legend: {
            position: 'top',
        },
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
