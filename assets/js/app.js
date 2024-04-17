const { createApp } = Vue

createApp({
    data() {
        return {
            albums: [],
            base_api_url: 'api.php',
            message: "Hello World",
            error: ''
        }
    },
    methods(){

    },
    mounted(){
        axios.get(this.base_api_url)
        .then((result) =>{
            this.albums = result.data;

        }).catch((err) => {
            console.log(err.message);
            this.error = err.message
        });
    }

}).mount('#app')
