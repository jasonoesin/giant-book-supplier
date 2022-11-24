<div class="position-fixed top-0 w-100 bg-light d-flex justify-content-center p-2">
    <div class="text-white d-flex gap-4 align-items-center">
        <a href="{{url('/')}}" class="text-decoration-none text-blue">Home</a>
        <div class="category-dropdown">
            <a href="{{url('/')}}" class="text-decoration-none text-blue">Category ▾</a>
            <div class="container">
                <div class="dropdown-content">
                    <a href="{{url('./product/category/electronics')}}">Electronics</a>
                    <a href="{{url('./product/category/provision')}}">Provision</a>
                    <a href="{{url('./product/category/fashion')}}">Fashion</a>
                </div>
            </div>
        </div>
        <a href="{{url('/')}}" class="text-decoration-none text-blue">Publisher</a>
        <a href="{{url('/')}}" class="text-decoration-none text-blue">Contact</a>
    </div>
</div>

<style>

    .category-dropdown {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }



    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ffffff;
        border-radius: 0.5rem;
        margin-left: -2rem;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        font-size: smaller;
    }

    .category-dropdown:hover .dropdown-content
    {
        display: block;
    }


    .dropdown-content a:hover{
        background-color: #f1f1f1;
    }
</style>

