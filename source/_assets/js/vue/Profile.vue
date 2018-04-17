<template>
  <div>
    <h1 class="title is-uppercase has-text-spaced is-5">Your Profile <span @click="toggleEdit"><i class="fas fa-pencil-alt c-profile__editbutton"></i></span></h1>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Picture</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <div class="image is-64x64">
              <img src="https://picsum.photos/64/64" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label"></label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <div class="file is-small" v-show="editing">
              <label class="file-label">
                <input class="file-input" type="file" name="resume">
                <span class="file-cta">
                  <span class="file-icon">
                    <i class="fas fa-upload"></i>
                  </span>
                  <span class="file-label">
                    Change...
                  </span>
                </span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">E-Mail</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <input type="email" value="alexsmith@gmail.com" :class="['input', {'is-static': !editing}]" v-bind:readonly="!editing">
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Username</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <input type="text" value="alexsmithcoinwealth" :class="['input', {'is-static': !editing}]" v-bind:readonly="!editing">
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Password</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <input type="password" value="asdasdasdasd" :class="['input', {'is-static': !editing}]" v-bind:readonly="!editing">
          </div>
        </div>
      </div>
    </div>

    <div class="field is-horizontal">
      <div class="field-label is-normal">
        <label class="label">Phone Number</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <input type="tel" value="123 456 789" :class="['input', {'is-static': !editing}]" v-bind:readonly="!editing">
          </div>
        </div>
      </div>
    </div>

    <div class="buttons" v-show="editing">
      <a href="#" @click="toggleEdit" class="button is-outlined is-primary is-uppercase has-text-spaced">Update</a>
      <a href="#" @click="toggleEdit" class="button is-outlined is-uppercase has-text-spaced">Cancel</a>
    </div>

  </div>
</template>

<script>
  export default {
    data() {
      return {
        editing: false,
      }
    },
    computed: {
    },
    methods: {
      toggleEdit: function () {
        this.editing = !this.editing;
        console.log('switched');
        console.log(this.editing);
      }
    }
  }
</script>
