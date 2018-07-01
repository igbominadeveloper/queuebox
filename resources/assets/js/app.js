require('./bootstrap');

    setTimeout(() => {
        let flash = document.querySelector(".alert");
        flash.style.display = 'none';
    }, 5000);

new Vue({
    el: '#app',
    data:{
        clippings:0,
        tweets:0,
        videos:0,
        posts:0
    },
    created(){
        axios.get('/api/clippings')
            .then(response=>this.clippings=response.data)
            .catch(error => console.log(error.response.data));
        axios.get('/api/tweets')
            .then(response=>this.tweets=response.data)
            .catch(error => console.log(error.response.data));
        axios.get('/api/videos')
            .then(response=>this.videos=response.data)
            .catch(error => console.log(error.response.data));
        axios.get('/api/posts')
            .then(response=>this.posts=response.data)
            .catch(error => console.log(error.response.data));
    }
});

