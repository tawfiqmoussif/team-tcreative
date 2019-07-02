<template>
  <form>
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
              <md-input v-model="cin" type="text"></md-input>
            </md-field>
          </div>

          <div class="md-layout-item md-small-size-100 md-size-50">
            <md-field>
              <label>الاسم الشخصي</label>
              <md-input v-model="firstname" type="text"></md-input>
            </md-field>
          </div>

          <div class="md-layout-item md-small-size-100 md-size-50">
            <md-field>
              <label>الاسم</label>
              <md-input v-model="lastname" type="text"></md-input>
            </md-field>
          </div>

          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>رقم الهاتف</label>
              <md-input v-model="telephone" type="tel"></md-input>
            </md-field>
          </div>
        
          <div class="md-layout-item md-small-size-100 md-size-100">
            <md-field>
              <label>Adress</label>
              <md-input v-model="address" type="text"></md-input>
            </md-field>
          </div>

          <div class="md-layout-item md-small-size-100 md-size-33">
          <md-field>
              <label>نسخة بطاقة التعريف الوطنية</label>
              <md-file v-model="single" />
         </md-field>
         </div>

          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>نسخة بطاقة التعريف الوطنية</label>
              <md-input v-model="photocopie" type="text"></md-input>
            </md-field>
          </div>
          <div class="md-layout-item md-small-size-100 md-size-33">
            <md-field>
              <label>Postal Code</label>
              <md-input v-model="code" type="number"></md-input>
            </md-field>
          </div>

      
          <div class="md-layout-item md-size-100 text-right">
            <md-button class="md-raised md-success">Update Profile</md-button>
          </div>
        </div>

      </md-card-content>
    </md-card>
  </form>
</template>
<script>
export default {
  name: 'edit-form',
  props: {
    dataBackgroundColor: {
      type: String,
      default: ''
    }
  },
  data () {
    return {
      cin: null,
      firstname: null,
      lastname: null,
      telephone: null,
      address: null,
      photocopie: null,
      code: null,
      
    }
  }
}

</script>

<script>
  export default {
    name: 'FileField',
    data: () => ({
      single: null
    })
  }
</script>
<style>

</style>
