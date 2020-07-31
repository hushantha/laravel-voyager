@extends('layouts.app')

@section('content')
    <div class="header-section bg-primary mb-4">
    <div class="background-image" style="background:url('/storage/{{$post->image}}') no-repeat;">
        <h1 class="text-light header-text">Single Post</h1>
    </div> 
    </div>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-8">
                <div class="post-box p-4">
                    <div class="post-thumb">
                        <img src="/storage/{{$post->image}}" class="img-fluid" alt="">
                    </div>
                    <div class="post-meta">
                    <h1 class="article-title pt-3">{{$post->title}}</h1>
                    <p>Posted by <i class="fa fa-user" aria-hidden="true"></i> {{$post->user->name}} on <i class="fa fa-clock" aria-hidden="true"></i> {{$post->created_at->format('F, d, Y')}} </p>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#">tag 1</a></li>
                        <li class="list-inline-item"><a href="#">tag 2</a></li>
                        <li class="list-inline-item"><a href="#">tag3</a></li>
                    </ul>
                    </div>
                    <div class="article-content">
                        {!! $post->body !!}
                    </div>
                </div> <!-- post-box -->
                <div class="box-comments p-4 my-4">
                    <div class="title-box-2">
                      <h4 class="title-comments"><i class="fa fa-comments" aria-hidden="true"></i> Comments (34)</h4>
                    </div>
                    <ul class="list-comments">
                        <li>
                            <div class="comment-avatar">
                                <img src="/storage/{{$post->user->avatar}}" alt="" width="50">
                            </div>
                            <div class="comment-meta">
                                <h4 class="comment-author">Oliver Colmenares</h4>
                                <span>18 Sep 2017</span>
                            </div>
                            <div class="comment-details">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                                ipsam temporibus maiores
                                quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                            </p>
                            <a href="3"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                            </div>
                            <ul class="list-comments">
                                <li>
                                    <div class="comment-avatar">
                                        <img src="/storage/{{$post->user->avatar}}" alt="" width="50">
                                    </div>
                                    <div class="comment-meta">
                                        <h4 class="comment-author">Oliver Colmenares</h4>
                                        <span>18 Sep 2017</span>
                                    </div>
                                    <div class="comment-details">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                                        ipsam temporibus maiores
                                        quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                                    </p>
                                    <a href="3"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <hr>
                        <li>
                            <div class="comment-avatar">
                            <img src="/storage/{{$post->user->avatar}}" alt="" width="50">
                            </div>
                            <div class="comment-meta">
                                <h4 class="comment-author">Carmen Vegas</h4>
                            <span>18 Sep 2017</span>
                            </div>
                            <div class="comment-details">
                            
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                                ipsam temporibus maiores
                                quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis,
                                veritatis deserunt.
                            </p>
                            <a href="3"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                            </div>
                        </li>
                        <hr>
                    </ul> <!-- list-comments -->
                </div> <!-- box-comments -->
                <div class="form-comments p-4">
                    <div class="title-box-2">
                        <h3 class="form-title"><i class="fa fa-reply-all" aria-hidden="true"></i> Leave a Reply</h3>
                    </div>
                    <form class="form-mf">
                        <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                            <input type="text" class="form-control input-mf" id="inputName" placeholder="Name *" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                            <input type="email" class="form-control input-mf" id="inputEmail1" placeholder="Email *" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <input type="url" class="form-control input-mf" id="inputUrl" placeholder="Website">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                            <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                        </div>
                    </form>
                </div> <!-- form-comments -->
            </div> <!-- col-md-8 -->
            <div class="col-md-4">
                <div class="widget-sidebar sidebar-search py-5 px-4 mb-5">
                    <h5 class="sidebar-title"><i class="fa fa-search" aria-hidden="true"></i> Search</h5>
                    <div class="sidebar-content">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-secondary btn-search" type="button">
                              <span class="ion-android-search"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </button>
                          </span>
                        </div>
                      </form>
                    </div>
                </div> <!-- sidebar-search -->
                <div class="widget-sidebar recent-posts  py-5 px-4 mb-5">
                    <h5 class="sidebar-title"><i class="fa fa-bookmark" aria-hidden="true"></i> Recent Post</h5>
                    <div class="sidebar-content">
                      <ul class="list-sidebar">
                        <li>
                          <a href="#">Atque placeat maiores.</a>
                        </li>
                        <li>
                          <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                        </li>
                        <li>
                          <a href="#">Nam quo autem exercitationem.</a>
                        </li>
                        <li>
                          <a href="#">Atque placeat maiores nam quo autem</a>
                        </li>
                        <li>
                          <a href="#">Nam quo autem exercitationem.</a>
                        </li>
                      </ul>
                    </div>
                </div> <!-- recent-posts -->
                <div class="widget-sidebar archive-posts py-5 px-4 mb-5">
                    <h5 class="sidebar-title"><i class="fa fa-archive" aria-hidden="true"></i> Archives</h5>
                    <div class="sidebar-content">
                        <ul class="list-sidebar">
                            <li>
                                <a href="#">September, 2017.</a>
                            </li>
                            <li>
                                <a href="#">April, 2017.</a>
                            </li>
                            <li>
                                <a href="#">Nam quo autem exercitationem.</a>
                            </li>
                            <li>
                                <a href="#">Atque placeat maiores nam quo autem</a>
                            </li>
                            <li>
                                <a href="#">Nam quo autem exercitationem.</a>
                            </li>
                        </ul>
                    </div>
                </div> <!-- archive-posts -->
                <div class="widget-sidebar widget-tags py-5 px-4 mb-5">
                    <h5 class="sidebar-title"><i class="fa fa-tags" aria-hidden="true"></i> Tags</h5>
                    <div class="sidebar-content">
                        <ul>
                            <li>
                                <a href="#">Web.</a>
                            </li>
                            <li>
                                <a href="#">Design.</a>
                            </li>
                            <li>
                                <a href="#">Travel.</a>
                            </li>
                            <li>
                                <a href="#">Photoshop</a>
                            </li>
                            <li>
                                <a href="#">Corel Draw</a>
                            </li>
                            <li>
                                <a href="#">JavaScript</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- col-md-4 -->
        </div> <!-- row -->
    </div> <!-- container -->
@endsection

