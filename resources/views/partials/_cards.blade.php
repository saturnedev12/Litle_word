<div class="container-fluid content">
  @foreach ($data as $value)
  <!--debut cart -->
    <div class="card" style="width: 18rem;">
      <div class="card-body">
          <h5 class="card-title">{{ $value->title }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $value->name }}</h6>
          <p class="card-text">{{ $value->texte }}</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link"><i class="fa fa-heart"></i></a>
      </div>
    </div>
  <!--fin cart -->
  @endforeach
</div>
