<section class="section-padding section-bg">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <h3 class="mb-4">Trending Topics</h3>
            </div>
            @foreach ($trendingtopics as $topic)
            @if ($loop->first)
            <div class="col-lg-6 col-md-6 col-12 mt-3 mb-4 mb-lg-0">
                <div class="custom-block bg-white shadow-lg">
                    <a href="{{route('topicdetail',$topic->id)}}">
                        <div class="d-flex">
                            <div>
                                <h5 class="mb-2">{{$topic->title}}</h5>

                                <p class="mb-0">{{$topic->content}}</p>
                            </div>

                            <span class="badge bg-finance rounded-pill ms-auto">{{ $topic->views }}</span>
                        </div>

                        <img src="{{asset('assests/images/topics/'.$topic->image)}}" class="custom-block-image img-fluid" alt="">
                    </a>
                </div>
            </div>
          @else
            <div class="col-lg-6 col-md-6 col-12 mt-lg-3">
                <div class="custom-block custom-block-overlay">
                    <div class="d-flex flex-column h-100">
                        <img src="{{asset('assests/images/topics/'.$topic->image)}}" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block-overlay-text d-flex">
                            <div>
                                <h5 class="text-white mb-2">{{$topic->title}}</h5>

                                <p class="text-white">{{$topic->content}}</p>

                                <a href="{{route('topicdetail',$topic->id)}}" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                            </div>

                            <span class="badge bg-finance rounded-pill ms-auto">{{ $topic->views }}</span>
                        </div>

                        <div class="social-share d-flex">
                            <p class="text-white me-4">Share:</p>

                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-pinterest"></a>
                                </li>
                            </ul>

                            <a href="#top" class="custom-icon bi-bookmark ms-auto" onclick="incrementViews({{ $topic->id }})"></a>
                            <script>
                                function incrementViews(topicId) {
                                    $.get(`/topic/${topicId}/increment-views`, function(data) {
                                        $('#views-count-' + topicId).text(data.views + ' views');                                  
                                    }).fail(function() {
                                        alert('Error updating view count.');
                                    });
                                }
                            </script>
                        </div>

                        <div class="section-overlay"></div>
                    </div>
                </div>
            </div>
            
            @endif
            @endforeach
        </div>
    </div>
</section>