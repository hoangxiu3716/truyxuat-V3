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
<div class="page-section">

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
<h6 class="trangchu-subtitle">Bisolution là dịch vụ truy xuất nguồn gốc điện tử đầu tiên của Việt Nam, được sự tài trợ của tổ chức hỗ trợ cạnh tranh toàn cầu GCF do công ty cổ phần khoa học công nghệ Sắc Ký Hải Đăng EDC-HĐ thực hiện. Bisolution là cầu nối thông tin giữa nhà sản xuất và người mua để đưa thông tin minh bạch về thực phẩm của Việt Nam…</h6>
    </div>
  </div>
</div>
</div>
<!-- page-2 -->
<section class="page-section" style="background-color:#FEEBD0
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
         <div class="col-sm">
            <span class="fa-stack fa-2x">
              
            <i class="fas fa-trophy fa-stack-1x"></i>


            </span>
            <h4 class="services-heading">HỆ THỐNG HÀNG ĐẦU</h4>
            <p class="text-muted">Với hơn 5 năm kinh nghiệm TXNG, Bisolution là hệ thống TXNG hàng đầu tại Việt Nam.</p>
         </div>
         <div class="col-sm">
            <span class="fa-stack fa-2x">
                
            <i class="fas fa-globe-asia fa-stack-1x"></i>
            </span> 
            <h4 class="services-heading">ĐẠT CHUẨN QUỐC TẾ</h4>
            <p class="text-muted">Hệ thống TXNG Bisolution đạt tiêu chuẩn quốc tế phù hợp với sản phẩm trong nước và xuất khẩu</p>
         </div> 
         <div class="col-sm">
            <span class="fa-stack fa-2x">
                 
            <i class="fas fa-check-square fa-stack-1x"></i>
            </span>
            <h4 class="services-heading">NHANH, CHÍNH XÁC</h4>
            <p class="text-muted">Truy xuất nhanh chóng, và chính xác trên hệ thống đối với  doanh nghiệp và cả người mua hàng</p>
         </div>
         <div class="col-sm">
            <span class="fa-stack fa-2x">
               
            <i class="fas fa-user-cog fa-stack-1x"></i>


            </span>
            <h4 class="services-heading">DỊCH VỤ HỖ TRỢ</h4>
            <p class="text-muted">Bisolution có nhiều dịch vụ nhằm hỗ trợ người nông dân và doanh nghiệp Việt Nam</p>
         </div>
      </div>
      </div>
   </section>
   <section class="bg-light page-section" style="background-image: url({{asset('image/anhnen.jpg')}}) !important;"  id="portfolio">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
         <h2 class="section-heading text-uppercase text-center"><a class="navbar-brand" href="http://localhost/truyxuat-V3/public/trangchu">
              <img class="image-responsive anh-center"style="padding-top:30px;" src="{{asset('image/trangchu.png')}}" >
</a></h2>
         <h3 class="trangchu-title">Dịch vụ của Bisolution</h3>
      </div>
   </div>
  
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
                <div class="portfolio-caption text-center hoang-title">
                   <h4 class="trangchu-title-1">Truy xuất nguồn gốc điện tử</h4>
                   <p class="text-muted text-center trangchu-text">Bisolution là Hệ thống truy xuất nguồn gốc điện tử hàng đầu Việt Nam với hơn 5 năm kinh nghiệm…</p>
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
         <div class="portfolio-caption text-center hoang-title">
            <h4 class="trangchu-title-1">Bisolution - Phần mềm quản lý trang trại</h4>
            <p class="text-muted text-center trangchu-text">Bisolution là một phần mềm sử dụng trên điện thoại thông minh dùng để quản lý trang trại…</p>
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
         <div class="portfolio-caption text-center hoang-title">
            <h4 class="trangchu-title-1">Bisolution - Phầm mềm quản lý chuỗi cung ứng</h4>
            <p class="text-muted text-center trangchu-text">Bisolution là một phần mềm sử dụng trên điện thoại thông minh dùng để quản lý trang trại…</p>
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
         <div class="portfolio-caption text-center hoang-title">
            <h4 class="trangchu-title-1">Tạo QR miễn phí</h4>
            <p class="text-muted text-center trangchu-text">BiQR TẠO QR CODE MIỄN PHÍ THÔNG TIN NGUỒN GỐC SẢN PHẨM Bisolution là dịch vụ truy xuất nguồn gốc đầu tiên tại Việt Nam</p>
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
         <div class="portfolio-caption text-center hoang-title">
            <h4 class="trangchu-title-1">Tưu vấn thương hiệu nông sản</h4>
            <p class="text-muted text-center trangchu-text">Dịch vụ Tư vấn thương hiệu nông sản giúp Doanh nghiệp nông sản Việt lớn mạnh hơn và xứng tầm Thế Giới</p>
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
         <div class="portfolio-caption text-center hoang-title">
            <h4 class="trangchu-title-1">Trở thành đối tác của Bisolution</h4>
            <p class="text-muted text-center trangchu-text">Liên kết ngay với Bisolution để có thể thực hiện dịch vụ truy xuất nguồn gốc hiệu quả hơn…</p>
         </div>
      </div>
   </div>
</div>
</section>
<section class="bg-light page-section" style="background-color: #2b616d!important;"  id="portfolio">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
         <h2 class="section-heading text-uppercase text-center"><a class="navbar-brand" href="http://localhost/truyxuat-V3/public/trangchu">
              <img class="image-responsive anh-center"style="padding-top:30px;" src="{{asset('image/trangchu.png')}}" >
</a></h2>
         <h3 class="trangchu-title-0">Dự án tiêu biểu</h3>
      </div>
   </div>
</div>
  
<div class="row thu-nhat">
   <div class="col-sm portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                    <span class="trangchu-title-2">Cacao Intercontinental Corporation (CIC)  </span>
                    <br>
                    <span class="trangchu-subtitle-2">Bisolution-Phần mềm quản lý trang trại</span>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{asset('image/duan-cic-600x450.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption text-center">
                   
                </div>
             </div>
             <div class="col-sm portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                    <span class="trangchu-title-2">Cacao Intercontinental Corporation (CIC)  </span>
                    <br>
                    <span class="trangchu-subtitle-2">Bisolution-Phần mềm quản lý trang trại</span>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{asset('image/duan-organica-600x450.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption text-center">
                   
                </div>
             </div>
              <div class="col-sm portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                    <span class="trangchu-title-2">Cacao Intercontinental Corporation (CIC)  </span>
                    <br>
                    <span class="trangchu-subtitle-2">Bisolution-Phần mềm quản lý trang trại</span>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{asset('image/duan-bigc-600x450.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption text-center">
                   
                </div>
             </div>
             <div class="col-sm portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                    <span class="trangchu-title-2">Cacao Intercontinental Corporation (CIC)  </span>
                    <br>
                    <span class="trangchu-subtitle-2">Bisolution-Phần mềm quản lý trang trại</span>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{asset('image/duan-cic-600x450.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption text-center">
                   
                </div>
             </div>
</div>

<div class="row thu-hai">
<div class="col-sm portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                    <span class="trangchu-title-2">Cacao Intercontinental Corporation (CIC)  </span>
                    <br>
                    <span class="trangchu-subtitle-2">Bisolution-Phần mềm quản lý trang trại</span>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{asset('image/duan-cic-600x450.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption text-center">
                   
                </div>
             </div>
             <div class="col-sm portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                    <span class="trangchu-title-2">Cacao Intercontinental Corporation (CIC)  </span>
                    <br>
                    <span class="trangchu-subtitle-2">Bisolution-Phần mềm quản lý trang trại</span>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{asset('image/duan-cic-600x450.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption text-center">
                   
                </div>
             </div>
             <div class="col-sm portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                    <span class="trangchu-title-2">Cacao Intercontinental Corporation (CIC)  </span>
                    <br>
                    <span class="trangchu-subtitle-2">Bisolution-Phần mềm quản lý trang trại</span>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{asset('image/duan-cic-600x450.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption text-center">
                   
                </div>
             </div>
             <div class="col-sm portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                    <span class="trangchu-title-2">Cacao Intercontinental Corporation (CIC)  </span>
                    <br>
                    <span class="trangchu-subtitle-2">Bisolution-Phần mềm quản lý trang trại</span>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{asset('image/duan-cic-600x450.jpg')}}" alt="">
                </a>
                <div class="portfolio-caption text-center">
                   
                </div>
             </div>

</div>

</section>

<section class="bg-light page-section" style="background-color: #f0e0d4!important;"  id="portfolio">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
         <h2 class="section-heading text-uppercase text-center"><a class="navbar-brand" href="http://localhost/truyxuat-V3/public/trangchu">
              <img class="image-responsive anh-center"style="padding-top:30px;" src="{{asset('image/trangchu.png')}}" >
</a></h2>
         <h3 class="trangchu-title">Khách hàng nói gì về Bisolution</h3>
      </div>
   </div>
</div>
<br>
<div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="{{asset('image/nguyenthixuanthu-200x200.jpg')}}" alt="">
                    </div>
                    <ul class="social">
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-twitter"></a></li>
                    </ul>
                    <div class="team-content">
                        <h3 class="title">Bà Nguyễn Thị Xuân Thu</h3>
                        <span class="post">Thứ trưởng bộ NN & PTNT</span>
                    </div>
                    <p class="description">
                    Bộ Nông nghiệp và Phát triển nông thôn đánh giá cao cho dự án Truy xuất nguồn gốc điện tử của Bisolution. Thực hiện Truy xuất nguồn gốc điện tử là minh chứng rõ nhất cho sự an toàn của sản phẩm đưa ra thị trường và cũng chứng tỏ sự quản lý chuyên nghiệp của nhà sản xuất.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="{{asset('image/cafatex-300x300.jpg')}}" alt="">
                    </div>
                    <ul class="social">
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-twitter"></a></li>
                    </ul>
                    <div class="team-content">
                        <h3 class="title">Ông Lê Quang Công  </h3>
                        <span class="post">GĐ P. Công nghệ kiểm nghiệm Cafatex  </span>
                    </div>
                    <p class="description">
                    TXNG Bisolution giúp chúng tôi theo dõi các thông tin của sản phẩm một cách nhanh và chính xác hơn.  Đồng thời, Bisolution cũng đem đến cho người tiêu dùng những thông tin đáng tin cậy, giúp họ thêm tin tưởng vào sản phẩm của chúng tôi.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="{{asset('image/ba-duong-thi-thuy-oanh-cut-300x300.jpg')}}" alt="">
                    </div>
                    <ul class="social">
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-twitter"></a></li>
                    </ul>
                    <div class="team-content">
                        <h3 class="title"> Bà Dương Thị Thúy Oanh        </h3>
                        <span class="post">Nha Trang SeaFood - Phó phòng quản lý chất lượng</span>
                    </div>
                    <p class="description">
                    Bisolution giúp chúng tôi quản lý hồ sơ một cách hệ thống, giúp truy xuất nhanh chóng khi cần thiết. Đồng thời, giúp việc kiểm tra thông tin nuôi trồng của các trang trại trong công ty qua máy tính giúp tiết kiệm thời gian và tăng năng suất công việc đáng kể.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
<section class="bg-light page-section" style="background-image: url({{asset('image/anhnen.jpg')}}) !important;"  id="portfolio">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
         <h2 class="section-heading text-uppercase text-center"><a class="navbar-brand" href="http://localhost/truyxuat-V3/public/trangchu">
              <img class="image-responsive anh-center"style="padding-top:30px;" src="{{asset('image/trangchu.png')}}" >
</a></h2>
         <h3 class="trangchu-title">Tin tức & Sự kiện</h3>
      </div>
   </div>
  <br>
   <div class="row">
      <div class="col-md-4 col-sm-6 portfolio-item thu-nhat">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                    <i class="fas fa-info-circle"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{asset('image/Facebook-Thong-tu-bo-y-te-500x300.png')}}" alt="">
                </a>
                <div class="hoang-title">
                <div class="container page-section7">
                  <span class="hoang-tintuc">Chính Sách Pháp Luật</span>
                   <p class="hoang-tintuc1">
        [Thông tư 25/2019/TT-BYT] Quy định truy xuất nguồn gốc sản phẩm thực phẩm thuộc lĩnh vực quản lý của bộ y tế      </p>
        <br>
       <p class="hoang-tintuc2">QUY ĐỊNH TRUY XUẤT NGUỒN GỐC SẢN PHẨM THỰC PHẨM THUỘC LĨNH VỰC QUẢN LÝ CỦA BỘ Y TẾ Đây là nội dung được quy định tại Thông tư</p>
       <br>
       <span class="hoang-tintuc3"><i class="far fa-clock"></i> THÁNG CHÍN 9, 2019 </span>
       <br>
       <span class="hoang-tintuc3"><i class="fas fa-user tintuc"></i></i> Bisolution ADMIN</span>
                </div>
                </div>
             </div>
   
             <div class="col-md-4 col-sm-6 portfolio-item thu-nhat">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                    <i class="fas fa-info-circle"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{asset('image/VASEP-EVENT-29-08-500x300.png')}}" alt="">
                </a>
                <div class="hoang-title">
                <div class="container page-section7">
                  <span class="hoang-tintuc">Hoạt động của Bisolution</span>
                   <p class="hoang-tintuc1">
        
                   [Hội thảo Vietfish] Giải pháp truy xuất nguồn gốc chuỗi cung ứng thủy sản         </p>
        <br>
       <p class="hoang-tintuc2">Trong khuôn khổ Triển lãm Thủy sản Việt Nam (VietFish 2019 – http://vietfish.com.vn/), phiên hội thảo đầu tiên tập trung vào</p>
       <br>
       <span class="hoang-tintuc3"><i class="far fa-clock"></i> THÁNG TÁM 9, 2019 </span>
       <br>
       <span class="hoang-tintuc3"><i class="fas fa-user tintuc"></i></i> Bisolution ADMIN</span>
                </div>
                </div>
             </div>
             <div class="col-md-4 col-sm-6 portfolio-item thu-nhat">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                    <i class="fas fa-info-circle"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="{{asset('image/ma-so-vung-trong-500x300.png')}}" alt="">
                </a>
                <div class="hoang-title">
                <div class="container page-section7">
                  <span class="hoang-tintuc">Quy Trình Nông Nghiệp</span>
                   <p class="hoang-tintuc1">
                   Thủ tục và Quy trình đăng ký mã số vùng trồng            </p>
        <br>
       <p class="hoang-tintuc2">THỦ TỤC VÀ QUY TRÌNH ĐĂNG KÝ MÃ SỐ VÙNG TRỒNG I. Mã số vùng trồng là gì? Điều 64 Trong văn bản Luật trồng trọt 31/2018/QH14 Đ</p>
       <br>
       <span class="hoang-tintuc3"><i class="far fa-clock"></i> THÁNG CHÍN 5, 2019 </span>
       <br>
       <span class="hoang-tintuc3"><i class="fas fa-user tintuc"></i></i> Bisolution ADMIN</span>
                </div>
                </div>
             </div>
   </div>
</div>
</section>
<section class="page-section9" style="background-image: url({{asset('image/call-action-1.jpg')}}) !important;background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;">
<div class="container">
<div class="row justify-content-center text-center">

<span class="title-sieuto">Bạn có muốn kể câu chuyện sản phẩm của mình với khách hàng?</span>
<br>
<h6 class="subtitle-sieuto">TraceVerified sẽ giúp bạn kể câu chuyện ấy chân thực nhất...</h6>
<br>

</div>
</div>
<div class="container">
   <div class="row justify-content-center text-center">
   <button type="button" class="btn btn-primary hbtn">Read More <i class="fas fa-arrow-right"></i> </button>
</div>
</div>
</section>
<section class="page-section9" style="background-color:#79ad5a !important;">
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="our-team1">
                <div class="team1-img">
                    <img src="{{asset('image/Team-co-minh.jpg')}}">
                    <div class="social">
                        <ul>
                            <li><a href="#" class="fab fa-facebook"></a></li>
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-skype"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team1-content">
                    <h3 class="title">TS Nguyễn Thị Hồng Minh</h3>
                    <span class="post">Người sáng lập, Chủ tịch HĐQT</span>
                </div>
</div>
</div>
        <div class="col-md-3 col-sm-6">
            <div class="our-team1">
                <div class="team1-img">
                    <img src="{{asset('image/Team-truong-dinh-hoe.jpg')}}">
                    <div class="social">
                        <ul>
                            <li><a href="#" class="fab fa-facebook"></a></li>
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-skype"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team1-content">
                    <h3 class="title">Ông Trương Đình Hòe</h3>
                    <span class="post">Thành viên HĐQT</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="our-team1">
                <div class="team1-img">
                    <img src="{{asset('image/Team-dau-thuy-ha.jpg')}}">
                    <div class="social">
                        <ul>
                            <li><a href="#" class="fab fa-facebook"></a></li>
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-skype"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team1-content">
                    <h3 class="title">Bà Đậu Thúy Hà</h3>
                    <span class="post">Thành viên HĐQT</span>
                </div>
    </div>
</div>
<div class="col-md-3 col-sm-6">
            <div class="our-team1">
                <div class="team1-img">
                    <img src="{{asset('image/IMG_0014.jpg')}}">
                    <div class="social">
                        <ul>
                            <li><a href="#" class="fab fa-facebook"></a></li>
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-linkedin"></a></li>
                            <li><a href="#" class="fab fa-skype"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="team1-content">
                    <h3 class="title">Đào Duy Hoàng</h3>
                    <span class="post">Giám đốc điều hành</span>
                </div>
            </div>
        </div>
</div>
</div>
</section>
<section class="page-section" style="background-color: #eae4d4 !important;">
   <div class="container">
   <div class="row">
         <div class="col-lg-12 text-center">
         <h2 class="section-heading text-uppercase text-center"><a class="navbar-brand" href="http://localhost/truyxuat-V3/public/trangchu">
              <img class="image-responsive anh-center"style="padding-top:30px;" src="{{asset('image/trangchu.png')}}" >
</a></h2>
         <h3 class="trangchu-title">Đối tác của Bisolution</h3>
      </div>
   </div>
   <section class="py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <a href="#">
                  <img class="img-full d-block mx-auto" src="{{asset('image/Doitac-FAO.png')}}" alt="">
                </a>
              </div>
              <div class="col-md-3 col-sm-6">
                <a href="#">
                  <img class="img-full d-block mx-auto" src="{{asset('image/Doitac-FAO.png')}}" alt="">
                </a>
              </div>
              <div class="col-md-3 col-sm-6">
                <a href="#">
                  <img class="img-full d-block mx-auto" src="{{asset('image/Doitac-IBM.png')}}" alt="">
                </a>
              </div>
              <div class="col-md-3 col-sm-6">
                <a href="#">
                  <img class="img-full d-block mx-auto" src="{{asset('image/Doitac-IBM.png')}}" alt="">
                </a>
              </div>
            </div>
          </div>
        </section>
</section>
<section class="page-section" style="background-color:#4F4F4F!important;">
<div class="container">
   <div class="row">
   <div class="col-md-3 col-sm-6">
   <i class="fas fa-dot-circle"> <span class="footer-title">&ensp;Thông tin liên hệ</span></i>
   <br>
   <br>
   <span class="footer-subtitle">CÔNG TY CỔ PHẦN GIẢI PHÁP VÀ DỊCH VỤ TRUY XUẤT NGUỒN GỐC</span>
   <br>
   <br>
   <span class="footer-subtitle">Địa chỉ: XXXXXXXXXXXXXXXXXXX</span>
   <br>
   <br>
   <span class="footer-subtitle">VPĐD: A301, Tòa nhà số 2, Ngõ 59, Láng Hạ, Ba Đình, Hà Nội</span>
   <br>
   <br>
   <span class="footer-subtitle">Điện thoại: XXXXXXXXXXXXXXXX</span>
   <br>
   <br>
   <span class="footer-subtitle">Hotline: XXXXXXXXXXXXXXX</span>
   <br>
   <br>
   <span class="footer-subtitle">Email: XXXXXXXXXXXXXX</span>
</div>
<div class="col-md-3 col-sm-6">
<i class="fas fa-dot-circle"> <span class="footer-title">&ensp;Dịch vụ của Bisolution</span></i>
   <br>
   <br>
  <a class="nav-link footer-subtitle" href="#"> <i class="fas fa-angle-right"></i> &ensp;Truy xuất nguồn gốc điện tử</a>
   <br>
   
   <a class="nav-link footer-subtitle" href="#"> <i class="fas fa-angle-right"></i> &ensp;Bisolution-Phần mềm quản lý trang trại</a>
   
   <br>
   <a class="nav-link footer-subtitle" href="#"> <i class="fas fa-angle-right"></i> &ensp;Bisolution-Phần mềm quản lý chuỗi cũng ứng</a>
   <br>
   
   <a class="nav-link footer-subtitle" href="#"> <i class="fas fa-angle-right"></i> &ensp;Tư vấn quản lý chuỗi cung ứng</a>
   <br>
   
   <a class="nav-link footer-subtitle" href="#"> <i class="fas fa-angle-right"></i> &ensp;Trở thành đối tác của Bisolution</a>
   <br>
   
   <a class="nav-link footer-subtitle" href="#"> <i class="fas fa-angle-right"></i> &ensp;Tạo QR code miễn phí</a>
</div>
<div class="col-md-3 col-sm-6">
<i class="fas fa-dot-circle"> <span class="footer-title">&ensp;Tìm hiểu xem</span></i>
   <br>
   <br>
   <a class="nav-link footer-subtitle" href="#"> <i class="fas fa-angle-right"></i> &ensp;Về Bisolution</a>
   <br>
   
   <a class="nav-link footer-subtitle" href="#"> <i class="fas fa-angle-right"></i> &ensp;Trách nhiệm xã hội</a>
   
   <br>
   <a class="nav-link footer-subtitle" href="#"> <i class="fas fa-angle-right"></i> &ensp;Hiệp hội thực phẩm minh bạch</a>
   
   <br>
   <a class="nav-link footer-subtitle" href="#"> <i class="fas fa-angle-right"></i> &ensp;Lịch sử thịnh hành</a>
   
   <br>
   <a class="nav-link footer-subtitle" href="#"> <i class="fas fa-angle-right"></i> &ensp;Chính sách bảo mật</a>
   <br>
   
   <a class="nav-link footer-subtitle" href="#"> <i class="fas fa-angle-right"></i> &ensp;Cơ hội nghề nghiệp© </a>
</div>
<div class="col-md-3 col-sm-6">
   <i class="fas fa-dot-circle"><span class="footer-title">&ensp;Đăng ký nhận tin</span></i>
   <br>
   <span class="footer-subtitle">Để đăng ký nhận những thông tin mới nhất từ Bisolution, truy xuất nguồn gốc và những chính sách khuyến mãi của chúng tôi, vui lòng để lại Email của bạn dưới đây
</span>
<form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Email" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Đăng Ký</button>
                      </form>
</div>
   </div>
</div>
</section>
<div class="page-section0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copy-right">
                        © 2016 TraceVerified. All Rights Reserved.                    </div>
                </div>
                <div class="col-lg-6">
                <ul class="social-media list-inline text-lg-right text-center margin-0px text-white">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook fa-3x"></i></a></li>&ensp;<li class="list-inline-item"><a href="#"><i class="fab fa-youtube-square fa-3x"></i></a></li>&ensp;<li class="list-inline-item"><a href="#"><i class="fab fa-twitter-square fa-3x"></i></a></li>&ensp;<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin fa-3x"></i></a></li>&ensp;<li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-3x"></i></a></li>&ensp;<li class="list-inline-item"><a href="#"><i class="fas fa-rss-square fa-3x hicon"></i></a></li>                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection