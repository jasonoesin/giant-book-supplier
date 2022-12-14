<div class="position-fixed top-0 w-100 bg-light d-flex flex-column justify-content-center HEADER">
    <div class="d-flex justify-content-center bg-warning text-white py-4 px-2" style="font-size: 1.5rem">Giant Book Supplier</div>
    <div class="text-white d-flex gap-4 align-items-center justify-content-center p-2">
        <a href="{{url('/')}}" class="text-decoration-none text-blue">Home</a>
        <div class="category-dropdown">
            <a href="{{url('/')}}" class="text-decoration-none text-blue">Category ▾</a>
            <div class="container">
                <div class="dropdown-content">
                    @foreach($categories as $cat)
                        @php
                          $string = strtolower($cat->name)
                        @endphp

                        <a href="{{url("/category/$string")}}">{{$cat->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <a href="{{url('/publisher')}}" class="text-decoration-none text-blue">Publisher</a>
        <a href="{{url('/contact')}}" class="text-decoration-none text-blue">Contact</a>
    </div>
</div>

<style>

    .HEADER{
        z-index: 5;
    }

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

