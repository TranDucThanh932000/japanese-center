<template>
    <div id="wrap">
        <div id="header">
            <div class="d-flex mw-1200 center" id="wrap_header">
                <img class="pd-10" src="https://trungtamnhatngu.edu.vn/gioi-thieu/images/logo-nhat-ngu-sofl-1.png" alt="">
                <div class="d-flex align-items-center flex-grow-1 d_none_menu" id="item_header">
                    <div id="menu_icon" @click="showMenu()"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <ul class="d-flex justify-content-center justify-content-between w-100">
                        <li @click="scrollToCourseIntro('about_us')"><span><b>Giới thiệu</b></span></li>
                        <li @click="scrollToCourseIntro('journey')"><span><b>Lịch sử</b></span></li>
                        <li @click="scrollToCourseIntro('view-point')"><span><b>Tầm nhìn & sứ mệnh</b></span></li>
                        <li @click="scrollToCourseIntro('product__service')"><span><b>Sản phẩm</b></span></li>
                        <li @click="scrollToCourseIntro('level')"><span><b>Cấp độ đào tạo</b></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="body">
            <div class="banner">
                <img src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/trung-tam-tieng-nhat-sofl_2.jpg" alt="">
            </div>
            <div id="about_us" class="d-flex mw-1200 center mt-4 mb-4 row">
                <div class="col-sm-12 col-md-6 p-0">
                    <video controls width="100%" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/video-nhat.mp4"></video>
                </div>
                <div class="col-sm-12 col-md-6 d-flex align-items-center">
                    <div>
                        <h1 class="text-red bolder">VỀ CHÚNG TÔI</h1>
                        <p class="m-0">Trung tâm Nhật ngữ SOFL thành lập năm 2008, được cấp giấy phép Đào tạo số 2330/QĐ – SGD & ĐT Hà Nội của Sở giáo dục và Đào tạo Hà Nội. Trải qua 13 năm hoạt động, với bao nỗ lực không ngừng nghỉ, đến nay SOFL đã có 9 cơ sở tại Hà Nội, Tp. Hồ Chí Minh và Ninh Bình cùng 2 giải thưởng danh giá:</p>
                        <ul>
                            <li><span><b>CHỨNG NHẬN DỊCH VỤ HOÀN HẢO</b></span></li>
                        </ul>
                        <p class="m-0">Chương trình “Sản phẩm tin cậy, dịch vụ hoàn hảo, nhãn hiệu ưa dùng năm 2017 từ tạp chí Sở hữu Trí tuệ và Sáng tạo</p>
                        <ul>
                            <li><span><b>THƯƠNG HIỆU DẪN ĐẦU VIỆT NAM</b></span></li>
                        </ul>
                        <p class="m-0">Năm 2018 nhận cúp vàng “Thương hiệu dẫn đầu Việt Nam”</p>
                    </div>
                </div>
            </div>
            <div id="journey" class="center pt-4 pb-4">
                <div class="journey_content mw-1200 center">
                    <div class="text-center">
                        <h1 class="pt-5 pb-5 text-white">HÀNH TRÌNH PHÁT TRIỂN</h1>
                    </div>
                    <div class="cd-timeline__block">
                        <div class="timeline__content text-center text-white">
                            <h3>THÀNH LẬP</h3>
                            <div>
                                <span>Thành lập Trung tâm Nhật ngữ SOFL cơ sở 1 tại Số 365 Phố Vọng, Đồng Tâm, Hai Bà Trưng, Hà Nội</span>
                            </div>
                        </div>
                        <div class="timeline__img">
                            <img src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/001.png" alt="">
                            <p class="l-2"><b>2008</b></p>
                        </div>
                        <div class="timeline__content text-center text-white">
                        </div>
                    </div>
                    <div class="cd-timeline__block">
                        <div class="timeline__content text-center text-white">
                        </div>
                        <div class="timeline__img">
                            <img src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/002.png" alt="">
                            <p class="l-2 even_year"><b>2008</b></p>
                        </div>
                        <div class="timeline__content text-center text-white">
                            <h3>THÀNH LẬP</h3>
                            <div>
                                <span>Thành lập Trung tâm Nhật ngữ SOFL cơ sở 1 tại Số 365 Phố Vọng, Đồng Tâm, Hai Bà Trưng, Hà Nội</span>
                            </div>
                        </div>
                    </div>
                    <div class="cd-timeline__block">
                        <div class="timeline__content text-center text-white">
                            <h3>THÀNH LẬP</h3>
                            <div>
                                <span>Thành lập Trung tâm Nhật ngữ SOFL cơ sở 1 tại Số 365 Phố Vọng, Đồng Tâm, Hai Bà Trưng, Hà Nội</span>
                            </div>
                        </div>
                        <div class="timeline__img">
                            <img src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/001.png" alt="">
                            <p class="l-2"><b>2008</b></p>
                        </div>
                        <div class="timeline__content text-center text-white">
                        </div>
                    </div>
                    <div class="cd-timeline__block">
                        <div class="timeline__content text-center text-white">
                        </div>
                        <div class="timeline__img">
                            <img src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/002.png" alt="">
                            <p class="l-2 even_year"><b>2008</b></p>
                        </div>
                        <div class="timeline__content text-center text-white">
                            <h3>THÀNH LẬP</h3>
                            <div>
                                <span>Thành lập Trung tâm Nhật ngữ SOFL cơ sở 1 tại Số 365 Phố Vọng, Đồng Tâm, Hai Bà Trưng, Hà Nội</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="view-point" class="view-point mw-1200 center mt-4 mb-4 col-sm-12 row">
                <div class="col-sm-12 col-md-6 mb-2 p-0">
                    <img class="w-100" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/trung-tam-nhat-ngu-sofl-tam-nhin.jpg" alt="">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <span class="text-italic">Tầm nhìn & Sứ mệnh</span>
                        <h1 class="text-red">TẦM NHÌN</h1>
                        <p>Trung tâm Nhật ngữ SOFL sẽ trở thành một Trung tâm đào tạo tiếng Nhật tại Việt Nam đi đầu về sự đổi mới, đa dạng hóa, hình thức học chất lượng và hệ thống cơ sở vật chất hiện đại, tiến tiến. Tiếp tục nâng cao vị thế của mình trong ngành Giáo dục và Đào tạo tại Việt Nam</p>
                    </div>
                </div>
            </div>
            <div id="su-menh" class="su-menh mw-1200 center mt-4 mb-4">
                <!-- <div class="text-center">
                    <span class="text-italic">Tầm nhìn & Sứ mệnh</span>
                </div> -->
                <div class="text-center">
                    <h1 class="text-red">SỨ MỆNH</h1>
                </div>
                <div class="d-flex">
                    <div class="su-menh-child">
                        <div>
                            <img src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/frame-376.png" alt="">
                        </div>
                        <div class="text-center">
                            <h2>Đối với học viên</h2>
                        </div>
                        <div>
                            <p>Nhật ngữ SOFL giúp các học viên nắm chắc kiến thức và kỹ năng giao tiếp tiếng Nhật nhanh chóng gia nhập vào đội ngũ nhân lực chất lượng cao của xã hội.</p>
                        </div>
                    </div>
                    <div class="su-menh-child">
                        <div>
                            <img src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/frame-376.png" alt="">
                        </div>
                        <div class="text-center">
                            <h2>Đối với Xã hội</h2>
                        </div>
                        <div>
                            <p>SOFL đào tạo hàng triệu nhân lực Việt Nam phát triển toàn diện về trình độ và năng lực làm việc thực tế bằng tiếng Nhật. Cung cấp nguồn nhân lực cao cho các tổ chức, doanh nghiệp.</p>
                        </div>
                    </div>
                    <div class="su-menh-child">
                        <div>
                            <img src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/frame-376.png" alt="">
                        </div>
                        <div class="text-center">
                            <h2>Đối với nhân viên</h2>
                        </div>
                        <div>
                            <p>Tại SOFL tạo ra môi trường làm việc Tích cực – Công bằng – Kỷ luật. Nhân viên có cơ hội trau dồi khả năng ngoại ngữ để phát triển bản thân lâu dài</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product__service" class="product__service mw-1200 center mt-4 mb-4">
                <h1 class="text-center text-red py-5">SẢN PHẨM - DỊCH VỤ</h1>
                <div class="d-flex justify-content-between">
                    <div class="b_radius border w-48 box-sd">
                        <div>
                            <img class="b_radius" width="100%" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/22.08.12_offline.png" alt="">
                        </div>
                        <div class="d-flex m-3">
                            <div>
                                <img width="72px" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/396.png" alt="">
                            </div>
                            <div class="m-l-4">
                                <h4 class="text-red">SOFL OFFLINE</h4>
                                <p>Thành lập năm 2008, sau hơn 13 năm trưởng thành và phát triển, hiện tại Trung tâm Nhật ngữ SOFL đã có 9 cơ sở đào tạo trải khắp từ Bắc vào Nam và luôn phấn đấu không ngừng trở thành trung tâm đào tạo tiếng Nhật uy tín, chất lượng hàng đầu tại Việt Nam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="b_radius border w-48 box-sd">
                        <div>
                            <img class="b_radius" width="100%" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/22.08.12_truc-tuyen.png" alt="">
                        </div>
                        <div class="d-flex m-3">
                            <div>
                                <img width="72px" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/396.png" alt="">
                            </div>
                            <div class="m-l-4">
                                <h4 class="text-red">SOFL TRỰC TUYẾN</h4>
                                <p>Cùng với sự phát triển của công nghệ, áp dụng nền tảng học tập mới 4.0. SOFL đã mở ra các khóa đào tạo tiếng Nhật trực tuyến dành cho các học viên chưa có đủ thời gian tham gia các lớp học offline với lộ trình và chất lượng như của khóa học offline.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between my-4">
                    <div class="b_radius border w-48 box-sd">
                        <div>
                            <img class="b_radius" width="100%" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/22.08.12_doanh-nghiep.png" alt="">
                        </div>
                        <div class="d-flex m-3">
                            <div>
                                <img width="72px" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/396.png" alt="">
                            </div>
                            <div class="m-l-4">
                                <h4 class="text-red">SOFL DOANH NGHIỆP</h4>
                                <p>Lớp học được thiết kế dành riêng cho các doanh nghiệp, trang bị cho nhân sự kiến thức – kỹ năng về tiếng Nhật(theo nhu cầu của doanh nghiệp) để hoàn thành tốt vai trò và nhiệm vụ của bản thân đối với công việc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="b_radius border w-48 box-sd">
                        <div>
                            <img class="b_radius" width="100%" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/22.08.12_du-hoc-nhat.png" alt="">
                        </div>
                        <div class="d-flex m-3">
                            <div>
                                <img width="72px" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/396.png" alt="">
                            </div>
                            <div class="m-l-4">
                                <h4 class="text-red">SOFL DU HỌC</h4>
                                <p>Với mục tiêu làm cầu nối cho học sinh, sinh viên Việt Nam có cơ hội học tập tại Nhật, đến nay SOFL đã liên kết với hơn 20 trường Đại học Nhật Bản mở ra cánh cửa cho hàng triệu học viên có nhu cầu đi du học Nhật Bản.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product__service_sp">
                <CCarousel controls indicators>
                    <CCarouselItem>
                        <div class="b_radius border box-sd h-100">
                            <div>
                                <img class="b_radius w-100" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/22.08.12_offline.png" alt="">
                            </div>
                            <div class="d-flex m-3">
                                <div>
                                    <img class="width_logo_sp" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/396.png" alt="">
                                </div>
                                <div class="m-l-4">
                                    <h4 class="text-red">SOFL OFFLINE</h4>
                                    <p>Thành lập năm 2008, sau hơn 13 năm trưởng thành và phát triển, hiện tại Trung tâm Nhật ngữ SOFL đã có 9 cơ sở đào tạo trải khắp từ Bắc vào Nam và luôn phấn đấu không ngừng trở thành trung tâm đào tạo tiếng Nhật uy tín, chất lượng hàng đầu tại Việt Nam.</p>
                                </div>
                            </div>
                        </div>
                    </CCarouselItem>
                    <CCarouselItem>
                        <div class="b_radius border box-sd h-100">
                            <div>
                                <img class="b_radius w-100" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/22.08.12_truc-tuyen.png" alt="">
                            </div>
                            <div class="d-flex m-3">
                                <div>
                                    <img class="width_logo_sp" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/396.png" alt="">
                                </div>
                                <div class="m-l-4">
                                    <h4 class="text-red">SOFL TRỰC TUYẾN</h4>
                                    <p>Cùng với sự phát triển của công nghệ, áp dụng nền tảng học tập mới 4.0. SOFL đã mở ra các khóa đào tạo tiếng Nhật trực tuyến dành cho các học viên chưa có đủ thời gian tham gia các lớp học offline với lộ trình và chất lượng như của khóa học offline.</p>
                                </div>
                            </div>
                        </div>
                    </CCarouselItem>
                    <CCarouselItem>
                        <div class="b_radius border box-sd h-100">
                            <div>
                                <img class="b_radius w-100" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/22.08.12_doanh-nghiep.png" alt="">
                            </div>
                            <div class="d-flex m-3">
                                <div>
                                    <img class="width_logo_sp" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/396.png" alt="">
                                </div>
                                <div class="m-l-4">
                                    <h4 class="text-red">SOFL DOANH NGHIỆP</h4>
                                    <p>Lớp học được thiết kế dành riêng cho các doanh nghiệp, trang bị cho nhân sự kiến thức – kỹ năng về tiếng Nhật(theo nhu cầu của doanh nghiệp) để hoàn thành tốt vai trò và nhiệm vụ của bản thân đối với công việc.</p>
                                </div>
                            </div>
                        </div>
                    </CCarouselItem>
                    <CCarouselItem>
                        <div class="b_radius border box-sd h-100">
                            <div>
                                <img class="b_radius w-100" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/22.08.12_du-hoc-nhat.png" alt="">
                            </div>
                            <div class="d-flex m-3">
                                <div>
                                    <img class="width_logo_sp" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/396.png" alt="">
                                </div>
                                <div class="m-l-4">
                                    <h4 class="text-red">SOFL DU HỌC</h4>
                                    <p>Với mục tiêu làm cầu nối cho học sinh, sinh viên Việt Nam có cơ hội học tập tại Nhật, đến nay SOFL đã liên kết với hơn 20 trường Đại học Nhật Bản mở ra cánh cửa cho hàng triệu học viên có nhu cầu đi du học Nhật Bản.</p>
                                </div>
                            </div>
                        </div>
                    </CCarouselItem>
                </CCarousel>
            </div>
            <div class="quality_lecturer mw-1200 center mt-5 mb-4">
                <h1 class="text-center text-red mb-4">CHẤT LƯỢNG GIẢNG VIÊN</h1>
                <div class="text-center mb-5">
                    <p class="center w-50">Giáo viên được tuyển chọn từ các trường ĐH ngoại ngữ trong và ngoài nước, kinh nghiệm giảng dạy nhiều năm, được đào tạo bài bản kỹ lưỡng sau khi được tuyển vào SOFL. Lộ trình đào tạo giáo viên tại SOFL:</p>
                </div>
                <div class="d-flex flex-gap">
                    <div class="b_radius border w-30 p-3 box-sd bar">
                        <div class="bg-num">
                            <h5 class="text-center m-0">01</h5>
                        </div>
                        <h3 class="text-center text-red my-3">Kiến giảng</h3>
                        <p>Trước khi dạy chính thức, giao viên tại SOFL sẽ được tham gia kiến giảng lớp học để cảm nhận sự năng động, sáng tạo của các hoạt động diễn ra trong lớp</p>
                    </div>
                    <div class="b_radius border w-30 p-3 box-sd bar">
                        <div class="bg-num">
                            <h5 class="text-center m-0">02</h5>
                        </div>
                        <h3 class="text-center text-red my-3">Dạy thử</h3>
                        <p>Dạy trực tiếp cho học viên là quản lý và các giáo viên khác, lắng nghe góp ý và chỉnh sửa cải thiện từ đồng nghiệp.</p>
                    </div>
                    <div class="b_radius border w-30 p-3 box-sd bar">
                        <div class="bg-num">
                            <h5 class="text-center m-0">03</h5>
                        </div>
                        <h3 class="text-center text-red my-3">Dạy thực tế</h3>
                        <p>Dạy trực tiếp cho học viên. Theo dõi chất lượng tiết học, có quản lý đánh giá giáo viên hàng tháng và rút ra kinh nghiệm</p>
                    </div>
                </div>
            </div>
            <div id="level" class="level py-5">
                <h1 class="text-white text-center pb-5 m-0">CẤP ĐỘ ĐÀO TẠO</h1>
                <div class="d-flex flex-grap-2 mw-1200 center">
                    <img width="23.5%" class="bg-white b_radius border box-sd" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/frame-405_2.png" alt="">
                    <img width="23.5%" class="bg-white b_radius border box-sd" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/frame-409.png" alt="">
                    <img width="23.5%" class="bg-white b_radius border box-sd" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/frame-410.png" alt="">
                    <img width="23.5%" class="bg-white b_radius border box-sd" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/frame-411.png" alt="">
                </div>
                <div class="achiverment mw-1200 center">
                    <h1 class="text-white text-center py-5 m-0">THÀNH TỰU NỔI BẬT</h1>
                    <div class="d-flex flex-grap pb-4 row">
                        <div class="position-relative  col-sm-12 col-md-6 pb-4">
                            <img width="100%" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/frame-412-1.png" alt="">
                            <div class="infor mau1">
                                <span>150000+</span>
                            </div>
                            <div class="infor2">
                                <p>Học viên Offline và Online</p>
                            </div>
                        </div>
                        <div class="position-relative  col-sm-12 col-md-6 pb-4">
                            <img width="100%" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/frame-412-2.png" alt="">
                            <div class="infor mau2">
                                <span>120000+</span>
                            </div>
                            <div class="infor2">
                                <p>Học viên đã đỗ JLPT</p>
                            </div>
                        </div>
                        <div class="position-relative col-sm-12 col-md-6 pb-4">
                            <img width="100%" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/frame-413-2.png" alt="">
                            <div class="infor mau1">
                                <span>200+</span>
                            </div>
                            <div class="infor2">
                                <p>Học viên du học Nhật Bản hàng năm</p>
                            </div>
                        </div>
                        <div class="position-relative col-sm-12 col-md-6">
                            <img width="100%" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/frame-413-1.png" alt="">
                            <div class="infor mau2">
                                <span>50+</span>
                            </div>
                            <div class="infor2">
                                <p>Đối tác là Doanh nghiệp</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partner py-5">
                <h1 class="text-center text-red pb-3">ĐỐI TÁC DOANH NGHIỆP</h1>
                <img width="100%" src="https://trungtamnhatngu.edu.vn/gioi-thieu/uploads/slides/frame-453.png"/>
            </div>
        </div>
        <div id="footer">
            <div class="row mw-1200 center py-5">
                <div class="col-sm-12 col-md-8">
                    <img src="https://trungtamnhatngu.edu.vn/hoc-tieng-nhat-truc-tuyen-online/uploads/nhat-ngu-sofl.png" alt=""/>
                    <h1 class="text-white">Hệ thống cơ sở</h1>
                    <p class="text-white">CS1 : Số 365 Phố Vọng - Đồng Tâm - Hai Bà Trưng - Hà Nội</p>
                    <p class="text-white">CS2 : Số 44 Trần Vĩ ( Lê Đức Thọ Kéo Dài ) - Mai Dịch - Cầu Giấy - Hà Nội</p>
                    <p class="text-white">CS3 : Số 6 - Ngõ 250 Nguyễn Xiển - Thanh Xuân - Hà Nội</p>
                    <p class="text-white">CS4 : Số 516 Nguyễn Văn Cừ - Gia Thuỵ - Long Biên - Hà Nội</p>
                    <p class="text-white">CS5 : Số 145 Nguyễn Chí Thanh - Phường 9 - Q. 5 - TP. HCM</p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="telephone d-flex border b_radius mb-2">
                        <div class="bg-telephone m-l-4"></div>
                        <div class="m-l-4">
                            <p style="margin-top: 15px"><b>HÀ NỘI : 1900-986.845</b></p>
                            <p><b>TP.HCM : 1900-886.698</b></p>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-white">Liên hệ</h1>
                        <h5 class="text-white">Email:</h5>
                        <p class="text-white">................................................</p>
                        <h5 class="text-white">Website:</h5>
                        <p class="text-white">................................................</p>
                    </div>
                    <div>
                        <h1 class="text-white">Liên kết</h1>
                        <div class="d-flex flex-gap">
                            <div class="facebook w-475">
                                <a href="https://www.facebook.com/">Facebook</a>
                            </div>
                            <div class="youtube w-475">
                                <a href="https://www.youtube.com/watch?v=Zzn9-ATB9aU">Youtube</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import $ from "jquery";
export default {
    data() {
        return{
            showMenuNav: false
        }
    },
    created(){

    },
    methods: {
        scrollToCourseIntro(id) {
            const el = document.getElementById(id);
            el.scrollIntoView({ behavior: "smooth", block: 'start', inline: "nearest"});
            this.showMenu();
        },
        showMenu() {
            this.showMenuNav = !this.showMenuNav
            if(this.showMenuNav) {
                $('#item_header').removeClass('d_none_menu');
                $('#item_header').addClass('show_menu');
            } else {
                $('#item_header').removeClass('show_menu');
                $('#item_header').addClass('d_none_menu');
            }
        }
    }
}
</script>