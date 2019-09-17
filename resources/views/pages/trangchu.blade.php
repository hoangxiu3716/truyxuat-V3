@extends('master-layout')

@section('title')
 Trang Chu
@endsection

@section('content')
<!-- header -->
<div class="container">
        <div class="row">
            <div class="col head">
              <a class="navbar-brand" href="http://localhost/truyxuat-V3/public/trangchu">
              <img class="image-responsive" src="{{asset('image/trangchu.png')}}" >
</a>
</div>
            <div class="col icon-1"><i class="fas fa-phone-alt"></i><span> Hot line:</span><br>&ensp;0xxxxxxxx</div>
            <div class="col icon-1"><i class="fas fa-envelope"></i>&ensp;<span>Email:</span><br>&ensp;Info@Bisolution.com</div>
            <div class="col icon-1"><i class="fas fa-map-marker-alt"></i>&ensp;<span>Địa Chỉ:</span><br>12 VÕ VĂN KIỆT - QUẬN 1 - HCM</div>
        </div>
    </div>
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light  trangchu-background " >
                    <a class="navbar-brand" href="#">Trang chủ</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Giới Thiệu
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#">Action</a>
                                      <a class="dropdown-item" href="#">Another action</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                  </li>
                                  <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Dịch Vụ
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                      </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tin Tức
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#">Liên Hệ</a>
                              </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>
    </div>
    <style>
         
        </style>
    </head>
    <!-- <hr style=" width:30%; size:5px; color:red; margin:auto" /> -->
 
    <!-- slide anh -->
