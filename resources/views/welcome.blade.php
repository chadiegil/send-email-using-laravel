<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IPT | Email Send</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       <style>
            .form{
                background: white;
                padding: 15px;
                border-radius: 10px;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            }
            h4:hover{
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div
        class="bg-image p-3 shadow-1-strong"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');
        height: 100vh;"
      >
        <div class="container w-50 text-dark">
            <div class="form">
                <div class="header">
                    <h4 class="text-center">Send Mail</h4>
                </div>
                <div class="">
                    @if(Session::has('message'))
                        <div class="alert alert-info alert-dismissible fade show text-center" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                    @endif
                    <form action="{{ url('/send-mail') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <label for="email">Email to</label>
                            <input type="text" name="email" class="form-control">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="form-control">
                            @error('subject')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">Message</label>
                            <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
                            @error('content')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success sm w-100" >send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
