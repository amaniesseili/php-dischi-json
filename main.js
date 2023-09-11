

// Effettuo una richiesta GET all'API PHP
axios.get('api.php')
    .then(response => {
        const opere = response.data;

        const container = document.querySelector('#opere-container');

        // Aggiungo le opere al contenitore
        for (let i = 0; i < opere.length; i++) {
            container.innerHTML +=` 
            <div>${opere[i]}</div>`

            
        }
    })
    .catch(error => {
        console.error(error);
    });


