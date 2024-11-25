<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')

      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

            <div style="text-align: center;"> <!-- Sử dụng CSS để căn giữa -->
                <h1 style="font-size: 30px; font-weight: bold">
                    Welcome {{ $data->name ?? 'Admin' }} <!-- Kiểm tra nếu $data->name không có giá trị thì hiển thị 'Khách' -->
                </h1>
            </div>

            </div>
        </div>
    </div>
      
    @include('admin.footer')
  </body>
</html>
