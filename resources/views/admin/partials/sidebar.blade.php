<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('assets/images/aedc-logo.png')}}" class="logo-icon" alt="logo icon" style="width: 60px;">
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="/dashboard">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.createCSV')}}">
                <div class="parent-icon"><i class="bi bi-file-fill"></i>
                </div>
                <div class="menu-title">Upload Data</div>
            </a>
        </li>
        <li class="menu-label">Reports</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                </div>
                <div class="menu-title">Tasks</div>
            </a>
            <ul>
                <li> <a href="/get-tasks?filter=successful"><i class="bi bi-circle"></i>Successful</a>
                </li>
                <li> <a href="/get-tasks?filter=failed"><i class="bi bi-circle"></i>Failed</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">

                <div class="parent-icon"><i class="bi bi-body-text"></i>
                </div>
                <div class="menu-title">Access/AEDC KCT</div>
            </a>
            <ul>
                <li> <a href="/get-kcts?filter=treated"><i class="bi bi-circle"></i>Treated</a>
                </li>
                <li> <a href="/get-kcts?filter=untreated"><i class="bi bi-circle"></i>Untreated</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('get.customer')}}">
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="menu-title">Captured Customers</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
