<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Site Title -->
    <title>Subash's Portfolio</title>

    <meta name="description" content="ePortfolio">
    <meta name="keywords" content="subash,portfolio,resume">

    <!-- To ensure proper rendering on mobile devices and disable zooming capabilities -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Open+Sans|Tangerine:700" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="Style/eportfolio.css" rel="stylesheet">

    <!-- SVG skills icons -->
    <link rel="stylesheet"
        href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<!-- The data-spy (specifies scrollable area) and data-target(makes sure navebar connected to scrollable area) are part of the built-in Bootstrap scrollspy -->

<body id="home" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="66">
    <!-- wrapping entire content in container-fluid gives a left and right border with the normal body background color 
<div class="container-fluid"> -->
    <!-- NAVBAR START -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#subash-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand menus" href="#home">Subash.</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="subash-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden"><a href="#home"></a></li>
                    <li class="page-scroll"><a href="#about">About</a></li>
                    <li class="page-scroll"><a href="#portfolio">Portfolio</a></li>
                    <li class="page-scroll"><a href="#skills">Skills</a></li>
                    <li class="page-scroll"><a href="#resume">Resume</a></li>
                    <li class="page-scroll"><a href="#contact">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <!-- NAVBAR END -->

    <!-- LANDING PAGE START -->
    <div id="landing">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <div class="landing-text">
                        <h1><span class="text-cursive">I'm Subash Shrestha</span>.</h1>
                        <h3>Software Developer</h3>
                        <div class="page-scroll">
                            <a href="#about" class="btn btn-lg btn-custom">Know Me Better</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LANDING PAGE END -->


    <!-- ABOUT SECTION START -->
    <section id="about" class="section">
        <div class="container sec-wrapper">
            <div class="sec-content">
                <div class="row">
                    <div class="match-height">

                        <!-- ABOUT TEXT START -->
                        <div class="about-text">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="sec-title text-center">HI, MY NAME IS SUBASH SHRESTHA</h2>

                                    <h4 class="sec-subtitle text-center">I am determined to find a solution or create one if needed.</h4>

                                    <span class="separator center"></span>

                                    <p class="text-dark">Over 1 year of working experience in developing responsive
                                        web/desktop applications using Java, Springboot framework.</p>
                                    <p class="text-dark">Proficient in JavaScript frameworks and libraries such as, react.js
                                        and jQuery.</p>
                                    <p class="text-dark">Experience in creating and utilizing RESTful APIs using NodeJS
                                        and ExpressJS.</p>
                                    <p class="text-dark">Worked with both relational (Oracle, MySQL), as well as document based
                                        (MongoDB) database systems.</p>
                                    <p class="text-dark">Well-versed in practicing Agile methodologies.</p>
                                    <p class="text-dark">Enjoy tackling on challenges projects.</p>

                                </div><!-- //.col-md-12 -->
                            </div><!-- //.row -->
                        </div> <!-- //ABOUT TEXT -->
                    </div><!-- //.row -->
                </div><!-- //.section-content -->
            </div><!-- //.container -->
    </section>
    <!-- //ABOUT SECTION -->

    <!-- STRENGTHS SECTION START -->
    <section id="strengths" class="section">
        <div class="container-fluid sec-wrapper">
            <div class="sec-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="sec-title">My Strengths</h2>

                        <h4 class="sec-subtitle text-center">Overcoming challenges with determination, strength, and confidence is what drives me.</h4>

                        <span class="separator center"></span>
                    </div>
                    <!-- //.col-md-12 -->
                </div>
                <!-- //.row -->

                <div class="row">
                    <div class="col-md-12">

                        <!-- COLUMN CHART START -->
                        <div class="column-chart">
                            <div class="legend legend-left hidden-xs">
                                <h3 class="legend-title">ME</h3>
                            </div>
                            <!-- //.legend -->

                            <div class="legend legend-right hidden-xs">
                                <div class="item">
                                    <h4>Best</h4>
                                </div>

                                <div class="item">
                                    <h4>Better</h4>
                                </div>

                                <div class="item">
                                    <h4>Pretty Good</h4>
                                </div>

                                <div class="item">
                                    <h4>Good</h4>
                                </div>
                            </div>
                            <!-- //.legend -->

                            <div class="chart clearfix">
                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">85%</span>

                                        <div class="item-progress" data-percent="85">
                                            <span class="title">Communication</span>
                                        </div><!-- //.item-progress -->
                                    </div><!-- //.bar -->
                                </div><!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">90%</span>

                                        <div class="item-progress" data-percent="90">
                                            <span class="title">Confident</span>
                                        </div><!-- //.item-progress -->
                                    </div><!-- //.bar -->
                                </div><!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">98%</span>

                                        <div class="item-progress" data-percent="98">
                                            <span class="title">Commitment</span>
                                        </div><!-- //.item-progress -->
                                    </div><!-- //.bar -->
                                </div><!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">86%</span>

                                        <div class="item-progress" data-percent="86">
                                            <span class="title">Creative</span>
                                        </div><!-- //.item-progress -->
                                    </div><!-- //.bar -->
                                </div><!-- //.item -->

                                <div class="item">
                                    <div class="bar">
                                        <span class="percent">85%</span>

                                        <div class="item-progress" data-percent="85">
                                            <span class="title">Cooperative</span>
                                        </div><!-- //.item-progress -->
                                    </div><!-- //.bar -->
                                </div><!-- //.item -->
                            </div><!-- //.chart -->
                        </div> <!-- //COLUMN CHART END -->

                    </div><!-- //.col-md-12 -->
                </div><!-- //.row -->
            </div><!-- //.section-content -->
        </div><!-- //.container -->
    </section>
    <!-- //STRENGTHS SECTION -->

    <!-- MODAL FOR EACH PROJECT -->
    <!-- proj3 start -->
    <div id="karpool" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="modal-title">
                        <h4 style="color:black"><strong>Enable</strong></h4>
                    </div>
                </div> <!-- /.modal-header -->

                <div class="modal-body modal-text">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <strong>Client:</strong> St. Cloud State University
                        </div> <!-- /.col-md-6 -->
                        <div class="col-md-6 col-sm-12">
                            <strong>Role:</strong> Developer
                        </div> <!-- /.col-md-6 -->
                    </div> <!-- /.row1 -->
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <strong>Team Size:</strong> 6
                        </div> <!-- /.col-md-6 -->
                        <div class="col-md-6 col-sm-12">
                            <strong>Period:</strong> Sep 2020 - May 2021
                        </div> <!-- /.col-md-6 -->
                    </div> <!-- /.row2 -->
                    <span class="separator center"></span>
                    <div class="row">
                        <div class="col-md-12" style="padding-bottom:5px;">
                            <strong>PROJECT DESCRIPTION</strong>
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row1 -->
                    <div class="row">
                        <div class="col-md-12">
                            <p>Designed a mobile app in React Native to help commuters reach a common destination in more cost-effective manner
                            through rideshare. Coordinated project deliverables and efforts across all five other team members throughout the project using Scrum
                            with Agile development methodology to reach our weekly sprint goals for 10 weeks.</p>
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row2 -->
                </div> <!-- /.modal-body -->

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- //.proj3 -->


   

    <!-- PORTFOLIO SECTION START -->
    <section id="portfolio" class="section">
        <div class="container sec-wrapper">
            <div class="sec-content">
                <div class="row match-height">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="sec-title text-center">My Projects</h2>
                            <h4 class="sec-subtitle text-center">I continually expand my portfolio to better tackle a growing number of challenges.</h4>
                            <span class="separator center"></span>
                        </div><!-- //.col-md-12 -->
                    </div><!-- //.row -->
                    <!-- PROJECTS START -->
                    <div class="projects">

                        <div class="row"> <!-- row -->
                            <!-- project9 -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <figure class="figure project-holder">
                                    <img class="figure-img img-rounded img-fluid img-responsive" src="Images/Karpool.jpeg"
                                        alt="" />
                                    <figcaption class="figure-caption">
                                        <h2>Karpool App</h2>
                                        <h4> Developer</h4>
                                        <div>
                                            <a data-toggle="modal" href="#karpool">
                                                <span class="glyphicon glyphicon-new-window align-left"
                                                    aria-hidden="true"></span></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div><!-- //.project9 -->

                        </div> <!-- //.row -->
                    </div> <!-- //PROJECTS -->
                </div><!-- //.row -->
            </div><!-- //.section-content -->
        </div><!-- //.container -->
    </section>
    <!-- //PORTFOLIO SECTION -->

    <!-- SKILLS SECTION START -->
    <section id="skills" class="section">
        <div class="container-fluid sec-wrapper">
            <div class="sec-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="sec-title">My Skills</h2>

                        <h4 class="sec-subtitle text-center">Knowing what to do next is a matter of wisdom, while knowing how to do it requires skill.</h4>

                        <span class="separator center"></span>
                    </div><!-- //.col-md-12 -->
                </div><!-- //.row1 -->

                <!-- Programming Languages and J2EE technologies -->
                <div class="row skill-logo-row">
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="Java">
                        <img class="img skill-logo-img" src="Images/skills/java.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="MongoDB">
                        <img class="img skill-logo-img" src="Images/skills/jee.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="Spring">
                        <img class="img skill-logo-img" src="Images/skills/spring.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="RESTful">
                        <img class="img skill-logo-img" src="Images/skills/rest.png" />
                    </span>
                </div>
                <!-- Web technologies -->
                <div class="row skill-logo-row">
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="HTML5">
                        <img class="img skill-logo-img" src="Images/skills/html5.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="CSS3">
                        <img class="img skill-logo-img" src="Images/skills/css3.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="JavaScript">
                        <img class="img skill-logo-img" src="Images/skills/js.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="React">
                        <img class="img skill-logo-img" src="Images/skills/reactI80.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="jQuery">
                        <img class="img skill-logo-img" src="Images/skills/jquery.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="Bootstrap">
                        <img class="img skill-logo-img" src="Images/skills/bootstrap.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="NodeJS">
                        <img class="img skill-logo-img" src="Images/skills/node.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="XML">
                        <img class="img skill-logo-img" src="Images/skills/xml.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="JSON">
                        <img class="img skill-logo-img" src="Images/skills/json.png" />
                    </span>
                </div>
                <!-- Database Systems -->
                <div class="row skill-logo-row">
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="Oracle DB">
                        <img class="img skill-logo-img" src="Images/skills/oracle.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="MySQL">
                        <img class="img skill-logo-img" src="Images/skills/mysql.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="MongoDB">
                        <img class="img skill-logo-img" src="Images/skills/mongo.jpg" />
                    </span>
                </div>
                <!-- Application/Web Servers -->
                <div class="row skill-logo-row">
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="Apache Tomcat">
                        <img class="img skill-logo-img" src="Images/skills/tomcat.png" />
                    </span>
                </div>
                <!-- Build Tools -->
                <div class="row skill-logo-row">
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="Maven">
                        <img class="img skill-logo-img" src="Images/skills/maven.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="Git">
                        <img class="img skill-logo-img" src="Images/skills/git.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="GitHub">
                        <img class="img skill-logo-img" src="Images/skills/github.png" />
                    </span>
                </div>
                <!-- Testing Tools -->
                <div class="row skill-logo-row">
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="JUnit">
                        <img class="img skill-logo-img" src="Images/skills/junit.png" />
                    </span>
                </div>
                <!-- IDEs -->
                <div class="row skill-logo-row">
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="Eclipse">
                        <img class="img skill-logo-img" src="Images/skills/eclipse.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="IntelliJ">
                        <img class="img skill-logo-img" src="Images/skills/Intellij.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="Visual Studio Code">
                        <img class="img skill-logo-img" src="Images/skills/vscode.png" />
                    </span>
                </div>
                <!-- Operating Systems -->
                <div class="row skill-logo-row">
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="Windows">
                        <img class="img skill-logo-img" src="Images/skills/windows.png" />
                    </span>
                    <span aria-haspopup="true" data-toggle="tooltip" data-placement="bottom" title="UNIX">
                        <img class="img skill-logo-img" src="Images/skills/unix.png" />
                    </span>
                </div>

            </div><!-- //.section-content -->
        </div><!-- //.container -->
    </section>
    <!-- //SKILLS SECTION -->


    <!-- RESUME SECTION START -->
    <section id="resume" class="section">
        <div class="container sec-wrapper">
            <div class="sec-content">
                <div class="row">

                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="sec-title text-center">My Resume</h2>
                            <h4 class="sec-subtitle text-center">I enjoy pushing myself to my limits and never pass up a challenge.</h4>
                            <span class="separator center"></span>
                        </div><!-- //.col-md-12 -->
                    </div><!-- //.row -->

                    <!-- EXPERIENCE -->
                    <div class="row experience" style="padding-bottom:20px;">
                        <div class="col-md-10 col-md-offset-1">
                            <h3 class="text-center" style="padding:20px 0 50px;">WORK EXPERIENCE</h3>

                            <div class="panel-group resume" id="accordion" role="tablist" aria-multiselectable="true">
                                <!-- resume-item9 -->
                                <div class="resume-item">
                                    <div class="resume-year">
                                        <span class="resume-year">Feb 2022...</span>
                                    </div>
                                    <!-- //.resume-year -->

                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="heading9">
                                            <div class="panel-title">
                                                <div class="resume-btn">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#work9" aria-expanded="true" aria-controls="work9"></a>
                                                </div><!-- //.resume-btn -->
                                                <h4 class="resume-title">Software Developer - T-mobile</h4>
                                            </div>
                                            <!-- //.panel-title -->
                                        </div>
                                        <!-- //.panel-heading -->

                                        <div id="work9" class="panel-collapse collapse in" role="tabpanel"
                                            aria-labelledby="heading9">
                                            <div class="panel-body text-dark">
                                                <div class="subheading1">Key Responsibilities:</div>
                                                <p>
                                                <ul style="list-style-type:disc">
                                                    <li>Involved in SDLC cycle like Analysis, Designing, developing, Testing, and deploying the Enterprise applications
                                                        using
                                                        Java/J2EE platform and Object-Oriented Design Patterns based on business requirements. </li>
                                                    <li>Used Microservices architecture, with Spring Boot based services interacting through a combination of REST and
                                                        Spring
                                                        Boot. </li>
                                                    <li>Developed database persistence layer components for mapping an object-oriented domain model to the relational
                                                        database
                                                        using ORM framework such as Hibernate and Spring JPA.</li>
                                                    <li>Responsible for deployments of the application in pre-production environments.</li>
                                                </ul>
                                                </p>
                                            </div><!-- //.panel-body -->
                                        </div><!-- //.panel-collapse -->
                                    </div><!-- //.panel -->
                                </div><!-- //.resume-item9 -->

                                <!-- resume-item8 -->
                                <div class="resume-item">
                                    <div class="resume-year">
                                        <span class="resume-year">May - Aug 2021</span>
                                    </div>
                                    <!-- //.resume-year -->

                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="heading8">
                                            <div class="panel-title">
                                                <div class="resume-btn">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#work8" aria-expanded="true"
                                                        aria-controls="work8"></a>
                                                </div><!-- //.resume-btn -->
                                                <h4 class="resume-title">Software Developer Intern - NEUROTYPE INC.</h4>
                                            </div>
                                            <!-- //.panel-title -->
                                        </div>
                                        <!-- //.panel-heading -->

                                        <div id="work8" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="heading8">
                                            <div class="panel-body text-dark">
                                                <div class="subheading1">Key Responsibilities:</div>
                                                <p>
                                                <ul style="list-style-type:disc">
                                                    <li>Developed a Minimum Viable Product ReactJS app that interfaced with a mobile EEG sensing headset to measure
                                                        app-synchronized signals in people with drug addiction.</li>
                                                    <li>Presented in daily standups in a team of 3 engineers to review recent progress, code, discuss current blockers,
                                                        and
                                                        planned solutions.</li>
                                                    <li>Used Figma as a whiteboarding tool to communicate more ideas and brainstorm together.</li>
                                                </ul>
                                                </p>
                                            </div><!-- //.panel-body -->
                                        </div><!-- //.panel-collapse -->
                                    </div><!-- //.panel -->
                                </div><!-- //.resume-item8 -->
                            </div><!-- //.panel-group -->
                        </div><!-- //.col-md-10 -->
                    </div>
                    <!-- //.EXPERIENCE -->

                    <!-- EDUCATION -->
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center" style="padding:20px 0 50px;">EDUCATION</h3>
                        </div><!-- //.col-md-12 -->
                    </div><!-- //.row1 -->

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- timeline -->
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-image">
                                        <div class="timeline-content">2016 - 2021</div>
                                    </div> <!-- //.timeline-image -->
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <div class="timeline-title1">ST. CLOUD STATE UNIVERSITY</div>
                                            <div class="title2">Bachelor of Science in Engineering</div>
                                        </div> <!-- //.timeline-heading -->
                                        <HR />
                                        <div class="timeline-body">
                                            <p>Major: Software Engineering</p>
                                        </div> <!-- //.timeline-body -->
                                    </div> <!-- //.timeline-panel -->
                                </li> <!-- //.item1 -->
                                <li class="timeline-inverted">
                                    <div class="timeline-image">
                                        <div class="timeline-content">2013 - 2015</div>
                                    </div> <!-- //.timeline-image -->
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <div class="timeline-title1">VS Niketan College</div>
                                            <div class="title2">Higher Secondary Course</div>
                                        </div> <!-- //.timeline-heading -->
                                        <HR />
                                        <div class="timeline-body">
                                            <p>Major: Science</p>
                                        </div> <!-- //.timeline-body -->
                                    </div> <!-- //.timeline-panel -->
                                </li> <!-- //.item2 -->
                            </ul> <!-- //.timeline -->
                        </div><!-- //.col-lg-12 -->
                    </div><!-- //.row2 -->

                    <!-- //.EDUCATION -->

                </div><!-- //.row -->
            </div><!-- //.section-content -->
        </div><!-- //.container -->
    </section>
    <!-- //RESUME SECTION -->

    
    <!-- CONTACT SECTION START -->
    <section id="contact" class="section">
        <div class="container-fluid sec-wrapper">
            <div class="sec-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="sec-title">Contact Me</h2>
                        <h4 class="sec-subtitle text-center">Have a project to discuss? Or got something for me?</h4>
                        <span class="separator center"></span>
                    </div><!-- //.col-md-12 -->
                </div><!-- //.row1 -->

                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="list-inline social-icon">
                            <li><a href="mailto:subashshrestha455@gmail.com" target="_blank"
                                    title="subashshrestha455@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="https://github.com/subashsubbu" target="_blank" title="GitHub"><i
                                        class="fa fa-github"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/subashshrestha455/" target="_blank" title="linkedIn"><i class="fa fa-linkedin"></i></a></li>
                            <!--<li><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li> -->
                        </ul>
                    </div> <!-- //.col-md-12 -->
                </div><!-- //.row2 -->

            </div><!-- //.section-content -->
        </div><!-- //.container -->
    </section>
    <!-- //CONTACT SECTION -->

    <!-- //FOOTER SECTION -->
    <footer class="text-center">
        <div class="to-top">
            <a class="btn btn-custom" href="#home"><i class="fa fa-angle-up"></i></a>
        </div> <!-- //.to-top -->
        </div> <!-- //.footer -->
        <!-- //FOOTER SECTION -->

        <!-- SCRIPTS :placed at the end so that page loads faster -->
        <!-- Latest compiled and minified JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Font icons -->
        <script src="https://use.fontawesome.com/ba8437ed1f.js"></script>
        <!-- To control how an animation progresses over time by manipulating its acceleration -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <!-- Chart for Skills section -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
        <!-- For customizable scrollbar -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>
        <!-- Main JS -->
        <script src="js/portfolio.js"></script>
        <!--</div>  //.container-fluid -->
</body>

</html>