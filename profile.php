<?php require_once 'includes/header.php'; ?>

<div id="content">
    <div class="container-fluid">
        <div class="cover overlay">
            <img src="images/profile-cover.jpg" alt="cover" />
            <a href="#coverpic" class="btn btn-cover"><i class="fa fa-pencil fa-fw"></i></a>
        </div>
      
        <div class="row">
            <div class="col-md-12">


                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-gray">
                        <a href="editprofile.php" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>

                        <i class="fa fa-info-circle"></i> About Me
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled profile-about">
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Date of Birth</span>
                                    </div>
                                    <div class="col-sm-8">12 January 1990</div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Job</span>
                                    </div>
                                    <div class="col-sm-8">Specialist</div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Gender</span>
                                    </div>
                                    <div class="col-sm-8">Male</div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-sm-4"><span class="text-muted">Lives in</span>
                                    </div>
                                    <div class="col-sm-8">Miami, FL, USA</div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-gray">
                        <a href="photo.php" class="btn btn-primary btn-xs pull-right">Add <i class="fa fa-plus"></i></a>
                        <i class="fa fa-picture-o"></i> Photos
                    </div>
                    <ul class="list-unstyled friends-list">

                        <li>
                            <a href="#">
                                <img src="images/place1.jpg" alt="image" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/place3.jpg" alt="image"  />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/place1.jpg" alt="image"  />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/place3.jpg" alt="image"  />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/place1.jpg" alt="image"  />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/place3.jpg" alt="image"  />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/place1.jpg" alt="image"  />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/place3.jpg" alt="image"  />
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>



            <div class="col-md-6">


                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-gray">
                        <a href="friends.php" class="btn btn-primary btn-xs pull-right">Add <i class="fa fa-plus"></i></a>
                        <i class="fa fa-users"></i> Friends
                    </div>
                    <ul class="list-unstyled friends-list">

                        <li>
                            <a href="#">
                                <img src="images/people/110/woman-3.jpg" alt="image"  />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/people/110/guy-2.jpg" alt="image"  />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/people/110/guy-9.jpg" alt="image"  />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/people/110/woman-9.jpg" alt="image"  />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/people/110/guy-4.jpg" alt="image" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/people/110/guy-1.jpg" alt="image"  />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/people/110/woman-4.jpg" alt="image"  />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/people/110/guy-6.jpg" alt="image" />
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
        <div class="panel panel-default">
            <div class="panel-heading panel-heading-gray">
                <i class="fa fa-smile-o"></i>     <i class="fa fa-meh-o"></i> <i class="fa fa-frown-o"></i>  Posts
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="timeline-block">
                            <div class="panel panel-default share">
                                <div class="panel-heading panel-heading-gray title">
                                    What&acute;s new
                                </div>
                                <div class="panel-body">
                                    <textarea name="status" class="form-control share-text" rows="3" placeholder="Share your status..."></textarea>
                                </div>
                                <div class="panel-footer share-buttons">
                                    <a href="#">
                                        <i class="fa fa-map-marker"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-photo"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <button type="submit" value="vvv" class="btn btn-primary btn-xs pull-right ">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="container-fluid">

                        <div class="timeline row" data-toggle="gridalicious">

                            <div class="timeline-block">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="media">
                                            <a href="" class="pull-left">
                                                <img src="images/people/50/woman-5.jpg" class="media-object">
                                            </a>
                                            <div class="media-body">

                                                <a href="">Mary</a>
                                                <span>on 15th January, 2014</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>Late Night Show Photos</p>
                                        <div class="timeline-added-images">
                                            <img src="images/social/100/1.jpg" width="80">
                                            <img src="images/social/100/2.jpg" width="80">
                                            <img src="images/social/100/3.jpg" width="80">
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="smile"><img src="images/so.png" /><span>19</span></div>
                                        <div class="smile"><img src="images/no.png" /><span>22</span></div>
                                        <div class="smile"><img src="images/go.png" /><span>15</span></div>
                                    </div>


                                </div>
                            </div>
                            <div class="timeline-block">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="media">
                                            <a href="" class="pull-left">
                                                <img src="images/people/50/guy-5.jpg" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <a href="">Bill</a>
                                                <span>on 15th January, 2014</span>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="images/place1-full.jpg" class="img-responsive">
                                    <div class="panel-body">
                                        <div class="smile"><img src="images/so.png" /><span>19</span></div>
                                        <div class="smile"><img src="images/no.png" /><span>22</span></div>
                                        <div class="smile"><img src="images/go.png" /><span>15</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="media">
                                            <a href="" class="pull-left">
                                                <img src="images/people/50/guy-5.jpg" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <a href="">Bill</a>
                                                <span>on 15th January, 2014</span>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="images/place2-full.jpg" class="img-responsive">
                                    <div class="panel-body">
                                        <div class="smile"><img src="images/so.png" /><span>19</span></div>
                                        <div class="smile"><img src="images/no.png" /><span>22</span></div>
                                        <div class="smile"><img src="images/go.png" /><span>15</span></div>
                                    </div>
                                </div> 
                            </div>
                            <div class="timeline-block">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="media">
                                            <a href="" class="pull-left">
                                                <img src="images/people/50/woman-5.jpg" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <a href="">Mary</a>
                                                <span>on 15th January, 2014</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body text-muted">
                                        <i class="fa fa-map-marker"></i> Was in <a href="#">Brooklyn, New York</a><br><br>
                                        <div class="panel-body">
                                            <div class="smile"><img src="images/so.png" /><span>19</span></div>
                                            <div class="smile"><img src="images/no.png" /><span>22</span></div>
                                            <div class="smile"><img src="images/go.png" /><span>15</span></div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="timeline-block">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="media">
                                            <a href="" class="pull-left">
                                                <img src="images/people/50/guy-2.jpg" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <a href="">Jonathan22</a>
                                                <span>on 15th January, 2014</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis perspiciatis praesentium quaerat repudiandae soluta? Cum doloribus esse et eum facilis impedit officiis omnis optio, placeat, quia quo reprehenderit sunt velit? Asperiores cumque deserunt eveniet hic reprehenderit sit, ut voluptatum?</p>
                                    </div>
                                    <div class="panel-body">
                                        <div class="smile"><img src="images/so.png" /><span>19</span></div>
                                        <div class="smile"><img src="images/no.png" /><span>22</span></div>
                                        <div class="smile"><img src="images/go.png" /><span>15</span></div>
                                    </div>
                                </div>

                            </div>


                            <div class="timeline-block">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="media">
                                            <a href="" class="pull-left">
                                                <img src="images/people/50/guy-2.jpg" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <a href="">Jonathan2</a>
                                                <span>on 15th January, 2014</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis perspiciatis praesentium quaerat repudiandae soluta? Cum doloribus esse et eum facilis impedit officiis omnis optio, placeat, quia quo reprehenderit sunt velit? Asperiores cumque deserunt eveniet hic reprehenderit sit, ut voluptatum?</p>
                                    </div>
                                    <div class="panel-body">
                                        <div class="smile"><img src="images/so.png" /><span>19</span></div>
                                        <div class="smile"><img src="images/no.png" /><span>22</span></div>
                                        <div class="smile"><img src="images/go.png" /><span>15</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-block">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="media">
                                            <a href="" class="pull-left">
                                                <img src="images/people/50/guy-2.jpg" class="media-object">
                                            </a>
                                            <div class="media-body">
                                                <a href="">Jonathan2</a>
                                                <span>on 15th January, 2014</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis perspiciatis praesentium quaerat repudiandae soluta? Cum doloribus esse et eum facilis impedit officiis omnis optio, placeat, quia quo reprehenderit sunt velit? Asperiores cumque deserunt eveniet hic reprehenderit sit, ut voluptatum?</p>
                                    </div>
                                    <div class="panel-body">
                                        <div class="smile"><img src="images/so.png" /><span>19</span></div>
                                        <div class="smile"><img src="images/no.png" /><span>22</span></div>
                                        <div class="smile"><img src="images/go.png" /><span>15</span></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<div id="coverpic">
    <div class="coverpic-content">
        <div class="header">
            <h2>Update Cover Pic</h2><a href=" " class="btn">Close</a>
        </div>

        <div class="copy">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="wrap">
                                            <input type="file" name="file1" >
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-3">
                                        <button type="submit" class="btn btn-primary">update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="overlay"></div>
</div>




<script src="js/vendor.min.js"></script>


<script src="js/scripts.min.js"></script>
</body>
</html>
