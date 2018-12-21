<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>EvenTelecom</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>

        <!-- Bootstrap -->
        <link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
      
        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="http://cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.css"/>
        <link rel="stylesheet" href="http://cdn.datatables.net/responsive/1.0.2/css/dataTables.responsive.css"/>
    
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Map -->
        <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=AnMQX3W5Depcu1rNj0TgIX8pwimNfDlEHua_eTJabsPuoyp2ISjoQDqgANvDW09y'></script>
        <script type='text/javascript' src="assets/js/cliScripts.js">
                

            
        </script>

    </head>

    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                        <h1><a href="">EvenTelecom <span class="red">.</span></a></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <div class = "container">
                <div class="row">
                    <div style="margin-top: 2%">
                    </div>
                    <div class = "col-md-8">
                        <div class = "panel panel-default">
                            <div class = "panel-heading">
                                <h3 class = "panel-title">
                                    Nos Evenements
                                </h3>  
                            </div>
                       
                            <div class = "panel-body">
                                <div class = "col-md-12">
                                    <!-- List -->
                                    <div id ="datatable1" class="table-responsive">          
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-4">
                        <div class = "panel panel-default">
                            <div class = "panel-heading">
                                <h3 class = "panel-title">
                                    S'inscrire  |   <a href="ListEvent.php" style="color:#FF5722">Mes Evenements</a>
                                </h3>
                            </div>
                       
                            <div class = "panel-body">
                                <div class = "col-md-12">
                                    <form role = "form" id="registerForm">

                                        <div class = "form-group">
                                            <label for = "nom">Nom</label>
                                            <input type = "text" class = "form-control" id = "nom" name="nom" placeholder = "Nom" required>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "mail">E-mail</label>
                                            <input type = "email" class = "form-control" id = "mail" name="mail" required>
                                        </div>
                                        <div class = "form-group">
                                            <label for = "ref">Ref. </label>
                                            <input type = "text" class = "form-control" id = "ref" name="ref" readonly pattern=".+@globex.com" required>
                                        </div>
                                        <button type = "submit" class = "btn btn-default">Submit</button>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
                <div class="row">
                    <div style="margin-top: 2%">
                    </div>
                    <div class = "col-md-12">
                        <div class = "panel panel-default">
                            <div class = "panel-heading">
                                <h3 class = "panel-title">
                                    Emplacement
                                </h3>  
                            </div>
                       
                            <div class = "panel-body">
                                <div class = "col-md-12">
                                    <div id='myMap' style='width: 82vw; height: 50vh;'>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <!-- Javascript -->
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/responsive/1.0.2/js/dataTables.responsive.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.js"></script>

        <!-- Chercher les donnees et Gerer les actions -->
        <script src="assets/js/cliScriptsData.js">
        </script>

    </body>

</html>

