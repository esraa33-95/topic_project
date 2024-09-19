<section class="explore-section section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="mb-4">Browse Topics</h1>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">

                @foreach ($categories as $category)
              
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="design-tab" data-bs-toggle="tab"
                        data-bs-target="#design-tab-{{$category->id}}" type="button" role="tab"
                        aria-controls="design-tab-pane" aria-selected="true">{{$category->category_name}}</button>
                </li>
                @endforeach
                
            </ul>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="tab-content" id="myTabContent">
                      @foreach ($categories as $category)
        
                    <div class="tab-pane fade {{ $loop->first ? 'active' : '' }}" id="design-tab-{{$category->id}}" role="tabpanel"
                        aria-labelledby="design-tab" tabindex="0">
                        
                        <div class="row">
                            @foreach ($category->topics as $topic)
                            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="{{route('topicdetail',$topic->id)}}">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2">{{$topic->title}}</h5>

                                                <p class="mb-0">{{$topic->content}}</p>
                                            </div>

                                            <span class="badge bg-design rounded-pill ms-auto">{{ $topic->views }}</span>
                                        </div>

                                        <img src="{{asset('assets/images/topics/'.$topic->image)}}"
                                            class="custom-block-image img-fluid" alt="">
                                    </a>
                                </div>
                            </div>

                            @endforeach
                        </div>
                        
                    </div>
                    @endforeach

                    
                </div>

            </div>
        </div>
</section>