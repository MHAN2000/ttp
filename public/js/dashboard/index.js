const completed = document.getElementById('completed');
const cities = document.getElementById('ticketsByCity');

document.addEventListener('DOMContentLoaded', () => {
    ticketsPendientesResueltos();
    ticketsMunicipios();
});

const ticketsMunicipios = async () => {
    // URL to FETCH data
    const url = route('tickets_ciudades');
    // Set headers and method
    const init = {
        method: 'GET',
        headers: {
            Accept: 'application/json'
        }
    }
    // Send request to the back
    const req = await fetch(url, init);
    // Check if request returned a 200 status code
    if (req.ok) {
        const [labelsCities, ticketsByCities] = await req.json();
        new Chart(cities, {
            type: 'bar',
            data: {
                labels: labelsCities,
                datasets: [{
                    label: 'Tickets',
                    data: ticketsByCities,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
        })
    }
}

const ticketsPendientesResueltos = async () => {
    // URL to FETCH data
    const url = route('resueltos');
    // Set headers and method
    const init = {
        method: 'GET',
        headers: {
            Accept: 'application/json'
        }
    }
    // Send request to the back
    const req = await fetch(url, init);
    // Check if request returned a 200 status code
    if (req.ok) {
        const [pendientes, completos] = await req.json();
        new Chart(completed, {
            type: 'bar',
            data: {
                labels: ['Pendiente', 'Completo'],
                datasets: [{
                    label: 'Tickets',
                    data: [pendientes, completos],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
        })
    }
}