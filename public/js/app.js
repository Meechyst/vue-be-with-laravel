new Vue({
  el: '#app',

  data: {
    message: '',
    users: [],
  },
created(){
    axios.get('about').then(response => this.message = response.data);

    axios.get('https://jsonplaceholder.typicode.com/users')
    .then(response => this.users = response.data);

}
});
