<div id="services" class="services section">
    @foreach($tugas as $d)
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h4>{{ $d->nama_penugasan }}</h4>
                    <p>{{ $d->detail }}</p>
                    <p>{{ $d->link_submit }}</p>
                    <p>{{ $d->deadline }}</p>

                </div>
            </div>
        </div>
    </div>
    @endforeach
   
    
</div>