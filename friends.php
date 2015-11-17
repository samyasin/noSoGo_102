<?php require_once 'includes/header.php'; ?>
<div class="chat-window-container"></div>
    <div id="content">
      
        <div class="container-fluid">
           
            <div id="filter">
                <form class="form-inline">
                    <label>Filter:</label>
                    <select name="users-filter" id="users-filter-select" class="selectpicker" data-style="btn-primary">
                        <option value="all">All</option>
                        <option value="friends">Friends of Friends</option>
                        <option value="name">by Name</option>
                    </select>
                    <div id="users-filter-trigger">
                        <div class="select-friends hidden">
                            <select name="users-filter-friends" class="selectpicker" data-style="btn-primary" data-live-search="true">
                                <option value="0">Select Friend</option>
                                <option value="1">Mary D.</option>
                                <option value="2">Michelle S.</option>
                                <option value="3">Adrian Demian</option>
                            </select>
                        </div>
                        <div class="search-name hidden">
                            <input type="text" class="form-control" name="user-first" placeholder="First Last Name" id="name" />
                            <a href="#" class="btn btn-primary btn-sm hidden" id="user-search-name"><i class="fa fa-search"></i> Search</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="timeline row" data-toggle="gridalicious">
                <div class="timeline-block">
                    <div class="panel panel-default user-box">
                        <div class="panel-body">
                            <div class="media">
                                <img src="images/people/50/guy-2
.jpg" alt="people" class="media-object img-circle pull-left" />
                                <div class="media-body">
                                    <a href="" class="username">Adrian D.</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel-body bordered">
                           
                            <div class="user-friend-list">
                                <a href="#">
                                    <img src="images/people/50/guy-2
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/guy-3
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/woman-7
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/woman-9
.jpg" alt="people" class="img-circle" />
                                </a>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
                <div class="timeline-block">
                    <div class="panel panel-default user-box">
                        <div class="panel-body">
                            <div class="media">
                                <img src="images/people/50/guy-3
.jpg" alt="people" class="media-object img-circle pull-left" />
                                <div class="media-body">
                                    <a href="" class="username">Adrian D.</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel-body bordered">
                            
                            <div class="user-friend-list">
                                <a href="#">
                                    <img src="images/people/50/guy-8
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/guy-8
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/woman-5
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/woman-4
.jpg" alt="people" class="img-circle" />
                                </a>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
                <div class="timeline-block">
                    <div class="panel panel-default user-box">
                        <div class="panel-body">
                            <div class="media">
                                <img src="images/people/50/guy-2
.jpg" alt="people" class="media-object img-circle pull-left" />
                                <div class="media-body">
                                    <a href="" class="username">Adrian D.</a>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="panel-body bordered">
                          
                            <div class="user-friend-list">
                                <a href="#">
                                    <img src="images/people/50/guy-6
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/guy-3
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/woman-4
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/woman-8
.jpg" alt="people" class="img-circle" />
                                </a>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
                <div class="timeline-block">
                    <div class="panel panel-default user-box">
                        <div class="panel-body">
                            <div class="media">
                                <img src="images/people/50/guy-5
.jpg" alt="people" class="media-object img-circle pull-left" />
                                <div class="media-body">
                                    <a href="" class="username">Adrian D.</a>
                                   
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel-body bordered">
                           
                            <div class="user-friend-list">
                                <a href="#">
                                    <img src="images/people/50/guy-7
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/guy-3
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/woman-9
.jpg" alt="people" class="img-circle" />
                                </a>
                                <a href="#">
                                    <img src="images/people/50/woman-9
.jpg" alt="people" class="img-circle" />
                                </a>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </div>

       
        

       
        </div>

    <!-- Vendor Scripts Bundle -->
    <script src="js/vendor.min.js"></script>

    <!-- App Scripts Bundle -->
    <script src="js/scripts.min.js"></script>
</body>
</html>