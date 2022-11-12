<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{route('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">News Articles</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsN" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        News/Comments
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayoutsN" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('news.create') }}">Create a News Article</a>
                        <a class="nav-link" href="{{ route('news.index') }}">News</a>
                        <a class="nav-link" href="{{ route('comment.index')}}">Comments</a>
                        </nav>
                    </div>
                <div class="sb-sidenav-menu-heading">More</div>
                
                <a class="nav-link collapsed" href="{{route('event.create')}}" data-toggle="collapse" data-target="#collapseLayoutsE" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Events
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayoutsE" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('event.create')}}">Create Events</a>
                        <a class="nav-link" href="{{route('event.index')}}">Events</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Causes
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('activity.create')}}">Create Causes</a>
                        <a class="nav-link" href="{{route('activity.index')}}">Causes</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="{{ route('mail.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Mails
                </a>
                <a class="nav-link collapsed" href="{{ route('donate.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Donations
                </a>
                <a class="nav-link collapsed" href="{{ route('gallery.create') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Gallery
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
           {{Auth::user()->name}}
        </div>
    </nav>
</div>