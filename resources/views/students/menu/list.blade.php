<div class="profile-avatar">
    <img src="{{!empty($Students->photo)?URL::to($Students->photo):'https://www.w3schools.com/howto/img_avatar.png'}}" alt="" class="img-fluid rounded-circle">
    <h4>{{$Students->fname}}</h4>
</div>
<div class="student-menu">
    <ul>
        <li>
            <a class="{{($menuActive=='/')?'active':''}}" href="{{URL::to("/student/dashboard")}}">
                <i class="bi bi-grid"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a class="{{($menuActive=='course')?'active':''}}" href="{{URL::to("/student/dashboard/course")}}" >
                <i class="bi bi-journal-bookmark-fill"></i>
                My learning
            </a>
        </li>
        <li>
            <a class="{{($menuActive=='messages')?'active':''}}" href="{{URL::to("/student/dashboard/messages")}}">
                <i class="bi bi-bell-fill"></i>
                Notification
            </a>
        </li>
        <li>
            <a class="{{($menuActive=='profiles')?'active':''}}" href="{{URL::to("/student/dashboard/profiles")}}">
                <i class="bi bi-pencil-square"></i>
                Edit profile
            </a>
        </li>
    </ul>
</div>
