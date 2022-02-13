// All javascript code in this project for now is just for demo DON'T RELY ON IT
var dark = window.localStorage.getItem('dark');

const random = (max = 100) => {
    return Math.round(Math.random() * max) + 20
}

const randomData = () => {
    return [
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
        random(),
    ]
}

const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']

const cssColors = (color) => {
    return getComputedStyle(document.documentElement).getPropertyValue(color)
}

const getColor = () => {
    return window.localStorage.getItem('color') ? 'cyan' : '#fff'
}

const colors = {
    success: '#4CFA9D',
    successDark: '#3AC48E',
    successLight: '#DFFFE9',
    successLighter: '#F2FFF9',
    successLightest: '#F9FFFD',
    danger: '#F55A5A',
    dangerDark: '#D43D3D',
    warning: '#FFCA3A',
    warningDark: '#FFB819',
    info: '#55C3E7',
    infoDark: '#3EB0D5',
    infoDarker: '#2B9EC3',
    infoDarkest: '#1E8CB1',
    infoLight: '#E6F5FB',
    infoLighter: '#F2F9FF',
}

const barChart = new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: months,
        datasets: [{
            data: randomData(),
            backgroundColor: colors.success,
            hoverBackgroundColor: colors.successDark,
        }, ],
    },
    options: {
        scales: {
            yAxes: [{
                gridLines: false,
                ticks: {
                    beginAtZero: true,
                    stepSize: 20,
                    fontSize: 12,
                    fontColor: '#97a4af',
                    fontFamily: 'Open Sans, sans-serif',
                    padding: 10,
                },
            }, ],
            xAxes: [{
                gridLines: false,
                ticks: {
                    fontSize: 12,
                    fontColor: '#97a4af',
                    fontFamily: 'Open Sans, sans-serif',
                    padding: 5,
                },
                categoryPercentage: 0.5,
                maxBarThickness: '20',
            }, ],
        },
        cornerRadius: 2,
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
    },
})

const doughnutChart = new Chart(document.getElementById('doughnutChart'), {
    type: 'doughnut',
    data: {
        labels: ['Oct', 'Nov', 'Dec'],
        datasets: [{
            data: [random(), random(), random()],
            backgroundColor: [colors.infoDarker, colors.info, colors.infoDark],
            hoverBackgroundColor: colors.infoDark,
            borderWidth: 0,
            weight: 0.5,
        }, ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            position: 'bottom',
            labels: {
                fontColor: '#97a4af',
            }
        },
        title: {
            display: false,
        },
        animation: {
            animateScale: true,
            animateRotate: true,
        },
        scales: {

        }
    },
})

const activeUsersChart = new Chart(document.getElementById('activeUsersChart'), {
    type: 'bar',
    data: {
        labels: [...randomData(), ...randomData()],
        datasets: [{
            data: [...randomData(), ...randomData()],
            backgroundColor: colors.warning,
            borderWidth: 0,
            categoryPercentage: 1,
        }, ],
    },
    options: {
        scales: {
            yAxes: [{
                display: false,
                gridLines: false,
            }, ],
            xAxes: [{
                display: false,
                gridLines: false,
            }, ],
            ticks: {
                padding: 10,
            },
        },
        cornerRadius: 2,
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        tooltips: {
            prefix: 'Users',
            bodySpacing: 4,
            footerSpacing: 4,
            hasIndicator: true,
            mode: 'index',
            intersect: true,
        },
        hover: {
            mode: 'nearest',
            intersect: true,
        },
    },
})

const lineChart = new Chart(document.getElementById('lineChart'), {
    type: 'line',
    data: {
        labels: months,
        datasets: [{
            data: randomData(),
            fill: false,
            borderColor: colors.danger,
            borderWidth: 3,
            pointRadius: 4,
            pointHoverRadius: 0,
        }, ],
    },
    options: {
        responsive: true,
        scales: {
            yAxes: [{
                gridLines: false,
                ticks: {
                    beginAtZero: false,
                    stepSize: 50,
                    fontSize: 12,
                    fontColor: '#97a4af',
                    fontFamily: 'Open Sans, sans-serif',
                    padding: 20,
                },
            }, ],
            xAxes: [{
                gridLines: false,
                ticks: {
                    beginAtZero: false,
                    stepSize: 50,
                    fontSize: 12,
                    fontColor: '#97a4af',
                    fontFamily: 'Open Sans, sans-serif',
                    padding: 20,
                },
            }, ],
        },
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        tooltips: {
            hasIndicator: true,
            intersect: false,
        },
    },
})

let randomUserCount = 0

const usersCount = document.getElementById('usersCount')

const fakeUsersCount = () => {
    randomUserCount = random()
    activeUsersChart.data.datasets[0].data.push(randomUserCount)
    activeUsersChart.data.datasets[0].data.splice(0, 1)
    activeUsersChart.update()
    usersCount.innerText = randomUserCount
}

setInterval(() => {
    fakeUsersCount()
}, 1000)