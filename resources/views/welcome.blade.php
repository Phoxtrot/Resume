
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Responsive Portfolio Template for Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Website Landing Page for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- github calendar css -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/github-calendar@latest/dist/github-calendar-responsive.css"
    />

    <!-- github acitivity css -->
    <link rel="stylesheet" href="{{secure_asset('css/github-activity.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{secure_asset('css/styles.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- ******HEADER****** -->
    <header class="header">
        <div class="container">
            @if(session("message_sent"))
                <div class="alert alert-success">
                {{@session("message_sent")}}
                </div>
            @endif
            <img class="profile-image img-responsive pull-left" src="{{secure_asset('img/profile.JPG') }}" alt="Yusuf Muhammad Toyib" />

            <div class="profile-content pull-left">
                <h1 class="name">Yusuf Muhammad Toyib</h1>
                <h2 class="desc">Web App Developer</h2>
                <ul class="social list-inline">
                    <li><a href="www.linkedin.com/in/yusuf-muhammad-toyib-a30416125"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/Phoxtrot"><i class="fab fa-github" style="size:7x"></i></a></li>

                </ul>
            <a target="_blank" href="https://ingressive.org/" class="mb-2">
                <img width="120" src="https://mesole-emmanuel-portfolio.herokuapp.com/assets/img/i4g2.png" />
            </a><br>
            <a target="_blank" href="https://hng.tech/" class="mb-2">
                <img width="120" src="https://mesole-emmanuel-portfolio.herokuapp.com/assets/img/hng2.png" />
            </a><br>
            <a target="_blank" href="https://internship.zuri.team/" class="mb-2">
                <img width="120" src="https://mesole-emmanuel-portfolio.herokuapp.com/assets/img/zuri.png" />
            </a><br>
            </div><!--//profile-->
            <a class="btn btn-cta-primary pull-right" href="#" ><i class="fa fa-paper-plane"></i> Contact Me</a>
        </div><!--//container-->
    </header><!--//header-->

    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">About Me</h2>
                        <div class="content">
                            <p>Junior Web Developer with around 1 plus years of experience in Web development, and SQL database. Experience in  Development of API using php/Laravel. Experience of HTML, XML,  JavaScript,Cascaded Style Sheets (CSS), php, python. Experience in OOPs concept and test strategies like mocking and pairwise testing. </p>

        <p>It's a good idea to include your personal interests and hobbies as well. Commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

               <section class="latest section">
                    <div class="section-inner">
                        <h2 class="heading">Latest Projects</h2>
                        <div class="content">

                            <div class="item featured text-center">
                                <h3 class="title"><a href="https://drive.google.com/file/d/13lU-ed4U_a7oKVnzSNz43sCsOURvtcyk/view?usp=sharing" target="_blank">TrackFundz</a></h3>
                                <p class="summary">An app for tracking financial expenses and incomes and creating budgets </p>
                                <div class="featured-image">
                                    <a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-products-velocity/" target="_blank">
                                    <img class="img-responsive project-image" src="{{secure_asset('img/trackfundz.jpg') }}" alt="trackfundz" />
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">New</div>
                                        </div>
                                    </div>

                                <div class="desc text-left">
                                    <p>Trackfundz is a personal finance tracker where users can mnaull input their incomenand expenses on a daily basis. Users can also set monthly or yearly budgets to enable them them know when they are exceddigna set limit.</p>
                                    <p>It also has a graphcial dashboard which summarizes users incomes and expenses for a selected date range and specific to a particular category or type</p>
                                    <p>The objective of the app is tohelp users to be accountable and be wise spenders and track the exact amount they are spending on a particular item   </p>
                                </div><!--//desc-->
                                <!-- <a class="btn btn-cta-secondary" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-products-velocity/" target="_blank"><i class="fa fa-thumbs-o-up"></i> Back my project</a>                  -->
                            </div><!--//item-->
                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">
                                <img class="img-responsive project-image" src="{{secure_asset('img/hackcode.png') }}" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">Hackcode Bootcamp</a></h3>
                                    <p>Hackcode is a summer bootcamp organised by brainycode lab to expose and train beginners in web develoment and programming in general</p>

                                </div><!--//desc-->
                            </div><!--//item-->
                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">
                                <img class="img-responsive project-image" src="{{secure_asset('img/iec.png') }}" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">IEC- Website for an engineering consulting firm in Ilorin </a></h3>
                                    <p>A contact website page for Index Engineering Consults ltd. One of the top engineering firms in Kwara state.</p>
                                </div><!--//desc-->
                            </div><!--//item-->

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Work Experience</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Intern Backend Developer - <span class="place"><a href="#">i4G</a></span> <span class="year">(2021)</span></h3>
                                <p>Worked with other team members in building a finance tracking app as a backend developer </p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Intern Backend Developer - <span class="place"><a href="#">Hackcode</a></span> <span class="year">(2018-2019)</span></h3>
                                <p>Worked with other team members in creating an Event planning app   </p>
                            </div><!--//item-->

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->
                <section class="github section">
                    <div class="section-inner">
                        <h2 class="heading">My GitHub</h2>
                        <div class="calendar">

                        </div>


                    </div><!--//secton-inner-->
                </section><!--//section-->
                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Contact me</h2>
                        <div class="content">
                            <div >
                                <div class="well well-sm">
                                    @if(session("message_sent"))
                                        <div class="error">
                                        {{@session("message_sent")}}
                                         </div>
                                    @endif
                                  <form class="form-horizontal" action="{{route('contact.send')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                  <fieldset>
                                    <legend class="text-center">Contact us</legend>

                                    <!-- Name input-->
                                    <div class="form-group">
                                      <label class="col-md-3 control-label" for="name">Name</label>
                                      <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control" value="{{old('name')}}">
                                        @error('name')
                    						<div class="error" style="color:red">
                   							    {{$message}}
                    						</div>
                						@enderror
                                      </div>
                                    </div>

                                    <!-- Email input-->
                                    <div class="form-group">
                                      <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                      <div class="col-md-9">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control" value="{{old('email')}}">
                                        @error('email')
                    						<div class="error" style="color:red">
                   							    {{$message}}
                    						</div>
                						@enderror
                                      </div>
                                    </div>

                                    <!-- Message body -->
                                    <div class="form-group">
                                      <label class="col-md-3 control-label" for="message">Your message</label>
                                      <div class="col-md-9">
                                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5" value="{{old('message')}}"></textarea>
                                        @error('message')
                    						<div class="error" style="color:red">
                   							    {{$message}}
                    						</div>
                						@enderror
                                      </div>
                                    </div>

                                    <!-- Form actions -->
                                    <div class="form-group">
                                      <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                      </div>
                                    </div>
                                  </fieldset>
                                  </form>
                                </div>
                              </div>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->
            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                 <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>Lagos, Nigeria</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="#">yinkarhy@gmail.com</a></li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//aside-->

                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Skills</h2>
                        <div class="content">

                            <div class="skillset">

                                <div class="item">
                                    <h3 class="level-title">PHP/Laravel<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="You can use the tooltip to add more info...">Intermediate</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="60%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Javascript <span class="level-label">Beginner</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="40%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">HTML5 &amp; CSS3  S<span class="level-label">Expert</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="80%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">python<span class="level-label">Pintermediate</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="50%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->
                                <div class="item">
                                    <h3 class="level-title">Vue.js<span class="level-label">Beginner</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="40%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                            </div>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="testimonials aside section">
                    <div class="section-inner">
                        <h2 class="heading">Testimonials</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">
                                    <p><i class="fa fa-quote-left"></i>Toyib is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
                                </blockquote>
                                <p class="source"><span class="name">Edward Damilola</span><br /><span class="title"> CEO Brainy Code Labs</span></p>
                            </div><!--//item-->


                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading">Education</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> BEng</h3>
                                <h4 class="university">University of Ilorin <span class="year">(2014-2019)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="languages aside section">
                    <div class="section-inner">
                        <h2 class="heading">Languages</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <span class="title"><strong>Yoruba:</strong></span>
                                    <span class="level">Native Speaker <br class="visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                                </li><!--//item-->
                                <li class="item">
                                    <span class="title"><strong>English:</strong></span>
                                    <span class="level">Professional proficiency <br class="visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-half"></i> </span>
                                </li><!--//item-->
                                <li class="item">
                                    <span class="title"><strong>Spanish:</strong></span>
                                    <span class="level">Begineer <br class="visible-sm visible-xs"/></i> <i class="fa fa-star"></i> <i class="fa fa-star-half"></i></span>
                                </li><!--//item-->
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="list music aside section">
                    <div class="section-inner">
                        <h2 class="heading">Favourite coding music</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-headphones"></i> Era-Ameno</a></li>
                                <li><i class="fa fa-headphones"></i> The weeknd</li>
                                <li><i class="fa fa-headphones"></i> Freya Ridings</li>
                                <li><i class="fa fa-headphones"></i> Sasha sloan</li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->



            </div><!--//secondary-->
        </div><!--//row-->
    </div><!--//masonry-->

    <!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by XO </small>
        </div><!--//container-->
    </footer><!--//footer-->

    <!-- Javascript -->
    <script type="text/javascript" src="{{secure_asset('js/jquery-1.11.3.min.js') }}"></script>
    <script type="text/javascript" src="{{secure_asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{secure_asset('js/jquery.rss.min.js') }}"></script>

    <!-- Loading stuff -->
    <script>
        // or enable responsive functionality:
        GitHubCalendar(".calendar", "Phoxtrot", { responsive: true });

        // Use a proxy
        GitHubCalendar(".calendar", "Phoxtrot", {
           proxy (username) {
             return fetch(`https://your-proxy.com/github?user=${Phoxtrot}`)
           }
        }).then(r => r.text())
    </script>



    <!-- github calendar plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/3.0.2/es6-promise.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/0.10.1/fetch.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script
        src="https://unpkg.com/github-calendar@latest/dist/github-calendar.min.js">
    </script>
    <!-- custom js -->
    <script type="text/javascript" src="{{secure_asset('js/main.js') }}"></script>
</body>
</html>

