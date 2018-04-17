@extends('_layouts.master')

@section('body')

<main>
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column">
          <div class="profile">
            <h1 class="title is-uppercase has-text-spaced is-5">Your Profile</h1>

            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input class="input" type="text" placeholder="e.g Alex Smith">
              </div>
            </div>
            <div class="field is-horizontal">
              <div class="field-label is-normal">
                <label class="label">Name</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <input class="input is-static" type="text" placeholder="e.g. Partnership opportunity">
                  </div>
                  <p class="help">
                    This field is required
                  </p>
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">Email</label>
              <div class="control">
                <input class="input" type="email" placeholder="e.g. alexsmith@gmail.com">
              </div>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="ad" style="height: 200px;"></div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection
