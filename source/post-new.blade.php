@extends('_layouts.master')

@section('body')

<main>
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-9">
          <div class="">
            <h1 class="title is-uppercase has-text-spaced is-5">Add new post</h1>
            <div class="field">
              <div class="control">
                <input class="input" type="text" placeholder="Title">
              </div>
            </div>
            <div class="field">
              <div class="control">
                <div id="js-quill-editor" style="min-height: 300px;">
                  <p>My new community post!</p>
                  <p><br></p>
                  <p>Some initial <strong>bold</strong> text</p>
                  <p><br></p>
                </div>
              </div>
            </div>
            <div class="buttons">
              <a href="#" class="button is-outlined is-primary is-uppercase has-text-spaced">Publish</a>
              <a href="#" class="button is-outlined is-uppercase has-text-spaced">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection
