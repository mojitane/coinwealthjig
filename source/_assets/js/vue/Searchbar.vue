<template>
  <div>
    <vue-suggest
      v-model="chosen"
      :list="suggestionList"
      value-attribute="title"
      :filter-by-query="true">
      <div class="field">
        <p class="control has-icons-right">
          <input class="input is-small c-searchbar__input" type="text" placeholder="Search">
          <span class="icon is-small is-right has-text-primary">
            <i class="fas fa-caret-right"></i>
          </span>
        </p>
      </div>
      <div slot="suggestion-item" slot-scope="{ suggestion, query }">
        <div><i v-bind:class="suggestion.icon"></i> {{ suggestion.title }}</div>
      </div>
    </vue-suggest>
  </div>
</template>

<script>
  import VueSuggest from 'vue-simple-suggest';
  // import 'vue-simple-suggest/dist/styles.css'; // Optional CSS

  export default {
    components: {
      VueSuggest
    },
    data() {
      return {
        chosen: '',
        suggestionList: [
          { title: 'Bitcoin', icon: 'cc BTC' },
          { title: 'Ethereum', icon: 'cc ETH-alt' },
          { title: 'Ripple', icon: 'cc XRP-alt' },
          { title: 'Dogecoin', icon: 'cc DOGE-alt' },
          { title: 'Dash', icon: 'cc DASH-alt' },
          { title: 'FuelCoin', icon: 'cc FC2-alt' },
          { title: 'Vertcoin', icon: 'cc VTC-alt' },
          { title: 'Tether', icon: 'cc USDT' },
          { title: 'Rubies', icon: 'cc RBIES' },
        ]
      }
    },
  }
</script>
