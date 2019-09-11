@extends('master-layout')

@section('title')
 Login
@endsection

@section('content')
<header class="headerbar">
            
            <div class="row">
                <div class="col">
                    <img src="{{ asset('image/3.png') }}">
                </div>
                <div class="col dang-ky">
          
                 
                </div>
            </div>
         
          </header>
          <div style="background-color: #999999;">
          
              <div class="limiter">
                  <div class="container-login100">
                      <div class="login100-more" style="background-image: url('{{ asset('image/171794-OVT5BH-969.jpg') }}');">
                  
                      </div>
          
                      <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                          <form class="login100-form validate-form">
                              <span class="login100-form-title p-b-59">
                                 Đăng nhập
                              </span>
          
          
                             
          
                              <div class="wrap-input100 validate-input" data-validate="Username is required">
                                  <span class="label-input100">Tên đăng nhập</span>
                                  <input class="input100" type="text" name="username" placeholder="">
                                  <span class="focus-input100"></span>
                              </div>
          
                              <div class="wrap-input100 validate-input" data-validate = "Password is required">
                                  <span class="label-input100">Mật khẩu</span>
                                  <input class="input100" type="text" name="pass" placeholder="">
                                  <span class="focus-input100"></span>
                              </div>
          
                            
          
                              <div class="flex-m w-full p-b-33">
                                  <div class="contact100-form-checkbox">
                                      <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                      <label class="label-checkbox100" for="ckb1">
                                          <span class="txt1">
                                            Nhớ mật khẩu
                                             
                                          </span>
                                      </label>
                                  </div>
          
                                  
                              </div>
          
                              <div class="container-login100-form-btn">
                                  <div class="wrap-login100-form-btn">
                                      <div class="login100-form-bgbtn"></div>
                                      <button class="login100-form-btn">
                                         Đăng Nhập
                                      </button>
                                  </div>
          
                                  <a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                                  Quên mật khẩu
                                      
                                  </a>
                              </div>
                              <div class="container-login100-form-btn dang-ky">
                                      <div class="wrap-login100-form-btn">
                                        
                                          <a id="ContentPlaceHolderSearch_HyperLink1" class="dk-btn" href="#">Tạo tài khoản</a>
                                      </div>
              
                                    
                                  </div>
                          </form>
                      </div>
                  </div>
              </div>
@endsection
          
          