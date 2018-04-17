<template>
  <div id="app" class="c-rankingfull__container" data-slideout-ignore>
    <div class="buttons">
      <a @click="switchCurrencyUSD" :class="['button', currency == 'USD' ? 'is-primary' : '']">USD</a>
      <a @click="switchCurrencyEUR" :class="['button', currency == 'EUR' ? 'is-primary' : '']">EUR</a>
    </div>
    <table class="table is-hoverable c-rankingfull__table">
      <thead class="c-rankingfull__head">
        <tr>
          <th>Rank</th>
          <th>Exchange</th>
          <th>Market Cap</th>
          <th>Price</th>
          <th>Change</th>
          <th>Day low</th>
          <th>Day high</th>
          <th>Volume</th>
          <th>Average volume</th>
        </tr>
      </thead>
      <tbody v-cloak>
        <tr v-for="coin in cryptoData">
          <td class="c-rankingfull__row c-rankingfull__row--toggle">{{ coin.rank }}
            <span :class="['icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav', {'is-active animated bounceIn': coin.toggleStar}]" @click="cryptoData[coin.rank-1].toggleStar = !coin.toggleStar"><i class="fas fa-star"></i></span>
            <span :class="['icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert', , {'is-active animated bounceIn': coin.toggleAlert}]" @click="cryptoData[coin.rank-1].toggleAlert = !coin.toggleAlert"><i class="fas fa-exclamation-triangle"></i></span>
          </td>
          <td class="c-rankingfull__row c-rankingfull__row--currency" title="Bitcoin"><span class="c-rankingfull__currency"><i :class="coin.icon"></i></span> {{ coin.currency}}</td>
          <td class="c-rankingfull__row c-rankingfull__row--cap">{{ coin.cap | currency(configSymbol, configSeparator, configFractionCount,
  configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
          <td class="c-rankingfull__row c-rankingfull__row--price"><span class="has-text-primary">{{ coin.price | currency(configSymbol, configSeparator, configFractionCount,
  configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</span></td>
          <td class="c-rankingfull__row c-rankingfull__row--change">{{ coin.change}}% <span :class="['icon is-small', coin.change >= 0 ? 'has-text-primary' : 'has-text-danger']"><i :class="['fas', coin.change >= 0 ? 'fa-caret-up' : 'fa-caret-down']"></i></span></td>
          <td class="c-rankingfull__row c-rankingfull__row--low">{{ coin.low | currency(configSymbol, configSeparator, configFractionCount,
  configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
          <td class="c-rankingfull__row c-rankingfull__row--high">{{ coin.high | currency(configSymbol, configSeparator, configFractionCount,
  configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
          <td class="c-rankingfull__row c-rankingfull__row--volume">{{ coin.volume | currency(configSymbol, configSeparator, configFractionCount,
  configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
          <td class="c-rankingfull__row c-rankingfull__row--averagevolume">{{ coin.averagevolume | currency(configSymbol, configSeparator, configFractionCount,
  configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
  import fx from 'money';
  import Vue from 'vue';
  import VueCurrencyFilter from 'vue-currency-filter';
  Vue.use(VueCurrencyFilter,
  {
    symbol : '$',
    thousandsSeparator: '.',
    fractionCount: 2,
    fractionSeparator: ',',
    symbolPosition: 'front',
    symbolSpacing: true
  });

  function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }
  fx.base = "USD";
  fx.rates = {
  	"EUR" : 0.814080, // eg. 1 USD === 0.745101 EUR
  	"GBP" : 0.647710, // etc...
  	"HKD" : 7.781919,
  	"USD" : 1,        // always include the base rate (1:1)
  	/* etc */
  };
  
  export default {
    data() {
      return {
        currency: 'USD',
        configSymbol: '$',
        configSeparator: '.',
        configFractionCount: 2,
        configFractionSeparator: ',',
        configSymbolPosition: 'front',
        configSymbolSpacing: true,
        cryptoData:
        [ //rank, name, cap,
          {rank: 1, toggleStar: true, toggleAlert: true, icon: 'cc BTC', currency: 'Bitcoin', cap: 171.48, price: 770.82, change: getRandomInt(-60, 60), low: 161.2, high: 271.48, volume: 161.2, averagevolume: 211.48},
          {rank: 2, toggleStar: false, toggleAlert: true, icon: 'cc ETH-alt', currency: 'Ethereum', cap: 171.48, price: 770.82, change: getRandomInt(-60, 60), low: 161.2, high: 271.48, volume: 161.2, averagevolume: 211.48},
          {rank: 3, toggleStar: false, toggleAlert: false, icon: 'cc XRP-alt', currency: 'Ripple', cap: 171.48, price: 770.82, change: getRandomInt(-60, 60), low: 161.2, high: 271.48, volume: 161.2, averagevolume: 211.48},
          {rank: 4, toggleStar: false, toggleAlert: false, icon: 'cc BTC', currency: 'Bitcoin', cap: 171.48, price: 770.82, change: getRandomInt(-60, 60), low: 161.2, high: 271.48, volume: 161.2, averagevolume: 211.48},
          {rank: 5, toggleStar: false, toggleAlert: true, icon: 'cc ETH-alt', currency: 'Ethereum', cap: 171.48, price: 770.82, change: getRandomInt(-60, 60), low: 161.2, high: 271.48, volume: 161.2, averagevolume: 211.48},
          {rank: 6, toggleStar: false, toggleAlert: false, icon: 'cc XRP-alt', currency: 'Ripple', cap: 171.48, price: 770.82, change: getRandomInt(-60, 60), low: 161.2, high: 271.48, volume: 161.2, averagevolume: 211.48},
          {rank: 7, toggleStar: false, toggleAlert: false, icon: 'cc BTC', currency: 'Bitcoin', cap: 171.48, price: 770.82, change: getRandomInt(-60, 60), low: 161.2, high: 271.48, volume: 161.2, averagevolume: 211.48},
          {rank: 8, toggleStar: false, toggleAlert: false, icon: 'cc ETH-alt', currency: 'Ethereum', cap: 171.48, price: 770.82, change: getRandomInt(-60, 60), low: 161.2, high: 271.48, volume: 161.2, averagevolume: 211.48},
          {rank: 9, toggleStar: false, toggleAlert: false, icon: 'cc XRP-alt', currency: 'Ripple', cap: 171.48, price: 770.82, change: getRandomInt(-60, 60), low: 161.2, high: 271.48, volume: 161.2, averagevolume: 211.48},
          {rank: 10, toggleStar: true, toggleAlert: false, icon: 'cc BTC', currency: 'Bitcoin', cap: 171.48, price: 770.82, change: getRandomInt(-60, 60), low: 161.2, high: 271.48, volume: 161.2, averagevolume: 211.48},
          {rank: 11, toggleStar: false, toggleAlert: false, icon: 'cc ETH-alt', currency: 'Ethereum', cap: 171.48, price: 770.82, change: getRandomInt(-60, 60), low: 161.2, high: 271.48, volume: 161.2, averagevolume: 211.48},
          {rank: 12, toggleStar: false, toggleAlert: false, icon: 'cc XRP-alt', currency: 'Ripple', cap: 171.48, price: 770.82, change: getRandomInt(-60, 60), low: 161.2, high: 271.48, volume: 161.2, averagevolume: 211.48},
        ],
      }
    },
    computed: {
      cryptoDataLocal: function () {
        let newdata = JSON.parse(JSON.stringify(this.cryptoData));
        for (var i = 0; i < newdata.length; i++) {
          newdata[i].cap = fx(newdata[i].cap).from("USD").to(this.currency);
          newdata[i].price = fx(newdata[i].price).from("USD").to(this.currency);
          newdata[i].low = fx(newdata[i].low).from("USD").to(this.currency);
          newdata[i].high = fx(newdata[i].high).from("USD").to(this.currency);
          newdata[i].volume = fx(newdata[i].volume).from("USD").to(this.currency);
          newdata[i].averagevolume = fx(newdata[i].averagevolume).from("USD").to(this.currency);
        }
        return newdata;
      }
    },
    methods: {
      switchCurrencyEUR: function() {
        this.currency = 'EUR';
        this.configSymbol = '€';
        this.configSymbolPosition = 'end';
        this.configSeparator = ',';
        this.configFractionSeparator = '.';
      },
      switchCurrencyUSD: function() {
        this.currency = 'USD';
        this.configSymbol = '$';
        this.configSymbolPosition = 'front';
        this.configSeparator = '.';
        this.configFractionSeparator = ',';
      }
    }
  }
</script>
