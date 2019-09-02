<div>
    <div>
        <div>
            <aside id="left-panel" class="left-panel">
                    <nav class="navbar navbar-expand-sm navbar-default">
                        <div id="main-menu" class="main-menu collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="{{route('Dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                                </li>
                                <li class="bg">
                                    <a href="index.html"><i class="menu-icon fa fa-laptop"></i> Website Home</a>
                                </li>
                                <li class="bg">
                                    <a href="{{route('Register')}}"><i class="menu-icon fa fa-laptop"></i> Actor Register</a>
                                </li>
                                <li class="menu-title">Drug Elements</li><!-- /.menu-title -->
                                <li class="menu-item-has-children dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-puzzle-piece"></i>Medicins Catagories</a>
                                    <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('medicineAdd')}}">Medicins Add</a></li>
                                        <li><i class="fa fa-puzzle-piece"></i><a href="{{route('medicineShow')}}">Medicins Show</a></li>
            
                                    </ul>
                                </li>
                                <li class="menu-item-has-children dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-puzzle-piece"></i>Company Catagories</a>
                                    <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('CompanyAdd')}}">Company Add</a></li>
                                        <li><i class="fa fa-puzzle-piece"></i><a href="{{route('CompanyShow')}}">Company Show</a></li>
            
                                    </ul>
                                </li>
                                <li class="menu-item-has-children dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-puzzle-piece"></i>Disease Catagories</a>
                                    <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('DiseaseAdd')}}">Disease Add</a></li>
                                        <li><i class="fa fa-puzzle-piece"></i><a href="{{route('DiseaseShow')}}">Disease Show</a></li>
            
                                    </ul>
                                </li>
                                <li class="menu-item-has-children dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-puzzle-piece"></i>Buy Medicin</a>
                                    <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('AllOrder')}}">All Orders</a></li>
                                        <li><i class="fa fa-puzzle-piece"></i><a href="{{route('MedicinQuantity')}}">Medicin Quentity Add</a></li>
            
                                    </ul>
                                </li>
                                <li class="menu-item-has-children dropdown">
                                    <a href="{{route('StockOut')}}"> <i class="menu-icon fa fa-puzzle-piece"></i>Stock Out</a>
                                   
                                </li>
                                <li class="menu-item-has-children dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-puzzle-piece"></i>Recycle Ben</a>
                                    <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="{{route('MedicinRestore')}}">Medicin Restore</a></li>
                                        <li><i class="fa fa-puzzle-piece"></i><a href="{{route('CompanyRestore')}}">Company Restore</a></li>
                                        <li><i class="fa fa-puzzle-piece"></i><a href="{{route('DiseaseRestore')}}">Disease Restore</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </aside>
        </div>
    </div>
</div>