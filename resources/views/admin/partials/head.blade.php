<div class="head">

    <div class="col-div-6">
        <span class="nav">
            <i class="fas fa-bars"></i>
        </span>
        <span class="nav2">
            داشبورد
        </span>
    </div>
    <div class="col-div-6">
        <div class="prof-admin">
            <div class="profile">
                <p>سلام {{ auth()->user()->name }} خوش اومدی , <span>شما {{ auth()->user()->change_user_role_to_farsi() }} هستید.</span></p>
            </div>
        </div>
    </div>
</div>
