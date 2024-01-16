const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: './server.php',
            myAlbumsList: []
        }
    },

    methods: {
        getMyAlbumList(){
            axios.get(this.apiUrl).then((response) => {
                this.myAlbumsList = response.data;  

                console.log (response.data);
            })
        }
    },

    created() {
        this.getMyAlbumList();
    },
}).mount('#app')