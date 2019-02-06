<!-- About -->
<div id="about" class="section md-padding">

  <div class="container">

      <div class="row mt centered ">
        <div class="col-lg-4 col-lg-offset-4">
          <h3>What Is Happening?</h3>
          <hr>
        </div>
      </div>
      <!-- /row -->
      @foreach($data->chunk(3) as $chunk)
        <div class="row mt">
          @foreach( $chunk as $article)


          <div class="col-lg-4 col-md-4 col-xs-12 desc ">
            <a class="b-link-fade b-animate-go" href="#"> <img width="350" src="img/portfolio/port04.jpg" alt="" />
              <div class="b-wrapper">
                  <h4 class="b-from-left b-animate b-delay03">{{$article->TITRE}}</h4>
                  <p class="b-from-right b-animate b-delay03">Read More.</p>
              </div>
            </a>

            <p>{{$article->TITRE}}</p>
            <p style = " overflow: hidden;display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical; max-height: 96px;min-height: 96px;   "class="lead">
              {{$article->DESCRIPTION}}
            </p>
            <hr-d>
              <p class="time"><i class="fa fa-user-o"></i> {{$article->name}} | <i class="fa fa-calendar"></i> {{ date('d M y H:m', strtotime($article->DATECREATION)) }}</p>
          </div>
            @endforeach
      </div>
      @endforeach

      <!-- /row -->
    </div>
    <!-- /container -->



</div>
<!-- /About -->