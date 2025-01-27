<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.clineLT.head')
</head>

<body>
    <section class="wrapper">
        {{-- Phần đầu trang web --}}
        @include('Layout.clineLT.header')
        <!-- Phần thân trang web -->
        <section class="container_login">
            <div class="logo_login">
                <img src="{{ asset('img/logo/logo-whitew.png') }}" alt="" />
            </div>
            <!-- quên mật khẩu  -->
            <div class="form_forgetPass" id="form_forgetPass">
                <form action="{{ route('forgetPass.doForgetPass') }}" method="post" class="forget_form">
                    @csrf
                    <h5 id="text-link-header">Quên mật khẩu</h5>
                    <h6>Vui lòng nhập email và tên tài khoản bạn đã đăng ký</h6>
                    <div class="input_box_forget">
                        <input type="text" value="{{ old('userName') }}" name="userName" id="qmk_userName"
                            required />
                        <label for="qmk_userName">Tên tài khoản</label>
                    </div>
                    <div class="input_box_forget">
                        <input type="email" value="{{ old('nameEmail') }}" name="nameEmail" id="qmk_email" required />
                        <label for="qmk_email">Email của bạn </label>
                    </div>
                    <a href="{{ route('login.index') }}">
                        <span id="goback_login">
                            <p id="text-link-header">Go back login!</p>
                        </span></a>
                    <div class="input_box_forget">
                        <button type="submit" class="btn_login_register" style="margin: 0 37.5%">
                            Gửi
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <!-- kết thúc Phần thân trang web -->
        @include('Layout.clineLT.footer')
    </section>
    <!-- link js -->
    <script src="{{ asset('js/signUp.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
