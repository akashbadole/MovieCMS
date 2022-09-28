<nav class="navbar navbar-expand-md navbar-dark bg-blue">
    	<div class="container">
	      <a class="navbar-brand" href="/">
	      	<img src="" alt="Laravel Learning" />
	      </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarCollapse">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item active">
	            <a class="nav-link" href="/">Home</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">About</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">Contact</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="blog-list">Blog</a>
	          </li>
	        </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="{{url('/')}}" class="nav-link">Admin Dashboard</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Logout</a>
                </li>
            </ul>
	      </div>
  		</div>
    </nav>