@extends('layouts-original.master-without-nav')
@section('title')
Login
@endsection
@section('body')

<body class="auth-body-bg">
    @endsection
    @section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="{{url('index')}}"><i class="mdi mdi-home-variant h2 text-white"></i></a>
    </div>
    <div>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                        <div class="w-100">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div>
                                        @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                        @endif

                                        @if(session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                        @endif

                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        <div class="text-center">
                                            <div>
                                                <a href="{{url()->current()}}" class="logo"><img src="{{ URL::asset('/assets/images/logo-aisten.png')}}" height="50" alt="logo"></a>
                                            </div>

                                            <h4 class="font-size-18 mt-4">Seja Bem Vindo!</h4>
                                            <!-- <p class="text-muted">Sign in to continue to Nazox.</p> -->
                                        </div>

                                        <div class="p-2 mt-5">
                                            <form method="POST" action="{{ route('tenant.login', ['prefix' => \Request::route('prefix')]) }}">
                                                @csrf

                                                <div class="form-group auth-form-group-custom mb-4">
                                                    <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group auth-form-group-custom mb-4">
                                                    <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                    <label for="password">{{ __('Password') }}</label>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" placeholder="Enter password">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">{{ __('Log In') }}</button>
                                                </div>

                                                <div class="mt-4 text-center">
                                                    @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> {{ __('Forgot your password?') }}</a>
                                                    @endif
                                                    <span class="text-politicas-uso" data-toggle="modal" data-target=".politicas-de-uso" style="cursor: pointer">POLÍTICAS DE USO</span>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- <div class="mt-5 text-center">
                                            <p>Don't have an account ? <a href="{{url('register')}}" class="font-weight-medium text-primary"> Register </a> </p>
                                            <p>
                                                <script>
                                                    document.write(new Date().getFullYear())
                                                </script>© Nazox. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                            </p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .nav-item {
                        color: white;
                    }

                    .nav-item:hover {
                        color: #dedede;
                    }
                </style>
                <div class="col-lg-8">
                    <div class="authentication-bg">
                        <div class="bg-overlay">
                            <div class="login-menu">
                                <div data-toggle="modal" data-target=".sobre-nos">SOBRE</div>
                                <div data-toggle="modal" data-target=".beneficios">BENEFÍCIOS</div>
                                <div data-toggle="modal" data-target="#contato">CONTATO</div>
                                <div class="item-menu-registrar"><a class="nav-item" href="{{url('/')}}">REGISTRAR</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade politicas-de-uso" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div style="text-align: center">
                    <h1>Políticas de Uso</h1>
                </div>
                <div style="text-align:justify ;padding: 20px 15px">
                    What is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    Why do we use it?
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                    Where does it come from?
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade sobre-nos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div style="text-align: center">
                    <h1>Sobre</h1>
                </div>
                <div style="text-align:justify ;padding: 20px 15px">
                    What is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    Why do we use it?
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                    Where does it come from?
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade beneficios" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div style="text-align: center">
                    <h1>Benefícios</h1>
                </div>
                <div style="text-align:justify ;padding: 20px 15px">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="contato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contato</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register-contact.register') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nome:</label>
                            <input required type="name" class="form-control" name="contact_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input required type="email" class="form-control" name="contact_email">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Mensagem:</label>
                            <textarea required class="form-control" name="contact_message"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection