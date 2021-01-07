<!-- begin #work -->
<div id="work" class="content" data-scrollview="true">
    <!-- begin container -->
    <div class="container" data-animation="true" data-animation-type="fadeInDown">
        <h2 class="content-title">Galeri Kegiatan Dinas Sosial</h2>
        <p class="content-desc">
            Satuan  Kerja Perangkat Daerah  (Renja Perubahan SKPD)  Dinas  Sosial  Kota  Tangerang  Tahun  2020<br />
            dalam  pelaksanaan tugas pegawai Dinas Sosial Kota Tangerang
        </p>
        <!-- begin row -->
        <div class="row row-space-10">
            @foreach ($galery as $item)
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-6">
                    <!-- begin work -->
                    <div class="work">
                        <div class="image">
                            <a href="#"><img src="{{asset($item->image)}}" alt="Work 1" /></a>
                        </div>
                        <div class="desc">
                            <span class="desc-title">{{$item->title}}</span>
                            <span class="desc-text">{{$item->description}}</span>
                        </div>
                    </div>
                    <!-- end work -->
                </div>
                <!-- end col-3 -->
            @endforeach
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end #work -->