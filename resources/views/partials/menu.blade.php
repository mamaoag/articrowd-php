<aside class="menu">
    <br>
    <div class="columns">
        <div class="column"></div>
        <div class="column">
            <figure class="image is-128x128">
                <img src="{{Auth::user()->image}}">
            </figure>
            <br>
            <br>
        </div>
        <div class="column"></div>
    </div>
    <ul class="menu-list">
        <li><a href="/" class="has-text-left {{Request::is('home')? 'is-active' : ''}}"><i class="fa fa-home fa-fw fa-lg"></i> &nbsp;Home</a></li>
        <li><a href="/u/{{Auth::user()->username}}" class="has-text-left {{Request::is('u/'.Auth::user()->username)? 'is-active':''}}"><i class="fa fa-user fa-fw fa-lg"></i> &nbsp;Your Profile</a></li>
        <li><a href="/jobs" class="has-text-left"><i class="fa fa-wrench fa-fw fa-lg"></i> &nbsp;Jobs</a></li>
        <li><a href="" class="has-text-left"><i class="fa fa-lightbulb-o fa-fw fa-lg"></i> &nbsp;Ideas</a></li>        
        <li><a href="" class="has-text-left"><i class="fa fa-gear fa-fw fa-lg"></i> &nbsp;Settings</a></li>
    </ul>
</aside>