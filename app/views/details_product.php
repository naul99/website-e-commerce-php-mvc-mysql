<?php

foreach ($details_product as $key => $value) {
   $name_product = $value['title_product'];
   $name_category_product = $value['title_category_product'];

   $id_cate = $value['id_category_product'];
}


?>
<section>
   <?php
   foreach ($details_product as $key => $detail) {
   ?>
      <form action="<?php echo BASE_URL ?>/giohang/themgiohang" method="POST">
         <input type="hidden" value="<?php echo $detail['id_product'] ?>" name="product_id">
         <input type="hidden" value="<?php echo $detail['title_product'] ?>" name="product_title">
         <input type="hidden" value="<?php echo $detail['image_product'] ?>" name="product_image">
         <input type="hidden" value="<?php echo $detail['price_product'] ?>" name="product_price">
         <input type="hidden" value="1" name="product_quantity">
         <div class="bg_in">
            <div class="wrapper_all_main">
               <div class="wrapper_all_main_right no-padding-left" style="width:100%;">

                  <div class="breadcrumbs">
                     <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="<?php echo BASE_URL ?>">
                              <span itemprop="name">Trang chủ</span></a>
                           <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <a itemprop="item" href="<?php echo BASE_URL ?>/sanpham/danhmuc/<?php echo $id_cate ?>">
                              <span itemprop="name"><?php echo $name_category_product; ?></span></a>
                           <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                           <span itemprop="item">
                              <strong itemprop="name">
                                 <?php echo $name_product; ?>
                              </strong>
                           </span>
                           <meta itemprop="position" content="3" />
                        </li>
                     </ol>
                  </div>
                  <div class="content_page">
                     <div class="content-right-items margin0">
                        <div class="title-pro-des-ct">
                           <h1><?php echo $name_product; ?></h1>
                        </div>
                        <div class="slider-galery ">
                           <div id="sync1" class="owl-carousel owl-theme">
                              <div class="item">
                                 <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $detail['image_product'] ?>" width="100%">
                              </div>
                              <div class="item">
                                 <img src="<?php echo BASE_URL ?>/public/image/iphone1.jpg" width="100%">
                              </div>




                              <div class="item">
                                 <img src="<?php echo BASE_URL ?>/public/image/iphonex.png" width="100%">
                              </div>
                           </div>

                           <div id="sync2" class="owl-carousel owl-theme">
                              <div class="item">
                                 <img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $detail['image_product'] ?>" width="100%">
                              </div>
                              <div class="item">
                                 <img src="<?php echo BASE_URL ?>/public/image/iphone1.jpg" width="100%">
                              </div>

                              <div class="item">
                                 <img src="<?php echo BASE_URL ?>/public/image/iphonex.png" width="100%">
                              </div>

                           </div>

                        </div>
                        <div class="content-des-pro">
                           <div class="content-des-pro_in">
                              <div class="pro-des-sum">
                                 <div class="price">
                                    <p class="code_skin" style="margin-bottom:10px">
                                       <span>Mã hàng: <a href="chitietsp.php">CRW-W06</a> | Thương hiệu: <a href="">Comrack</a></span>
                                    </p>
                                    <div class="status_pro">
                                       <span><b>Trạng thái:</b> Còn hàng</span>
                                    </div>
                                    <div class="status_pro"><span><b>Xuất xứ:</b> Việt Nam</span></div>
                                 </div>
                                 <div class="color_price">
                                    <span class="title_price bg_green">Giá bán</span> <?php echo number_format($detail['price_product'], 0, ",", ".") ?> <span>vnđ</span>. (GIÁ CHƯA VAT)
                                    <div class="clear"></div>
                                 </div>
                                 <div class="color_price">
                                    <span class="title_price">Giá cũ</span>
                                    <del>18,360,000 <span>vnđ</span></del>
                                 </div>
                              </div>
                              <div class="clear"></div>
                           </div>
                           <div class="content-pro-des">
                              <div class="content_des">
                                 <?php echo $detail['desc_product'] ?>

                              </div>
                           </div>
                           <div class="ct">
                              <div class="number_price">
                                 <div class="custom pull-left">
                                    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button">-</button>
                                    <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">+</button>
                                    <div class="clear"></div>
                                 </div>
                                 <div class="clear"></div>
                              </div>
                              <div class="wp_a">
                              <input type="submit" style="box-shadow: none; margin:4px" class="btn btn-primary" name="addcart" value="Đặt hàng">
                              <input type="submitt" style="box-shadow: none;margin:4px" class="btn btn-danger" name="callphone" value="Gọi ngay">
                                    
         
                                 <div class="clear"></div>
                              </div>
                              <div class="clear"></div>
                           </div>
                           <!--  <div class="conten-infor-pro">
                              <p><img alt="phone icon thietbivanphong123.com" src="/data/upload/home-ico.png" style="height:16px; width:16px" />&nbsp;Địa chỉ : 439/4/20 KP1,Phường Tân Thới Hiệp,Quận 12,TPHCM</p>
                              
                              <p><img alt="phone icon thietbivanphong123.com" src="/data/upload/Phone-icon-thietbivanphong123.png" style="height:16px; width:16px" />&nbsp;0932 023 992</p>
                              
                              <p><img alt="person icon thietbivanphong123" src="/data/upload/person-icon.gif" style="height:16px; width:16px" />&nbsp;Mr Quang: 090 66 99 038 &nbsp; &nbsp; &nbsp; &nbsp; <img alt="person icon thietbivanphong123" src="/data/upload/person-icon.gif" style="height:16px; width:16px" />&nbsp;Mr Duy: 0938 62 69 60</p>
                              
                              <p><img alt="person icon thietbivanphong123" src="/data/upload/person-icon.gif" style="height:16px; width:16px" />&nbsp;Ms Huyền: 0888 039 123 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt="person icon thietbivanphong123" src="/data/upload/person-icon.gif" style="height:16px; width:16px" />&nbsp;Ms Ngọc: 090 247 0070</p>
                              
                              <p><img alt="clock icon thietbivanphong123.com" src="/data/upload/clock-icon.png" style="height:16px; width:16px" />&nbsp;Thời gian:Từ 8h - 17h30 thứ 2 đến thứ 6. T7&nbsp;từ 8h - 12h00</p>
                              
                              </div> -->
                           <div class="tags_products prodcut_detail">
                              <div class="tab_link">
                                 <h3 class="title_tab_link">TAGS: </h3>
                                 <div class="content_tab_link"> <a href="tag/"></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="content-des-pro-suport">
                           <div class="box-setup">
                              <div class="title-setup">
                                 <i class="fa fa-tasks" aria-hidden="true"></i> Dịch vụ &amp; Chú ý
                              </div>
                              <div class="info-setup">
                                 <div class="row-setup">
                                    <p style="text-align:justify">Quý khách vui lòng liên hệ với nhân viên bán hàng theo số điện thoại Hotline sau :</p>
                                    <p><span style="color:#d50100">0000 000 000</span>&nbsp;để biết thêm chi tiết về Phụ kiện sản phẩm.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="info-prod prod-price freeship">
                              <span class="title">
                                 <p>
                                    <!-- <img alt="chuyển hàng miễn phí tại thietbivanphong123.com" src="/data/upload/ship-hang-mien-phi.png" style="height:33px; width:60px" /> --> Bạn sẽ được giao hàng miễn phí trong khu vực nội thành TPHCM khi mua sản phẩm này.
                                 </p>
                              </span>
                              <span class="row more"><a href="" title="">Xem thêm</a>
                              </span>
                           </div>
                           <div class="bx-contact">
                              <span class="title-cnt">Bạn cần hỗ trợ?</span>
                              <p>Chat với chúng tôi :</p>
                              <p><img alt="icon skype " src="image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="">abc.com</a></p>
                              <p><img alt="icon skype " src="image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="">abc.com</a></p>
                              <p><img alt="icon skype " src="image/icon skype.png" style="height:24px; width:24px" />&nbsp;<a href="">abc.com</a></p>
                              <!--<div class="sup-item item1">
                                 <div>
                                 
                                  <span class="title-support">Chat với chúng tôi:</span>
                                 
                                  <div class="icon-support">
                                 
                                    <span class="icon-chat">
                                 
                                    <a href="." target="_blank" title="Chat We">
                                 
                                      <img src="template/Default/img/skp.png" height="30" style="float:left; margin-right:5px;"/>  Mr.Quang
                                 
                                    </a></span>
                                 
                                 
                                 
                                  </div>
                                 
                                 </div>
                                 
                                 </div>
                                 
                                 <div class="sup-item item2">
                                 
                                 Góp ý, khiếu nại: (8h00 - 17h30)
                                 
                                 <span class="sub-item hanoi row"><i class="fa fa-caret-right fa-lg"></i>TP HCM:
                                 
                                 <span class="phone-number"><a href="tel:0906699 038">090 66 99 038</a></span>
                                 
                                 </span>
                                 
                                 <span class="sub-item hcm row"><i class="fa fa-caret-right fa-lg"></i>TP HCM: <span class="phone-number"><a href="tel:0909802038" >0909 80 20 38</a></span></span>
                                 
                                 </div>
                                 
                                 <div class="sup-item item3">Email: 
                                 
                                 <a class="email-text" href="mailto:thietbivanphong.123corp@gmail.com" title="Email hỗ trợ"><font color="#0092db">thietbivanphong.123corp@gmail.com</font></a></div>
                                 
                                 -->
                           </div>
                        </div>
                        <div class="clear"></div>
                     </div>
                  </div>
               </div>
               <div class="wrapper_all_main_right">
                  <div class="tabs-animation">
                     <div class="bg_in">
                        <div id="nav-anchor"></div>
                        <nav class="nav-tabs">
                           <ul>
                              <li><a href="#productDetail"><i class="fa fa-info-circle" aria-hidden="true"></i> <span class="text-mobile">Chi tiết sản phẩm</span></a></li>
                              <li><a href="#inforProduct"><i class="fa fa-file-text-o" aria-hidden="true"></i><span class="text-mobile"> Thông số kỹ thuật</span></a></li>
                              <li><a href="#Comment"><i class="fa fa-comment-o" aria-hidden="true"></i><span class="text-mobile"> Bình luận</span></a></li>
                           </ul>
                           <div class="name-product">
                              Iphone X
                              <span class="" style="font-size:16px; color:red; padding-left:5px;">1,960,000 VNĐ</span>
                           </div>
                           <div class="ct btn-wp">
                              <div class="wp_a">
                                 <a onclick="return giohang(371);" class="view_duan">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="text-mobile-buy">Mua hàng</span>
                                 </a>
                                 <a href="tel:090 66 99 038" class="view_duan">
                                    <i class="fa fa-phone" aria-hidden="true"></i> <span class="text-mobile-buy">Gọi ngay</span>
                                 </a>
                                 <div class="clear"></div>
                              </div>
                           </div>
                        </nav>
                     </div>
                  </div>
                  <div class="product_detail_info">
                     <div class="module_pro_all" id="productDetail">
                        <div class="box-title">
                           <div class="title-bar">
                              <h3>Chi tiết sản phẩm</h3>
                           </div>
                        </div>
                        <div class="tab_content content_text_product content-module">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                     </div>
                     <div class="module_pro_all" id="inforProduct">
                        <div class="box-title">
                           <div class="title-bar">
                              <h3>Thông số kỹ thuật</h3>
                           </div>
                        </div>
                        <div class="tab_content content_text_product content-module">
                           <?php echo $detail['desc_product'] ?>
                        </div>
                     </div>
                  </div>
                  <div class="clear"></div>

                  <script type="text/javascript">
                     CloudZoom.quickStart();

                     jQuery(function($) {

                        var $userName = $('.name');

                        if ($userName.length) {

                           $userName.avatarMe({

                              className: 'avatar-me',

                              maxChar: 1

                           });

                        }

                     });
                  </script>
                  <div class="clear"></div>
                  <div class="dmsub">
                     <div class="tags_products desktop">
                        <div class="tab_link">
                           <h3 class="title_tab_link">TAGS: </h3>
                           <div class="content_tab_link">
                              <a href="tag/">Iphone x</a>
                              <a href="tag/">Iphone 10</a>
                              <a href="tag/">Iphone 11</a>
                              <a href="tag/">Iphone Like New</a>

                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="content-brank">
                     <p><strong>Apple </strong>tự hảo<strong>&nbsp;</strong>là thương hiệu Việt Nam về sản phẩm tủ rack 19", tủ cửa lưới, tủ treo tường, bảo vệ thiết bị mạng an toàn, dễ dàng quản lý và vận hành.</p>
                  </div> -->
                  <div class="module_pro_all">
                     <div class="box-title">
                        <div class="title-bar">
                           <h3>Sản phẩm liên quan</h3>
                        </div>
                     </div>
                     <div class="pro_all_gird">
                        <div class="girds_all list_all_other_page ">
                           <div class="grids">
                              <div class="grids_in">
                                 <div class="content">
                                    <div class="img-right-pro">

                                       <a href="sanpham.php">
                                          <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/image/iphone.png" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                                       </a>

                                       <div class="content-overlay"></div>
                                       <div class="content-details fadeIn-top">
                                          <ul class="details-product-overlay">
                                             <li>Màn hình : Super Amoled 4.5k</li>
                                             <li>Độ phân giải : 2K+(1440x3040)</li>
                                             <li>Ram : 8GB</li>
                                             <li>CPU : Android 9.0</li>
                                             <li>GPU : Mali-G76 MP12</li>
                                             <li>SSD : 512MB</li>

                                          </ul>

                                       </div>
                                    </div>
                                    <div class="name-pro-right">
                                       <a href="chitietsp.php">
                                          <h3>Iphone X 64GB</h3>
                                       </a>
                                    </div>
                                    <div class="add_card">
                                       <a onclick="return giohang(579);">
                                          <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                       </a>
                                    </div>
                                    <div class="price_old_new">
                                       <div class="price">
                                          <span class="news_price">17.800.000đ </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="grids">
                              <div class="grids_in">
                                 <div class="content">
                                    <div class="img-right-pro">

                                       <a href="sanpham.php">
                                          <img class="lazy img-pro content-image" src="<?php echo BASE_URL ?>/public/image/iphone.png" data-original="image/iphone.png" alt="Máy in Canon MF229DW" />
                                       </a>

                                       <div class="content-overlay"></div>
                                       <div class="content-details fadeIn-top">
                                          <ul class="details-product-overlay">
                                             <li>Màn hình : Super Amoled 4.5k</li>
                                             <li>Độ phân giải : 2K+(1440x3040)</li>
                                             <li>Ram : 8GB</li>
                                             <li>CPU : Android 9.0</li>
                                             <li>GPU : Mali-G76 MP12</li>
                                             <li>SSD : 512MB</li>

                                          </ul>

                                       </div>
                                    </div>
                                    <div class="name-pro-right">
                                       <a href="chitietsp.php">
                                          <h3>Iphone X 64GB</h3>
                                       </a>
                                    </div>
                                    <div class="add_card">
                                       <a onclick="return giohang(579);">
                                          <i class="fa fa-shopping-cart" aria-hidden="true"></i> Đặt hàng
                                       </a>
                                    </div>
                                    <div class="price_old_new">
                                       <div class="price">
                                          <span class="news_price">17.800.000đ </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                     </div>
                     <div class="clear"></div>
                  </div>
               </div>

               <!--end:left-->
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
         </div>
      </form>
      <?php
   }
      ?>
      <script>
         jQuery(document).ready(function() {



            var div_fixed = jQuery('.product_detail_info').offset().top;

            jQuery(window).scroll(function() {

               if (jQuery(window).scrollTop() > div_fixed) {

                  jQuery('.tabs-animation').addClass('fix_top');

               } else {

                  jQuery('.tabs-animation').removeClass('fix_top');

               }

            });

            jQuery(window).load(function() {

               if (jQuery(window).scrollTop() > div_fixed) {

                  jQuery('.tabs-animation').addClass('fix_top');

               }

            });

         });
      </script>
</section>