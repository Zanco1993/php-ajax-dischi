new Vue({
    el: "#app",
    data: {
        discs: []
    },
    mounted() {
        axios.get("http://localhost:8888/my-repository/php-ajax-dischi/db/api.php").then(resp => {
            this.discs = resp.data.response;
        })

    },


});