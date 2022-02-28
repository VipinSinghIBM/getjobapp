<nav class="navbar navbar-expand-md navbar-white bg-white border-bottom sticky-top" id="navbar">
  <div class="container">
  <a href="{{URL('/')}}" class="navbar-brand">
    <img src="{{asset('images/logo.jpg')}}" height="50" width="210" alt="Natural"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        @auth
        <li class="nav-item dropdown dropdown-left"> 
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span> 
            <img class="img-profile rounded-circle" src="{{asset('images/user-profile.png')}}" width="40px"> 
          </a>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> 
            @role('admin')
            <a class="dropdown-item" href="{{route('account.dashboard')}}"> <i class="fas fa-cogs fa-sm "></i> Dashboard</a> 
            @endrole
            @role('author')
            <a class="dropdown-item" href="{{route('account.authorSection')}}"> <i class="fa fa-cogs fa-sm "></i> Author Dashboard </a> 
            @endrole
            <a class="dropdown-item" href="{{route('account.index')}}"> <i class="fas fa-user fa-sm "></i> Profile </a> 
            <a class="dropdown-item" href="{{route('account.changePassword')}}"> <i class="fas fa-key fa-sm "></i> Change Password </a> 
              <div class="dropdown-divider"></div> 
              <a class="dropdown-item" href="{{route('account.logout')}}"> 
                <i class="fas fa-sign-out-alt"></i> 
                Logout 
              </a>
          </div>
        </li>
        @endauth
        @guest
        <a href="/login" class="btn primary-btn" >Log In</a>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <a href="/register" class="btn primary-btn">Sign Up</a>
        @endguest
      </ul>
    </div>
  </div>
 
</nav>

<script>
  window.watsonAssistantChatOptions = {
      integrationID: "df5ea93c-0c43-4e28-832d-6d6c740ea8eb", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "c9f07db3-db8a-4cee-92a3-58ef73aabac8", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js"
    document.head.appendChild(t);
  });
</script>