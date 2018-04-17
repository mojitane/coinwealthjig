<script>
var app = new Vue({
  el: '#app',
  data: {
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
});

</script>
