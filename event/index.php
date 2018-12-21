<!DOCTYPE html>
<?php
    //Gestion d'accee pour un admin
    if (!isset($_SESSION['admin'])) {
            header('Location: login.html');
        }
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>EvenTelecom</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

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
   
                <div class = "row">
                    <div style="margin-top: 2%"></div>
                    <div class = "col-md-4">
                        <div class = "panel panel-default">
                            <div class = "panel-heading">
                                <h3 class = "panel-title">
                                    Ajouter un evenement
                                </h3>  
                            </div>
                       
                            <div class = "panel-body">
                                <div class = "col-md-12">
   
                                    <form role = "form" id="eventForm" action="">

                                        <div class = "form-group">
                                            <label for = "name">Nom de l'evenement</label>
                                            <input type = "text" class = "form-control" id = "name" name="nomEv" placeholder = "Nom de l'evenement">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "Date">Date de l'evenement</label>
                                            <input type = "Date" class = "form-control" id = "Date" name="dateEv">
                                        </div>
                                        <div class = "form-group">
                                            <label for = "adresse">Adresse de l'evenement</label>
                                            <textarea class="form-control" rows="5" id="adresse" name="adressEv" placeholder="Adresse de l'evenement" style="resize:"none"; "></textarea>
                                        </div>
                                        <button type = "submit" class = "btn btn-default">Submit</button>
                                        
                                    </form>
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
              
                    
                    <div class = "col-md-8">
                        
                        <div class = "panel panel-default">
                            <div class = "panel-heading">
                                <h3 class = "panel-title">
                                    Liste des evenements
                                </h3>  
                            </div>
                       
                            <div class = "panel-body">
                                <div id ="datatable1" class="table-responsive">          
                                    
                                </div>
                                <!-- dialog / Modifier--> 
                                <div class="modal fade" id="DescModal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                                 <h3 class="modal-title">Modifier l'evenement</h3>

                                            </div>
                                            <div class="modal-body">
                                                <div class="row dataTable">
                                                    <div class = "col-md-8 col-md-offset-2">
                                                        <form role = "form" id="eventFormUpdate" action="">
                                                           
                                                            <input type = "Hidden" class = "form-control" id = "id" name="idEv">
                                                        
                                                            <div class = "form-group">
                                                                <label for = "name">Nom de l'evenement</label>
                                                                <input type = "text" class = "form-control" id = "nameUpdated" name="nomEvUpdated" placeholder = "Nom de l'evenement">
                                                            </div>
                                                            <div class = "form-group">
                                                                <label for = "Date">Date de l'evenement</label>
                                                                <input type = "Date" class = "form-control" id = "DateUpdated" name="dateEvUpdated">
                                                            </div>
                                                            <div class = "form-group">
                                                                <label for = "adresse">Adresse de l'evenement</label>
                                                                <textarea class="form-control" rows="5" id="adresseUpdated" name="adressEvUpdated" placeholder="Adresse de l'evenement" style="resize:"none"; "></textarea>
                                                            </div>
                                                            <button type = "submit" class = "btn btn-default">Submit</button>
                                                            <button type="reset" data-dismiss="modal" class="btn btn-primary">Close</button>
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- /.modal-content -->
                                        </div>
                                    <!-- /.modal-dialog -->
                                    </div>
                                </div>
                                <!-- modal Supprimer -->
                                <div class="modal fade" id="SuppModal" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                                                 <h3 class="modal-title">Supprimer l'evenement</h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row dataTable">
                                                    <div class = "col-md-8 col-md-offset-2">
                                                        <form role = "form" id="eventFormDelete" action="">
                                                           
                                                            <input type = "Hidden" class = "form-control" id = "idUpdate" name="idEv">
                                                        
                                                            <div class = "form-group">
                                                                <label>Voulez-vous vraiment supprimer ?</label>
                                                            </div>
                                                            <button type = "submit" class = "btn btn-default">Oui</button>
                                                            <button type="reset" data-dismiss="modal" class="btn btn-primary">Non</button>
                                                            
                                                        </form>
                                                    </div>
                                                </div>  
                                            </div>
                                        <!-- /.modal-content -->
                                        </div>
                                <!-- /.modal-dialog -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-md-12">
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

        <!-- Script admin pour charger les donnees, ansi la gestion des evenements -->
        <script type="text/javascript" language="javascript" src="assets/js/scripts.js"></script>
    </body>

</html>

