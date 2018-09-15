<html>
    <head>
        <meta charset="UTF-8">
        <title>LoveChart</title>
        <link rel="stylesheet" type="text/css" href="ChartStyles.css">

    </head>
    <body>
        <script>

            window.fbAsyncInit = function () {
                FB.init({
                    appId: '321585578575368',
                    autoLogAppEvents: true,
                    xfbml: true,
                    version: 'v3.1'
                });
            };
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <script>var i = "<?php echo $_GET['urlNet'] ?>";</script>


        <div id="container" >


            <div id="form">

                <table class="tabla" >



                    <tr class='row1'>

                        <td class="col1"><label>Fecha:</label></td> 
                        <td class="col2"><p><?php echo $i->date ?></p></td>

                    </tr>

                    <tr class='row1' style="background-color: red">

                        <td class="col1"><label>Cuenta:</label></td> 
                        <td class="col2"><h3>splendid</h3></td>

                    </tr>

                    <tr class='row1'>

                        <td class="col1"><label>Red Social:</label></td> 
                        <td class="col2"><p><?php echo $i->net ?> </p></td>

                    </tr>

                    <tr class='row1'>
                        <td></td>
                    </tr>

                    <tr class='row1'>


                        <td class="col1"><label>Actores</label></td> 

                    </tr>


                </table>
                <script>

                </script>
            </div>

<!--            <div id="embbed">
                <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v2.5" 
                async></script>  
                <div class="fb-post" style="height: 100%"
                     data-href="<?php echo $i->link ?>"
                     data-width="auto"></div>-->

            </div>  


        </div>


    </body>

    <?php
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    /**
     * Description of ChartBuilder
     *
     * @author JavSF
     */
    class ChartBuilder {

        public function fbChart($param) {

            return $param;
        }

        public function twtrChart($param) {
            
        }

    }
    ?>

</html>
