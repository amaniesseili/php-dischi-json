
new Vue({
    el: '.row',
    data: {
        opere: [] // Array per memorizzare le opere
    },
    mounted() {
        // richiesta GET all'API PHP
        axios.get('api.php')
            .then(response => {
                this.opere = response.data;
            })
            .catch(error => {
                console.error(error);
            });
    }
});
