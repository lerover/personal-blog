<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yms</title>
    <!-- BOOTSTRAP CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">     <!-- FONT AWESOME  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
     <!-- CUSTOM CSS  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- HEADER -->
              <div class="header">
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                    <img src="images/profile.jpg" id="headerImg" alt="">
                  </div>
                  <div class="col-md-4">
                    <br><br><br>
                    <p class="hello">HELLO!</p>
                    <p class="itme">IT'S ME</p>
                    <p class="yms">YE MYINT SOE</p>
                    <p class="hc">THE HAPPY CODER</p>
                    <br>
                    <a href="">
                      <button class="btn btn-info">
                        <i class="fa fa-plus-circle"></i>
                        Explore My Blogs
                      </button>
                    </a>
                  </div>
                  <div class="col-md-2"></div>
                </div>
              </div>
                  
                <!-- NAVBAR  -->
                <div class="position-sticky" id="navbar">
                  <a href="index.html">HOME</a>
                  <a href="javascript:void(0)">ABOUT ME</a>
                  <a href="javascript:void(0)">SKILLS</a>
                  <a href="posts.html">BLOGS</a>
                </div>               

                
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 post-details">
                            <img src="images/post1.jpg" alt="" width="100%">
                            <br><br>
                            <small> 
                                <strong> 
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    Posted On:
                                </strong>
                                    25 October, 2017
                            </small>
                            <br>
                            <small>
                                <strong> 
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                    Written By:
                                </strong> 
                                Ye Myint Soe (The Happy Coder)
                            </small>
                            <br>
                            <small>
                                <strong>
                                   <i class="fa fa-list"></i> Category:
                                </strong>
                                PHP
                            </small>
                            <br><br>
                            <h5><strong>WHERE ARE YOU NOW? I AM REALLY FANTASTIC AND GONNA TO OVERCOME IT</strong></h5>
                            <p style="text-align: justify;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam neque vitae ab error, inventore ipsam minima maxime ratione veritatis molestiae. Nesciunt consectetur alias adipisci vitae! Rerum voluptas consequatur ipsam commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed optio minima, aliquam placeat illum dolorem possimus rerum eveniet neque iusto. Saepe autem ducimus dolorem molestiae sequi eius veritatis laudantium sapiente.
                            </p>
                            <div>
                                <button class="btn btn-sm btn-success like">
                                    <i class="far fa-thumbs-up"></i> Like <span>16</span>
                                </button>
                                <button class="btn btn-sm btn-danger like">
                                    <i class="far fa-thumbs-down"></i> Like <span>0</span>
                                </button>
                                <button class="btn btn-sm btn-info comment" data-toggle="collapse" data-target="#collapseExample">
                                    <i class="far fa-comment"></i> Comment <span>3</span>
                                </button>
                            </div>
                            <br>
                            <div class="comment-form">
                                <div class="collapse" id="collapseExample">
                                    <form action="">
                                        <div class="form-group">
                                            <textarea name="" id="" cols="30" rows="3"></textarea>
                                            <br>
                                            <button class="btn btn-primary btn-sm">
                                                <i class="far fa-paper-plane"></i> Submit
                                            </button>
                                        </div>
                                    </form>
                                    <br>
                                    <div class="comment-show">
                                        <img src="https://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="" width="30px"> John 
                                        <div class=" comment-box mt-2">
                                            great post sir. pls keep up the good work
                                        </div>
                                    </div>
                                    <br>
                                    <div class="comment-show">
                                        <img src="https://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="" width="30px"> Jenifer 
                                        <div class=" comment-box mt-2">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum illum aspernatur quod non. Inventore natus dolorum autem dicta porro quis rem reprehenderit, magni harum corrupti nisi sequi ea omnis recusandae.
                                        </div>
                                    </div>
                                    <br>
                                    <div class="comment-show">
                                        <img src="https://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="" width="30px"> Willian Jam 
                                        <div class=" comment-box mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quia aspernatur quibusdam ad corrupti.
                                        </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FOOTER  -->
              <div class="footer">
                <div class="row">

                  <div class="col-sm-12 col-md-4 mb-4">
                    <h5>ABOUT THIS WEBSITE</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sequi, architecto laborum excepturi molestiae dolore? Beatae distinctio.
                    </p>
                  </div>

                  <div class="col-sm-12 col-md-4 mb-4">
                    <h5>CONTACT INFO</h5>
                    <span> <i class="fas fa-mobile-alt"></i> 09403438913 </span> <br>
                    <span> <i class="far fa-envelope"></i> yms.yemyintsoe@gmail.com </span>
                  </div>

                  <div class="col-sm-12 col-md-4">
                    <h5>FOLLOW ME ON</h5>
                    <a href="https://www.facebook.com/ye.m.soe.96387/" target="_blank">
                      <i class="fab fa-facebook-square"></i>
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <a href="https://www.instagram.com/yemyintsoe_salai/" target="_blank">
                    <i class="fab fa-instagram-square"></i>
                   </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.linkedin.com/in/ye-myint-soe-28a2aa1a0/" target="_blank">
                      <i class="fab fa-linkedin"></i>
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="">
                      <i class="fab fa-twitter-square"></i>
                    </a>
                  </div>

                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- CUSTOMS JS  -->
    <script src="js/main.js"></script>
    <!-- BOOTSTRAP JS  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>