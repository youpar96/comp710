<div class="form-group">
    @if (\Session::has('success'))
      <div class="alert alert-success font-weight-bold">
          <p>{{ \Session::get('success') }}</p>
      </div>
    @endif
</div>