<div class="container">
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('image/2772797.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h4>Truy xuất nguồn gốc Bisolution</h4>
          <h6>Đằng sau mỗi sản phẩm là một câu chuyện, hãy để Bisolution kể lại câu chuyện đó</h6>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('image/1227.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h4>Truy xuất nguồn gốc Bisolution</h4>
          <h6>Đằng sau mỗi sản phẩm là một câu chuyện, hãy để Bisolution kể lại câu chuyện đó</h6>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('image/478626-PGE3WG-115.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h4>Truy xuất nguồn gốc Bisolution</h4>
          <h6>Đằng sau mỗi sản phẩm là một câu chuyện, hãy để Bisolution kể lại câu chuyện đó</h6>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<hr style="width:50%;background-color:red;margin:30px auto">
<!-- page-1 -->

<div class="container trangchu-title">
  <div class="row">
    <div class="col-lg-8">
      <img class="image-responsive img-fluid" src="image/quet-qr-code-7.jpg">
    </div>
    <div class="col-lg-4 ">
    <a class="navbar-brand" href="http://localhost/truyxuat-V3/public/trangchu">
              <img class="image-responsive anh-center" src="{{asset('image/trangchu.png')}}" >
</a>
<h4 class="trangchu-title">Câu chuyện của Bisolution</h4>
<h6 class="trangchu-subtitle">Bisolution là dịch vụ truy xuất nguồn gốc điện tử đầu tiên của Việt Nam, được sự tài trợ của tổ chức hỗ trợ cạnh tranh toàn cầu GCF do công ty cổ phần khoa học công nghệ Sắc Ký Hải Đăng EDC-HĐ thực hiện. TraceVerified là cầu nối thông tin giữa nhà sản xuất và người mua để đưa thông tin minh bạch về thực phẩm của Việt Nam…</h6>
    </div>
  </div>
</div>
<br>
<br>
<br>
           <br>
<!-- page-2 -->
<section class="pagesection-1" style="background-color:#FEEBD0
;">
      <div class="container">
         <div class="row">
           
            <div class="col-lg-12 col-xs-12 text-center ">
            <br>
           <br>
               <h2 class="section-heading text-uppercase"> <a class="navbar-brand" href="http://localhost/truyxuat-V3/public/trangchu">
              <img class="image-responsive anh-center" src="{{asset('image/trangchu.png')}}" >
</a></h2>
               <h3 class="trangchu-title">Tại sao chọn chúng tôi?</h3>
            </div>
         </div>
      
   
      <div class="row text-center ">
         <div class="col">
            <span class="fa-stack fa-2x">
              
            <i class="fas fa-trophy fa-stack-1x"></i>


            </span>
            <h4 class="services-heading">HỆ THỐNG HÀNG ĐẦU</h4>
            <p class="text-muted">Với hơn 5 năm kinh nghiệm TXNG, Bisolution là hệ thống TXNG hàng đầu tại Việt Nam.</p>
         </div>
         <div class="col">
            <span class="fa-stack fa-2x">
                
            <i class="fas fa-globe-asia fa-stack-1x"></i>
            </span> 
            <h4 class="services-heading">ĐẠT CHUẨN QUỐC TẾ</h4>
            <p class="text-muted">Hệ thống TXNG Bisolution đạt tiêu chuẩn quốc tế phù hợp với sản phẩm trong nước và xuất khẩu</p>
         </div> 
         <div class="col">
            <span class="fa-stack fa-2x">
                 
            <i class="fas fa-check-square fa-stack-1x"></i>
            </span>
            <h4 class="services-heading">NHANH, CHÍNH XÁC</h4>
            <p class="text-muted">Truy xuất nhanh chóng, và chính xác trên hệ thống đối với  doanh nghiệp và cả người mua hàng</p>
         </div>
         <div class="col">
            <span class="fa-stack fa-2x">
               
            <i class="fas fa-user-cog fa-stack-1x"></i>


            </span>
            <h4 class="services-heading">DỊCH VỤ HỖ TRỢ</h4>
            <p class="text-muted">Bisolution có nhiều dịch vụ nhằm hỗ trợ người nông dân và doanh nghiệp Việt Nam</p>
         </div>
      </div>
      </div>
   </section>
   <section class="bg-light page-section" style="background:#99D1D3;" id="portfolio">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
         <h2 class="section-heading text-uppercase text-center"><a class="navbar-brand" href="http://localhost/truyxuat-V3/public/trangchu">
              <img class="image-responsive anh-center" src="{{asset('image/trangchu.png')}}" >
</a></h2>
         <h3 class="trangchu-title">Dịch vụ của Bisolution</h3>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                      <i class="fas fa-plus fa-3x"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{asset('image/trangchu01.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption text-center">
                   <h4>Truy xuất nguồn gốc điện tử</h4>
                   <p class="text-muted text-center">TraceVerified là Hệ thống truy xuất nguồn gốc điện tử hàng đầu Việt Nam với hơn 5 năm kinh nghiệm…</p>
                </div>
             </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
               <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
               </div>
            </div>
            <img class="img-fluid"  src="{{asset('image/trangchu02.jpg')}}" alt="">
         </a>
         <div class="portfolio-caption text-center">
            <h4>Bisolution - Phần mềm quản lý trang trại</h4>
            <p class="text-muted text-center">Bisolution là một phần mềm sử dụng trên điện thoại thông minh dùng để quản lý trang trại…</p>
         </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
               <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
               </div>
            </div>
            <img class="img-fluid" src="{{asset('image/trangchu03.jpg')}}" alt="">
         </a>
         <div class="portfolio-caption text-center">
            <h4>Bisolution - Phầm mềm quản lý chuỗi cung ứng</h4>
            <p class="text-muted text-center">Bisolution là một phần mềm sử dụng trên điện thoại thông minh dùng để quản lý trang trại…</p>
         </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
               <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
               </div>
            </div>
            <img class="img-fluid" src="{{asset('image/trangchu04.jpg')}}" alt="">
         </a>
         <div class="portfolio-caption text-center">
            <h4>Tạo QR miễn phí</h4>
            <p class="text-muted text-center">BiQR TẠO QR CODE MIỄN PHÍ THÔNG TIN NGUỒN GỐC SẢN PHẨM Bisolution là dịch vụ truy xuất nguồn gốc đầu tiên tại Việt Nam</p>
         </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item ">
         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
               <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
               </div>
            </div>
            <img class="img-fluid" src="{{asset('image/trangchu05.jpg')}}" alt="">
         </a>
         <div class="portfolio-caption text-center">
            <h4>Tưu vấn thương hiệu nông sản</h4>
            <p class="text-muted text-center">Dịch vụ Tư vấn thương hiệu nông sản giúp Doanh nghiệp nông sản Việt lớn mạnh hơn và xứng tầm Thế Giới</p>
         </div>
      </div>
      <div class="col-md-4 col-sm-6 portfolio-item">
         <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
               <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
               </div>
            </div>
            <img class="img-fluid" src="{{asset('image/trangchu06.jpg')}}" alt="">
         </a>
         <div class="portfolio-caption text-center">
            <h4>Trở thành đối tác của Bisolution</h4>
            <p class="text-muted text-center">Liên kết ngay với TraceVerified để có thể thực hiện dịch vụ truy xuất nguồn gốc hiệu quả hơn…</p>
         </div>
      </div>
   </div>
</div>
</section>
@endsection