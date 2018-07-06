@extends('front-end.main2')
<style>
  .cards{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  .cardss{
    flex: 0 1 24%;
  }
  .card{
    margin-top: 30px;
    margin-bottom:20px;
  }
  h4{
    text-align: center;
  }
  p{
    text-align: center;
  }
</style>

@section('title','| make we talk')

@section('content')
  <div class="centered">
    <section class="cards">

        @foreach($mwts as $mwt)
      <article class="cardss" >
          <div class="card">
          <a href=" {{route('mwt.show2', $mwt->id)}}">
              <img src="/storage/mwt/{{$mwt->photo}}" alt="" class="card-img-top" style="height:20rem;">
            </a>
          <div class="card-body">
              <h4>{{strtoupper($mwt->speaker)}}</h4>
          <p class="card-text">{{$mwt->topic}}</p>
          </div>
        </div>
      </article>
      @endforeach

    </section>
  </div>





@endsection