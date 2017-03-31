<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets')}}/media/css/bootstrap.min.css">
        <link href="{{asset('assets')}}/media/css/font-awesome.min.css" rel="stylesheet" />
        <link href="{{asset('assets')}}/media/css/fileinput.min.css" rel="stylesheet" />
        <link href="{{asset('assets')}}/media/css/AdminLTE.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet" /> 
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background:url(http://kbagi.com/img/body_bg.png) left top repeat #f0f0f0;">

        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="https://s-media-cache-ak0.pinimg.com/originals/67/1a/36/671a368f0cd48609624cfe33f22bf081.jpg" width="25px">
                  </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">BonesFiles</a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search Files">
                        </div>
                        
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown btn-group">
                            <a href="#" class="dropdown-toggle btn" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info</a>
                              <ul class="dropdown-menu" style="width: 300px !important; height;">
                                    <li><p style="cursor:default;" class="text-center" >Build With Sublime Text</p></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="http://steamcommunity.com/profiles/76561198202151286" target="_blank" style="cursor:default;" class="text-center" >Aditya Muhammad Zaini Ramdani &#40;1&#41;</a></li>  
                                    <li><a href="http://steamcommunity.com/profiles/76561198243492480" target="_blank" style="cursor:default;" class="text-center" >Kevin Alfian &#40;17&#41;</a></li>  
                                    <li><a href="http://steamcommunity.com/id/PhewZapp" target="_blank" style="cursor:default;" class="text-center" >Muhammad Rizaldi Putrama Henry &#40;20&#41;</a></li>
                                      
                                    <li role="separator" class="divider"></li> 
                                    <li><p style="cursor:default;" class="text-center" >BonesFiles 2017 &copy;</p></li>
                                 
                              </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-th-large"> </i> </a>
                            <ul class="dropdown-menu">
                                <li><a class="btn" data-toggle="modal" href='#modal-utama'>Upload a file ..</a></li>
                                <li role="separator" class="divider"></li>
                                @if(Auth::user() == null)
                                <li><a class="btn" data-toggle="modal" href='#modal-login'>Panel Admin</a></li>
                                @endif
                                @if(Auth::user() != null)
                                <li><a class="btn" data-toggle="modal" href='{{ url('logout') }}'>Logout</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Header -->
        <!-- Tempat File -->
        <div class="container">
        <div class="alert alert-success">
            <center>
                <strong>Upload your file anonymously !</strong>
            </center>
        </div>

            <div class="box box-primary">
                <div class="box-header">
                    <center>
                        <div class="page-header">
                            File Manager
                        </div>
                    </center>
                </div>
                <div class="box-body">
                    <table class="table table-hovered table-bordered dtable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama File</th>
                                <th>Ukuran File</th>
                                <th>Tanggal Upload</th>
                                <th>Diunduh</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{ $no = 0 }}
                            @foreach($result as $row)
                            <tr>
                                <td>{{ $no+=1 }}</td>
                                <td>{{ $row->nama_file }}</td>
                                <td>{{ $row->ukuran_file }}</td>
                                <td>{{ $row->tanggal_upload }}</td>
                                <td>{{ $row->jumlah_download }} kali</td>
                                <td>
                                    <form method="POST" action="{{route('UploadFile.destroy',$row->id_upload)}}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-block btn-warning"><i class="glyphicon glyphicon-trash"></i></button>
                                    </form>
                                </td>    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            

            @if(Auth::user() != null)
            <div class="box collapsed-box">
            @else
            <div class="box">
            @endif    
                <div class="box-header">
                    <div class="page-header">
                        <center>
                            <h1>File ready to downloads ...</h1>
                        </center>
                    </div>
                    @if(Auth::user() != null)
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                    @endif
                </div>
                <div class="box-body">
                    @foreach($result as $row)
                    <div class="col-lg-3">
                        
                        <div class="box box-success">
                            <div class="box-header">
                                {{ $row->nama_file }}
                                    <i class="glyphicon glyphicon-cog pull-right" data-toggle="modal" href='#modal-opsi'></i>
                            </div>
                            <div class="box-body" style="height: 200px;background :center no-repeat url('http://www.pintarnet.com/wp-content/uploads/2016/08/apa-itu-game-dota-2.jpg');background-size: cover; ">
                                    <p class="text-center" style="color:white;background-color:rgba(0, 0, 0, 0.5);">
                                    Uploaded On : {{$row->tanggal_upload}}
                                    <br>
                                    Size File : {{$row->ukuran_file}}
                                    <br>
                                    Downloaded {{$row->jumlah_download}} Times
                                    </p>
                            </div>  
                            <div class="box-footer">
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Download</button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-share"><i class="fa fa-share-alt"></i> Share</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
                <div class="box-footer">
                    <center>
                        <ul class="pagination pagination-sm">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-utama">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Upload a file ..</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/UploadFile')}}" method="POST" role="form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">File</label>
                                <input id="file" name="file" data-show-preview="false" type="file" class="file">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-login">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Admin Login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('login') }}" method="POST" name="login" role="form">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="">
                            </div>
                        
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary submit">Login</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="{{asset('assets')}}/media/js/fileinput.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://almsaeedstudio.com/themes/AdminLTE/dist/js/app.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
            $('.submit').click(function(event) {
                $('form[name="login"]').submit();
            });
            $('.dtable').DataTable();
        </script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    </body>
</html>