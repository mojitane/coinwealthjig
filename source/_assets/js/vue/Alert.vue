<template>
  <div>
    <div class="c-modal__header">
      <p class="title has-text-centered is-uppercase has-text-spaced is-5">Create a price alert</p>
    </div>
    <tabs>
      <tab name="Price Target">
        <div class="c-modal__body has-text-centered">
          <div class="c-modal__alert-form has-text-spaced">
            <div class="field">
              <p class="is-size-6-light">Notify me if the price of Binance touches (enter up to 4)</p>
            </div>
            <div class="field">
              <div class="control has-text-centered">
                <input class="input" style="max-width: 300px" type="text" placeholder="Price in dollar">
              </div>
            </div>
            <div class="field">
              <div class="control has-text-centered">
                <input class="input" style="max-width: 300px" type="text" placeholder="Price in dollar">
              </div>
            </div>
            <div class="field">
              <div class="control has-text-centered">
                <input class="input" style="max-width: 300px" type="text" placeholder="Price in dollar">
              </div>
            </div>
            <div class="field">
              <div class="control has-text-centered">
                <input class="input" style="max-width: 300px" type="text" placeholder="Price in dollar">
              </div>
            </div>

            <div class="c-modal__alert-item level">
              <div class="level-item">
                via
              </div>
              <div class="level-item">
                <select class="c-modal__select is-uppercase is-size-6 has-text-spaced">
                  <option>cell</option>
                  <option>email</option>
                </select>
              </div>
            </div>
          </div>
          <div><a href="#" class="c-modal__action button is-primary has-text-spaced">Set alert &gt;</a></div>
        </div>
      </tab>

      <tab name="Price Movement" selected="true">
        <div class="c-modal__body has-text-centered">
          <div class="c-modal__alert-form has-text-spaced">
            <div class="c-modal__alert-item level">
              <div class="level-item">
                Notify me if the
              </div>
              <div class="level-item">
                <select class="c-modal__select is-uppercase is-size-6 has-text-spaced">
                  <option>volume</option>
                  <option>other</option>
                </select>
              </div>
            </div>
            <div class="c-modal__alert-item level">
              <div class="level-item">
                of Biance
              </div>
              <div class="level-item">
                <select class="c-modal__select is-uppercase is-size-6 has-text-spaced">
                  <option>increases</option>
                  <option>decreases</option>
                </select>
              </div>
            </div>
            <div class="c-modal__alert-item level">
              <div class="level-item">
                by more than
              </div>
              <div class="level-item">
                <select class="c-modal__select is-uppercase is-size-6 has-text-spaced">
                  <option>10%</option>
                  <option>20%</option>
                  <option>30%</option>
                </select>
              </div>
            </div>
            <div class="c-modal__alert-item level">
              <div class="level-item">
                in less than
              </div>
              <div class="level-item">
                <select class="c-modal__select is-uppercase is-size-6 has-text-spaced">
                  <option>6</option>
                  <option>12</option>
                  <option>24</option>
                </select>
              </div>
              <div class="level-item">
                hours
              </div>
            </div>
            <div class="c-modal__alert-item level">
              <div class="level-item">
                via
              </div>
              <div class="level-item">
                <select class="c-modal__select is-uppercase is-size-6 has-text-spaced">
                  <option>cell</option>
                  <option>email</option>
                </select>
              </div>
            </div>
          </div>
          <div><a href="#" class="c-modal__action button is-primary has-text-spaced">Set alert &gt;</a></div>
        </div>
      </tab>
    </tabs>
  </div>
</template>

<script>
  import Tabs from './Tabs.vue'

  export default {
    components: {
      Tabs
    },
    data() {
      return {
        price: false,
        movement: false
      }
    },
  }
</script>
