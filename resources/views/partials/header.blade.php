
<div class="container">
    <header id="tot-header">
        <div id="nav-logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC Logo">
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

</div>

<div class="jumbo">
    <img id="superhero" src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="SuperHero">
</div>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box
    }

    #tot-header{
        display: flex;
        justify-content:space-evenly;
        align-items: center;

        margin-top: 30px
    }


    #link-list{
        display: flex;
        gap: 35px;
        list-style-type: none; 

        text-transform: uppercase;
        margin: 0 25px;
    }

    .jumbo{
        object-position: center; 
    }

    #superhero{
        height: 500px;
        width: 100%;
        object-fit: cover;
        object-position: top;
    }

</style>