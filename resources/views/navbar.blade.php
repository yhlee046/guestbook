<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
 
            
            <a class="navbar-brand" href="/">Laravel</a>
        </div>
 
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="nav navbar-nav">
                <li>{!! link_to_route('post.index', 'Blog') !!}</li>
                <li><a href="/post/create">New Post</a></li>
                
            </ul>
 
        
        </div>
    </div>
</nav>