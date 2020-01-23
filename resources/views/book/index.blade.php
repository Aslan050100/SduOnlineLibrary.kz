<!DOCTYPE html>
<html>
<head>
    <title>Sdu Online Library</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<style type="text/css">
    .post_download{
     padding-left: 300px;
     padding-top: 10px;
    font-size: 22px;
}
.post_download a{
    color:white;
}
.project_title {
   
    color: rgb(52, 68, 88);
    
}
.upload{
padding-left: 180px; 
}
</style>
</head>
<body>
    <header>
        <div class="header">
            <div class="first_header">
                <a href="">SDU's online library</a>
            </div>
            <div class="second_header">
                <a href="">UPLOAD BOOK</a>
            </div>  
        </div>
        
    </header>
    <div class="container">
            <div class='info'>
                <h1 class='project_title'>-MADE FOR YOUR USE</h1>
                
            </div>
        </br>

            <div class="search">
            <form method="post" action="{{route('book.search')}}" enctype="multipart/form-data">
                {{csrf_field() }}
                <input type="search" name="bookname">
                <button id = "books" type="submit" class="btn btn-primary" style="margin-bottom: 10px"> Search</button>
            </form>
            </div>
          

            <div class="posts">
                @foreach($books as $book)
                <div class='post'> 
                    <div class='post_content'>
                        <h1 class='post_title'>{{$book->name}}</h1>
                        <div class="post_download">
                            <a href="{{route('book.download',[$book->id])}}">Download</a>
                        </div>
                    </div>            
                </div>
                @endforeach
                
            </div>
             <span class="pagination">{{$books->links()}}</span>
         
      
            <div class="upload">
                <form method="post" action="{{route('book.addBook')}}" enctype="multipart/form-data">
                  {{ csrf_field() }}

                        <div class="input-group control-group increment" >
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                          <input type="file" name="file" class="form-control">
                            <input type ="hidden" name = "_token" value="{{ csrf_token() }}">
                          
                        </div>
                       

                        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

                  </form>   

            </div>
            
    </div>
     <footer>
        <div class='footer'>
            contact us: +77089429592 gmail:onlinelibrary@gmail.com
        </div>

    </footer>
<script type="text/javascript">
  
</script>

</body>
</html>