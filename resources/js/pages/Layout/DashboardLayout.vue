<template>
  <div class="wrapper">
    <notifications></notifications>

    <side-bar>
      <mobile-menu slot="content"></mobile-menu>
      <sidebar-link to="/dashboard">
        <md-icon>dashboard</md-icon>
        <p>الرئيسية</p>
      </sidebar-link>

      <sidebar-link to="/empInfo">
      <md-icon>person</md-icon>
      <md-menu md-size="big" md-align-trigger md-direction="bottom-start">
             <md-button md-menu-trigger>المستخدمين</md-button>
             <md-menu-content>
                <md-menu-item to="/form">أضف مستخدم</md-menu-item>
             </md-menu-content>
      </md-menu>
      </sidebar-link>

      <sidebar-link to="/icons">
      <md-icon>person</md-icon>
      <md-menu md-size="big" md-align-trigger md-direction="bottom-start">
             <md-button md-menu-trigger>المنتوجات</md-button>
             <md-menu-content>
                <md-menu-item to="/icons">اظهار كل المنتوجات</md-menu-item>
                <md-menu-item to="/form">أضف منتوج</md-menu-item>
                <md-menu-item to="/icons">أنواع</md-menu-item>
             </md-menu-content>
      </md-menu>
      </sidebar-link>

      <sidebar-link to="#">
        <md-icon>content_paste</md-icon>
        <md-menu md-size="big" md-align-trigger md-direction="bottom-start">
             <md-button md-menu-trigger>البائعون</md-button>
             <md-menu-content>
                <md-menu-item to="/icons">كل البائعون</md-menu-item>
                <md-menu-item to="/icons">أصحاب السلف</md-menu-item>
             </md-menu-content>
      </md-menu>
      </sidebar-link>

      <sidebar-link to="/typography">
        <md-icon>library_books</md-icon>
        <p>الزبناء</p>
      </sidebar-link>

      <sidebar-link to="/icons">
        <md-icon>bubble_chart</md-icon>
        <p>الطلبات</p>
      </sidebar-link>

      <sidebar-link to="/maps">
        <md-icon>location_on</md-icon>
        <p>التكاليف</p>
      </sidebar-link>

      <sidebar-link to="/notifications">
        <md-icon>notifications</md-icon>
        <p>التعديلات</p>
      </sidebar-link>
    </side-bar>

    <div class="main-panel">
      <top-navbar></top-navbar>

      <dashboard-content>

      </dashboard-content>

      <content-footer v-if="!$route.meta.hideFooter"></content-footer>
    </div>
  </div>
</template>
<style lang="scss">

</style>

<script>
import TopNavbar from './TopNavbar.vue'
import ContentFooter from './ContentFooter.vue'
import DashboardContent from './Content.vue'
import MobileMenu from '@/pages/Layout/MobileMenu.vue'

export default {
  components: {
    TopNavbar,
    DashboardContent,
    ContentFooter,
    MobileMenu
  }
}
</script>
