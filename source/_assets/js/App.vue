<template>
  <div>
    <v-searchbar></v-searchbar>
  </div>
</template>

<script>
import Vue from 'vue';
import Searchbar from './vue/Searchbar.vue';
import cryptolist from './vue/Cryptolist.vue';

export default {
  components: {
    'v-searchbar': Searchbar,
    'v-cryptolist': cryptolist
  },
  data () {
    return {
    }
  },
  methods: {
  }
}
</script>
