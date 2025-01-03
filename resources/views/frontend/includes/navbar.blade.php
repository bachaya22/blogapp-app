<nav class="navbar navbar-expand-lg navigation" id="navbar">
    <div class="container">
          <a class="navbar-brand" href="{{('index')}}">
              <img src="{{ asset('frontend/images/logo.png')}}" alt="" class="img-fluid">
          </a>

          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icofont-navigation-menu"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarmain">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{('/')}}">Home</a>
          </li>
           <li class="nav-item"><a class="nav-link" href="{{('about')}}">About</a></li>
            <li class="nav-item"><a class="nav-link" href="{{('services')}}">Services</a></li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{('department')}}" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                    <li><a class="dropdown-item" href="{{('department')}}">Departments</a></li>
                    <li><a class="dropdown-item" href="{{('department-single')}}">Department Single</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{('doctor')}}" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dropdown03">
                    <li><a class="dropdown-item" href="{{('doctor')}}">Doctors</a></li>
                    <li><a class="dropdown-item" href="{{('doctorsingle')}}">Doctor Single</a></li>
                    <li><a class="dropdown-item" href="{{('appoinment')}}">Appoinment</a></li>
                </ul>
              </li>

           <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{('blogsidebar')}}" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
                <ul class="dropdown-menu" aria-labelledby="dropdown05">
                    <li><a class="dropdown-item" href="{{('blogsidebar')}}">Blog with Sidebar</a></li>

                    <li><a class="dropdown-item" href="{{('blogsingle')}}">Blog Single</a></li>
                </ul>
              </li>
           <li class="nav-item"><a class="nav-link" href="{{('contact')}}">Contact</a></li>
        </ul>
      </div>
    </div>
</nav>
