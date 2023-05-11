<header id="tot-header" class="text-center">
    <div id="nav-logo">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="profile Pic" height="200" width="200">
    </div>

    
    <ul id="link-list">
        <li>characters</li>
        <li>comics</li>
        <li>movies</li>
        <li>tv</li>
        <li>games</li>
        <li>collectibles</li>
        <li>videos</li>
        <li>fans</li>
        <li>news</li>
        <li>shop</li>
    </ul>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </nav>

</header>

<style>

    #tot-header{
        display: flex;
        justify-content: center
    }

    #logo{
        width: 150px;
        height: 150px;;
    }

    #link-list{
        display: flex;
        gap: 35px;
        list-style-type: none; 
    }

</style>