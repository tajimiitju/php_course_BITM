<?php
include_once 'include/header.php';
?>
<div class="container">
    <!------------------------PAGE-AREA START--------------------->
    <div class="all-page-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="all-page-text">
                        <h1>Blog</h1>
                        <ul>
                            <li><a href="index.php">home<span><i class="fa fa-angle-right"></i></span></a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------PAGE-AREA END--------------------->
    <!------------------------BLOG-AREA START-------------------->
    <div class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="blog-left">
                        <div class="single-blog">
                            <img src="img/blog1.jpg" alt="">
                            <h3>PM donates 3M taka to the flood-striken people</h3>
                            <div class="blog-meta">
                                <a href="#"><i class="fa fa-user"></i> rasel ahmed</a> <a href="#"><i class="fa fa-clock-o"></i> january 24, 2017</a> <a href="#"><i class="fa fa-comment"></i> 5</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ad facere alias laudantium dolorem? Ipsa magni eius sequi dolorem, eum cupiditate dignissimos mollitia ex reprehenderit, recusandae, voluptas eligendi blanditiis, nihil modi et tenetur. Molestias totam, nesciunt explicabo! Autem et totam, optio dolorum quas saepe sequi alias, eius iure, necessitatibus atque!</p>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates necessitatibus officia culpa dolor consectetur labore recusandae accusamus doloribus ipsum ipsam possimus, nesciunt temporibus voluptatum expedita perferendis unde odit, consequuntur voluptas.</p>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad deleniti perspiciatis eos reiciendis, voluptates ullam fuga quasi rem, labore saepe eligendi sunt, corporis et non doloremque velit sapiente recusandae autem.</p>
                        </div>
                        <!-- .single-blog -->
                    </div>
                    <div class="comments-area ">
                        <h3 class="comment-title"> 3 Comments on this post</h3>
                        <ul class="comment-list">
                            <li class="comment-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="img/author.jpg" alt="">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="comment-metadata">
                                            <h4>john doe</h4>
                                            <p>6 hours ago</p>
                                        </div>
                                        <div class="comment-content">
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, velfacilisis at vero eros et accumsan et iusto odio dignissim.</p>
                                        </div>
                                        <a href="#" class="edu-btn">Reply <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="img/author.jpg" alt="">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="comment-metadata">
                                            <h4>john doe</h4>
                                            <p>6 hours ago</p>
                                        </div>
                                        <div class="comment-content">
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, velfacilisis at vero eros et accumsan et iusto odio dignissim.</p>
                                        </div>
                                        <a href="#" class="edu-btn">Reply <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="comment-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="img/author.jpg" alt="">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="comment-metadata">
                                            <h4>john doe</h4>
                                            <p>6 hours ago</p>
                                        </div>
                                        <div class="comment-content">
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, velfacilisis at vero eros et accumsan et iusto odio dignissim.</p>
                                        </div>
                                        <a href="#" class="edu-btn">Reply <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h3 class="comment-form-title">Leave a comment</h3>
                        <div class="comment-form-wrap">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <p><input class="form-control" placeholder="Your name *" type="text"></p>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <p><input class="form-control" placeholder="Your email *" type="email"></p>
                                    </div>
                                </div>
                                <p><textarea style="height:150px" class="form-control" placeholder="Message*" name="message" id="message" cols="30" rows="10"></textarea></p>
                                <input value="Submit" type="submit">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="blog-right">
                        <div class="blog-search clearfix">
                            <form role="search" method="get" class="search-form" action="#">
                                <input class="form-control" type="search" placeholder="Search..." value="" name="s">
                                <input type="submit" value="search">
                            </form>
                        </div>
                        <div class="single-right-blog-widget">
                            <h4>Recent Posts</h4>
                            <ul>
                                <li><a href="#">FundBD is growing up with your love & support!<span>25th June, 2016 </span></a></li>
                                <li><a href="#">Genius Raju finally got funded for his drone project<span>25th June, 2016 </span></a></li>
                                <li><a href="#">20 lacs of BDT has been raised for Rohingyas<span>25th June, 2016 </span></a></li>
                                <li><a href="#">Tajim Akhund wants to set a milestone with his startup<span>25th June, 2016 </span></a></li>
                                <li><a href="#">Will Momin get defeated to cancer for money?<span>25th June, 2016 </span></a></li>
                            </ul>
                        </div>
                        <!-- .single-right-blog-widget -->
                        <div class="single-right-blog-widget">
                            <h4>Archives </h4>
                            <ul>
                                <li><a href="#"> january 2017 </a></li>
                                <li><a href="#"> february 2017 </a></li>
                                <li><a href="#"> march 2017 </a></li>
                                <li><a href="#"> april 2017 </a></li>
                                <li><a href="#"> may 2017 </a></li>
                            </ul>
                        </div>
                        <!-- .single-right-blog-widget -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------------------BLOG-AREA END--------------------->
</div>
<!------------------------QUOTE-AREA START--------------------->
<div class="quote-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <h2>Manage Funds in a smart way!</h2>
            </div>
            <div class="col-md-4 col-sm-4">
                <a href="contact.html" class="quote-btn">Join Now</a>
            </div>
        </div>
    </div>
</div>
<!------------------------QUOTE-AREA END--------------------->
<?php
include_once 'include/footer.php';
?>