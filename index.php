<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Love</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
   
    </head>

    <body>
           
        <script src="scripts.js"> </script>

        <div id="container" style="width: 100%;height: 100%;background-color: white "

             <div id="container2" style="width: 80%;height: 80%;background-color: red;margin: 5% ">


                 <form id="f1" action="/Social-Plugin/ChartBuilder.php" method="GET" >
                    
                    <div class="row">

                        <div class="col-md-offset-1 col-md-4"><label>Net Link</label></div>

                        <div class="col-md-4"><input class="form-control" name="urlNet" type="text" />
                            <input type="submit" /></div>

                            <div class="col-md-offset-1 col-md-4"><label>Facebook</label></div>
                            <div class="col-md-4"><input class="form-control" name="mode" type="radio"/></div>

                            <div class="col-md-offset-1 col-md-4"><label>Twitter</label></div>
                            <div class="col-md-4"><input class="form-control" name="mode" type="radio"/></div>
                        </div>


                        <div class="row"id comments>




                        </div>

                        <div class="row">

                            <div class="col-md-offset-1 col-md-6"><label>Actores</label></div>
                            <div class="col-md-1"><input type="button" class="btn btn-success" id="add_actor" onClick="addActor()" value="+" /></div>

                        </div>
                        <div class="row" id="actors">


                        </div>

                        <div class="row">

                            <div class="col-md-offset-1 col-md-6"><label>Asuntos</label></div>
                            <div class="col-md-1"><input type="button" class="btn btn-success" id="add_asunto" onClick="addAsuntos()" value="+" /></div>


                        </div>
                        <div class="row" id="asuntos">


                        </div>
                        


                </form>


            </div>

    </body>


</html>
