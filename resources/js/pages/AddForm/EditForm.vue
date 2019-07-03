<template>
  <form @submit.prevent="addEmploye">
    <md-card>
      <md-card-header data-background-color="green">
        <h4 class="title">المستخدمين</h4>
        <p class="category">حساب المستخدم</p>
      </md-card-header>

      <md-card-content>
        <div class="md-layout">
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>رقم بطاقة التعريف الوطنية</label>
              <md-input type="text"></md-input>
            </md-field>
          </div>

          <div class="md-layout-item md-small-size-100 md-size-50">
            <md-field>
              <label>الاسم الشخصي</label>
              <md-input type="text" v-model="personne.prenom"></md-input>
            </md-field>
          </div>

          <div class="md-layout-item md-small-size-100 md-size-50">
            <md-field>
              <label>الاسم العائلي</label>
              <md-input type="text" v-model="personne.nom"></md-input>
            </md-field>
          </div>

          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>رقم الهاتف</label>
              <md-input type="tel" v-model="personne.tel"></md-input>
            </md-field>
          </div>

          <div class="md-layout-item md-small-size-100 md-size-100">
            <md-field>
              <label>العنوان</label>
              <md-input type="text" v-model="personne.adresse"></md-input>
            </md-field>
          </div>

          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>نسخة بطاقة التعريف الوطنية</label>
              <md-file v-model="personne.photocopie_carte_national" />
            </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>الصورة الشخصية</label>
              <md-file v-model="personne.photo" />
            </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>تاريخ العمل</label>
              <md-input type="date" v-model="employe.date_recrutement"></md-input>
            </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>الأجرة</label>
              <md-input type="text" v-model="employe.salaire"></md-input>
            </md-field>
          </div>

          <div class="md-layout-item md-size-100 text-right">
            <md-button type="submit" class="md-raised md-success">إضافة</md-button>
          </div>
        </div>
      </md-card-content>
    </md-card>
  </form>
</template>
<script>
export default {
  name: "edit-form",
  props: {
    dataBackgroundColor: {
      type: String,
      default: ""
    }
  },
  data() {
    return {
      personne: {
        nom: "",
        prenom: "",
        tel: "",
        adresse: "",
        photo: "",
        photocopie_carte_national: ""
      },
      employes: [],
      employe: {
        date_recrutement: null,
        salaire: "",
        personne_id: "",
        magasin_id: ""
      }
    };
  },
  methods: {
    addEmploye() {
      fetch("api/personne", {
        method: "post",
        body: JSON.stringify(this.personne),
        headers: {
          "content-type": "application/json"
        }
      })
        .then(res => res.json())
        .then(res => {
          alert("Personne Added");
          this.employe.personne_id = res.data.id;
          this.employe.magasin_id = 1;
          fetch("api/employe", {
            method: "post",
            body: JSON.stringify(this.employe),
            headers: {
              "content-type": "application/json"
            }
          })
            .then(res => res.json())
            .then(data => {
              alert("Employe Added");
              //this.fetchUsers();
              this.$router.push({name:'EmpInfo'});
            })
            .catch(err => console.log(err));
        })
        .catch(err => console.log(err));
    }
  }
};
</script>


<style>
</style>
