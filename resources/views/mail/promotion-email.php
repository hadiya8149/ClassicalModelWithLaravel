
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <script src="https:/./cdnjsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
<style>
    /* img{
        box-shadow:10px 10px 20px grey;
        max-height:300px;
        min-height:100px;
    } */
    /* .yellow-shoes{
        height:300px;
        width:300px;
        background: url({{URL::asset("/images/black-yellow-shoes.png")}}) no-repeat center center;
        background-size:cover;
    }
    .red-shoes{
        height:300px;
        width:300px;
        background: url({{URL::asset("/images/red-shoes.png")}}) no-repeat center center;
        background-size:cover;
    }
    .grey-shoes{
        height:300px;
        width:300px;
        background: url({{URL::asset("images/grey-shoes.png")}}) no-repeat center center;
        background-size:cover;
    }
    .blue-shoes{
        height:300px;
        width:300px;
        background: url({{URL::asset("/images/blue-shoes.png")}}) no-repeat center center;
        background-size:cover;
    }
    
    .row{
        flex-direction:column;
        padding:16px;
    }
    .col-sm-auto{
        padding:0px;
    box-shadow: 10px 10px 20px grey;
        
    }
    .btn{
    }
    .content-block{
        text-align:center;
    }
    .btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            background-color: #007bff; 
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
        } */
        body {
    margin: 0;
    font-family: Arial, sans-serif;
    color: #333;
}

.container {
    width: 80%;
    margin: auto;
    padding: 20px;
}

header {
    background-color: #333;
    color: white;
}

nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0;
}

.navbar-brand {
    color: white;
    text-decoration: none;
    font-size: 24px;
}

.navbar-toggler {
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
}

.navbar-menu {
    display: flex;
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.navbar-menu.active {
    display: block;
}

.navbar-menu ul {
    display: flex;
    padding: 0;
    margin: 0;
    list-style: none;
}

.navbar-menu li {
    margin: 0 10px;
}

.nav-link {
    color: white;
    text-decoration: none;
}

.nav-link.active {
    font-weight: bold;
}

.nav-link.disabled {
    color: grey;
}

.content-block {
    text-align: center;
    position: relative;
    padding: 20px;
}

.products {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.row {
    display: flex;
    justify-content: center;
    margin: 10px 0;
}

.col {
    margin: 0 10px;
    box-shadow: 10px 10px 20px grey;
}

.yellow-shoes, .red-shoes, .grey-shoes, .blue-shoes {
    height: 300px;
    width: 300px;
    background-size: cover;
    background-position: center;
}

.yellow-shoes {
    background: url('images/black-yellow-shoes.png') no-repeat;
}

.red-shoes {
    background: url('images/red-shoes.png') no-repeat;
}

.grey-shoes {
    background: url('images/grey-shoes.png') no-repeat;
}

.blue-shoes {
    background: url('images/blue-shoes.png') no-repeat;
}

.btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

.footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
    position: relative;
    bottom: 0;
    width: 100%;
}
    </style>

</head>    
<body>
    <div class="container align-items-center justify-content-center">
        <div class="header" >
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">E-commerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Support</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1">Get Started</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </div>
<div class="content-block">
    <div>
    </div>
<div class="products d-flex align-items-center justify-content-center">
    
    <div class="row">
        <div class="col-sm-auto yellow-shoes">
            <!-- <img src="{{URL::asset('/images/black-yellow-shoes.png')}}" alt="e-commerce logo" class="card-img-top m-auto"/> -->

        </div>
        <div class="col-sm-auto red-shoes">
            <!-- <img src="{{URL::asset('/images/red-shoes.png')}}" alt="e-commerce logo" class="card-img-top m-auto"/> -->

        </div>
        </div>
        <div class="row">

            <div class="col-sm-auto grey-shoes">
                <!-- <img src="{{URL::asset('/images/grey shoes.png')}}" alt="e-commerce logo" class="card-img-top m-auto"/> -->

            </div>
            <div class="col-sm-auto blue-shoes">
                <!-- <img src="{{URL::asset('/images/blue-shoes.png')}}" alt="e-commerce logo" class="card-img-top m-auto"/> -->

            </div>
        </div>

</div>
<button class="btn btn-primary">Shop our Products</button>

<div>
</div>
</div>
<!-- <img src="{{URL::asset('/images/e-commerce-vector.png')}}" alt="e-commerce logo" class="card-img-top m-auto"/> -->

<div class="footer">
<div class="footer" style="background-color: #333333; padding: 40px; text-align: center; color: white; font-size: 14px;">
                        Copyright &copy; 2024 | E-commerce 
</div>
    

</div>
</div>
</body>
</html>
