<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
     
      #fm{
       
        height: 75vh;
        
      }
      .main-fm{
        width:50%;
        background: #3d3c3e;
        padding: 30px 40px;
        border-radius: 15px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
      }
      #input{
        background: none ;
        border: 2px solid #27c4b6;
        color: white;
        font-weight: bold;
        
      }
      .cal{
        color: #27c4b6;
        text-align: center;
      }
     
    </style>
  </head>
  <body class="bg-secondary" >
   <div id="fm" class="container">
    <div class="row">

        <div  class="col-12 mt-5" >
          <div class="main-fm">
          <form action="" method="post">
              <div class="cal"> 
                <h1>CALCULATOR</h1>
                <br>
              </div>
                <div id="input" class="form-control mb-3">
                  
                  <input class="form-control" type="number" name="n1">
                 
                </div>
                <div id="input"  class="form-control mb-3">
                  <input class="form-control" type="number" name="n2">
                 
                </div >
                   
                        <button class="btn btn-info"  name="add">add</button>
                         <button class="btn btn-danger" name="sub">sub</button>
                         <button class="btn btn-warning" name="multi">multi</button>
                        <button class="btn btn-primary" name="div">div</button>
                  <br>
                  <br>
                        <?php
      if (isset($_POST['n1']) && isset($_POST['n2'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        if ($n1) {
           if ($n2) {
            if (isset($_POST['add'])) { ?>
                  <div class="alert alert-info" role="alert">
                   <p class="mb-0"> Result <?php echo $n1+ $n2; ?> </p>
                  </div>
                
                <?php
            }
            elseif (isset($_POST['sub'])) { ?>
                  <div class="alert alert-danger  role="alert">
                   <p class="mb-0 "> Result <?php echo $n1- $n2; ?> </p>
                  </div>
                
                  <?php
            } 
            elseif (isset($_POST['multi'])) { ?>
              <div class="alert alert-warning" role="alert">
                   <p class="mb-0"> Result <?php echo $n1 * $n2; ?> </p>
                  </div>
                
              <?php
        } 
        elseif (isset($_POST['div'])) { ?>
          <div class="alert alert-primary" role="alert">
                   <p class="mb-0"> Result <?php echo $n1 / $n2; ?> </p>
                  </div>
              
          <?php
          
        }
        else { ?>
                  <div class="alert alert-primary" role="alert">
                   <p class="mb-0"> Result <?php echo 'number  daw nai'; ?> </p>
                  </div>
          <?php
        }
        
           }
              
            

        }
      }
    ?>
                
            </form>
          </div>
           
        </div>
        
    </div>
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
