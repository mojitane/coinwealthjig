<template>
  <div>
    <div class="tabs is-centered">
      <ul>
        <li v-for="tab in tabs" :class="{ 'is-active': tab.isActive }">
          <a href="#" @click="selectTab(tab)">{{ tab.name }}</a>
        </li>
      </ul>
    </div>
    <div class="tabs-content">
      <slot></slot>
    </div>
  </div>
</template>

<script>
  import Vue from "vue";
  Vue.component('tab', {
    template: `
      <div v-show="isActive"><slot></slot></div>
    `
    ,
    props: {
      name: { required: true },
      selected: { default: false }
    },
    data() {
      return {
        isActive: false
      }
    },
    mounted() {
      this.isActive = this.selected;
    }
  })

  export default {
    data() {
      return {
        tabs: []
      }
    },
    created() {
      this.tabs = this.$children;
    },
    computed: {
    },
    methods: {
      selectTab(selectedTab) {
        this.tabs.forEach(tab => {
          tab.isActive = (tab.name == selectedTab.name)
        });
      }
    }
  }
</script>
