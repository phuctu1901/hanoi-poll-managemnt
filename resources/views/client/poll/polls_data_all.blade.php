
<div class="container margin_60">
@if($polls->isEmpty())
    <h2>Không có cuộc trưng cầu ý kiến nào</h2>
    @endif
    <div class="col-lg-12 small-gutters categories_grid">
        <?php foreach ($polls->chunk(3) as $poll_row):?>
        <div class="row" style="margin-bottom: 30px;">
            @foreach($poll_row as $poll)
                <div class="col-md-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="hotel_container">
                        <div class="img_container">
                            <a href="/khao-sat/tong-quan/{{$poll->slug}}">
                                <figure>
                                    <img src="https://colorlib.com/preview/theme/buson/assets/img/recent/rcent_1.png" class="lazy" alt="{{$poll->slug}}"  style="height: 250px;  object-fit: cover; overflow: hidden;">
                                    <figcaption class="service">{{$poll->org->name}}</figcaption>
                                </figure>
                                <div class="short_info">
                                    19/01/2019 - 21/02/2020<span class="price"></span>
                                </div>
                            </a>
                        </div>
                        <div class="hotel_title">
                            <h3><strong><a href="/khao-sat/tong-quan/{{$poll->slug}}"><h3>{{$poll->title}}</h3></a></strong></h3>

                            <!-- End wish list-->
                        </div>
                    </div>
                </div>
                <!-- End col-md-6 -->



            @endforeach



        </div>

        <?php endforeach;?>

        <hr>

        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                {{ $polls->links() }}
            </ul>
        </nav>

    </div>
    <!-- End row -->
</div>
<hr>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        {{ $polls->links() }}
    </ul>
</nav>

<style>
    figcaption{
        text-align: center;
        text-justify: auto;
        position: absolute;
        left: 0;
        top: 0;
        display: inline-block;
        color: white;
        width: 100%;
        height: 45px;
        padding: 15px;
        line-height: 1;
        font-weight: 600;
    }

    figcaption.service{
        background: rgba(226, 125, 95, 0.9);
    }
</style>


