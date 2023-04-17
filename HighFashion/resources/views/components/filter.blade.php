<div style="padding: 80px">
    <div id="team-area">
        <div class="container">
            <div class="row">
                <div class="col-12" style="padding:15px">
                    <h1 class="main-title"> Mais vendidos Outono 2023</h1>
                </div>


            <form action="/filter" method="get">
                @csrf
                    @method('put')
            @foreach ( $result as $key )
            <div class="col-md-3">
                <div class="card border border-2 border border-success p-2 mb-2 border-opacity-25">
                    <img src="image-removebg-preview.png" alt="" class="card-img-top"
                        style="padding: 15px;">
                    <div class="card-body">
                        <h5 class="card-title">Blusa "Sou cut"</h5>
                        <p class="card-text">R$ 56,00</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

            @endforeach
</form>

