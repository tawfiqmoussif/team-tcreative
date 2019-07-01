<template>
  <div>
	<form @submit.prevent="addUser" class="mb-3">
	    <div class="form-group">
        <input type="text" class="form-control" placeholder="nom" name="nom" v-model="personne.nom">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="prenom" name="prenom" v-model="personne.prenom">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="tel" v-model="personne.tel">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="adresse" v-model="personne.adresse">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="photo" v-model="personne.photo">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="photocopie_carte_national" v-model="personne.photocopie_carte_national">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="username" v-model="user.name">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="email" placeholder="email" v-model="user.email">
      </div>
      <div class="form-group">
        <input type="password" id="password" class="form-control" name="password" placeholder="password" v-model="user.password">
      </div>
      <div class="form-group">
        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="password confirm">
      </div>
     <!--  <div class="form-group">
        <input type="text" class="form-control" placeholder="id personne" v-model="user.personne_id">
      </div>-->
      <button type="submit" class="btn btn-light btn-block">Save</button>
</form>
 <div class="card card-body mb-2" v-for="user in users" v-bind:key="user.id">
      <p>{{ user.name }}</p>
      <p>{{ user.personne.prenom }}</p>
      <p>{{ user.personne.adresse }}</p>
      <button class="btn btn-warning mb-2">Edit</button>
      <button @click="deleteUser(user.id, user.personne.id)" class="btn btn-danger">Delete</button>
  </div>
</div>
</template>
<script>
export default {
data() 
{
	return {
      personne: {
        nom: '', 
        prenom: '',
        tel: '',
        adresse: '',
        photo: '',
        photocopie_carte_national: ''
      },
      users: [],
      user: {
        name: '', 
        email: '',
        password: '',
        personne_id: ''
      }
    }
},
created() {
    this.fetchUsers();
  },
methods: {
  fetchUsers() {
      fetch('/api/users')
      .then(res => res.json())
      .then(res => {
        //affecter res.data a articles
        this.users = res.data;
      })
      .catch(err => console.log(err));
    },
	addUser() 
	{

		fetch('api/personne', {
          method: 'post',
          body: JSON.stringify(this.personne),
          headers: {
            'content-type': 'application/json'
          }
        })
          .then(res => res.json())
          .then(res => {
            alert('Personne Added');
             this.user.personne_id = res.data.id;
              fetch('api/user', {
          method: 'post',
          body: JSON.stringify(this.user),
          headers: {
            'content-type': 'application/json'
          }
        })
          .then(res => res.json())
          .then(data => {
            alert('User Added');
            this.fetchUsers();
          })
          .catch(err => console.log(err));

          })
          .catch(err => console.log(err));
  },
  deleteUser(user_id, personne_id) {
    console.log(personne_id);
         if (confirm('Are You Sure?')) {
          fetch(`api/user/${user_id}`, {
              method: 'delete'
            })
              .then(res => res.json())
              .then(data => {
               alert('User Removed');
               fetch(`api/personne/${personne_id}`, {
              method: 'delete'
              })
              .then(res => res.json())
              .then(data => {
               alert('Personne Removed');
              this.fetchUsers();
              })
              .catch(err => console.log(err));
              })
              .catch(err => console.log(err));
          }
        },
}
}
</script>