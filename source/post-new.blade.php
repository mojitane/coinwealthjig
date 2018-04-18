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
            {{-- <div class="level">
              <div class="level-left">
                <div class="level-item">
                  <input class="input is-static is-size-7" type="text" value="www.coinwealth.pro/community/thread/user/" readonly style="min-width: 260px;">
                </div>
                <div class="level-item">
                  <input class="input is-small" type="text" placeholder="custom-url">
                </div>
                <div class="level-item">
                  <a href="#" class="button is-small">Update</a>
                </div>
              </div>
            </div> --}}
            <div class="level is-mobile">
              <div class="level-left">
                <div class="level-item"><i class="fas fa-align-left"></i></div>
                <div class="level-item"><i class="fas fa-align-center"></i></div>
                <div class="level-item"><i class="fas fa-align-right"></i></div>
                <div class="level-item"><i class="fas fa-bold"></i></div>
                <div class="level-item"><i class="fas fa-quote-right"></i></div>
              </div>
              <div class="level-right">
                <div class="level-item">Insert:</div>
                <div class="level-item"><i class="fas fa-camera"></i></div>
                <div class="level-item"><i class="fas fa-link"></i></div>
              </div>
            </div>
            <div class="field">
              <div class="control">
                <textarea class="textarea" placeholder="Your new post" rows="10"></textarea>
              </div>
            </div>
            <div class="buttons">
              <a href="#" class="button is-outlined is-primary is-uppercase has-text-spaced">Publish</a>
              <a href="#" class="button is-outlined is-uppercase has-text-spaced">Cancel</a>
            </div>
          </div>
        </div>
        {{-- <div class="column">
          <div class="l-post-new__sidebar-header">
            <a href="#" class="button is-outlined is-uppercase has-text-spaced is-small">Save draft</a>
          </div>
          <p class="is-uppercase has-text-spaced l-post-new__sidebar-heading">Format</p>
          <ul>
            <li><i class="far fa-square"></i> Standard</li>
            <li><i class="far fa-square"></i> Gallery</li>
            <li><i class="far fa-square"></i> Quote</li>
            <li><i class="far fa-square"></i> Video</li>
          </ul>
          <p class="is-uppercase has-text-spaced l-post-new__sidebar-heading">Cover Image</p>
          <div class="field">
            <div class="file is-small is-boxed">
              <label class="file-label">
                <input class="file-input" type="file" name="resume">
                <span class="file-cta">
                  <span class="file-icon">
                    <i class="fas fa-upload"></i>
                  </span>
                </span>
              </label>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
</main>

@endsection
