@extends('master-layout')

@section('title')
 San Pham
@endsection

@section('content')
<div class="container">
        <div class="truy-xuat">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm title">
                        <img class="slide-in-left" src="image/Untitled.png" alt="#" title="trang-chu">

                    </div>
                    <div class="col-5 mr-auto">
                        <form>
                            <input type="search" id="box-tim-kiem" class="slide-in-top" placeholder="Search...">
                        </form>

                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-success slide-in-right" id="xuat-file">Xuất file PDF</button>
                    </div>
                </div>


            </div>
        </div>
        <hr width="100%" size="2px" color="green">
        <div class="container-fluid">
            <div class="row">
                <div class="ban-do">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.434259002717!2d105.78124221476378!3d21.05531108598403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab2b5048185b%3A0xcefe924d71d57e6e!2zTmfDtSA1OTkgUGjhuqFtIFbEg24gxJDhu5NuZywgQ-G7lSBOaHXhur8gMSwgQuG6r2MgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1567667412520!5m2!1svi!2s"
                        frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
        <hr width="100%" size="2px" color="green">
    </div>

    <div class="product-info">

        <div class="container">
            <h4 class="title-1 text-center roll-in-left"> Mã Truy Xuất : <span>1234</span></h4>
            <div class="row">
                <div class="col-3 slide-in-left">
                    <img src="image/chart.png">
                </div>
                <div class="col-9">

                    <h4 class="title-2 bounce-in-top">Tên Sản Phẩm : <a>&nbsp;Cá hồi</a></h4>
                    <h4 class="title-3 bounce-in-top"><a class="title-2">Thông tin đóng gói : </a><br>Đơn vị đóng gói : <span>&ensp;Chi nhánh công ty TNHH đầu tư sản xuất phát triển nông nghiệp VinEco tại Long Thành</span><br>Địa chỉ đóng gói :<span>&ensp;Ấp 5- Xã Long Phước- Huyện Long Thành- Tỉnh Đồng Nai</span></h4>
                    <h4 class="title-3 bounce-in-top"><a class="title-2">Thông tin sản xuất : </a><br>Chứng nhận :<span>&ensp;VietGAP</span><br>Nơi trồng :&ensp;<span>	Ấp 5- Xã Long Phước- Huyện Long Thành- Tỉnh Đồng Nai</span></h4>

                </div>


            </div>
            <br>

            <h4 class="title-1 text-center roll-in-left">Thông tin nhà phân phối</h4>
            <div class="row">
                <div class="col-3 slide-in-left">
                    <img src="image/vinmart.png" width="200px">
                </div>
                <div class="col-9">

                    <h4 class="title-2 bounce-in-top">Tên đơn vị :<span>&ensp;Vinmart & Vinmart +</span></h4>

                </div>


            </div>
            <br>
            <h4 class="title-1 text-center roll-in-left">Thông tin trang trại/ xưởng đóng gói</h4>
            <div class="row">
                <div class="col-3 slide-in-left">
                    <img src="image/vineco-product.png " width="200px">
                </div>
                <div class="col-9">

                    <h4 class="title-2 bounce-in-top">
                        Tên đơn vị :<span>&ensp;CÔNG TY TNHH ĐẦU TƯ SẢN XUẤT PHÁT TRIỂN NÔNG NGHIỆP VINECO</span></h4>

                </div>


            </div>
            <br>
            <h4 class="title-1 text-center roll-in-left">Thông tin nguyên liệu</h4>
            <div class="row">
                <div class="col-3 slide-in-left">
                    <img src="image/3.jpg" width="200px">
                </div>
                <div class="col-9">
                    <h4 class="title-2 bounce-in-top">
                        Tên đơn vị : <span>&ensp;CÔNG TY TNHH ĐẦU TƯ SẢN XUẤT PHÁT TRIỂN NÔNG NGHIỆP VINECO</span></h4>
                    <h4 class="title-2 bounce-in-top">
                        <span> Các thông tin được cung cấp bởi CÔNG TY TNHH ĐẦU TƯ SẢN XUẤT PHÁT TRIỂN NÔNG NGHIỆP VINECO</span>
                    </h4>
                </div>
            </div>
        </div>
    </div>
@endsection