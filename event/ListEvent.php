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
                                    Mes Evenements
                                </h3>  
                            </div>
                       
                            <div class = "panel-body">
                                <div class = "col-md-12">
                                    <!-- List -->
                                    <div id ="datatable1" class="table-responsive">          
                                        <p id="info">Veuillez entrer votre mail pour visualiser tous les evenements,<br>Merci!</p>
                                        <table  id="example" class="table table table-striped table-hover dt-responsive display" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nom Ev</th>
                                                    <th>Date</th>
                                                    <th>Adresse</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-4">
                        <div class = "panel panel-default">
                            <div class = "panel-heading">
                                <h3 class = "panel-title">
                                    Recherche par mail
                                </h3>
                            </div>
                       
                            <div class = "panel-body">
                                <div class = "col-md-12">
                                    <form role = "form" id="searchForm">
                                        <div class = "form-group">
                                            <label for = "mail">E-mail</label>
                                            <input type = "email" class = "form-control" id = "mail" name="mail" required>
                                        </div>
                                        <button type = "submit" class = "btn btn-default">Submit</button>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"/>
      
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <!-- Javascript -->
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/responsive/1.0.2/js/dataTables.responsive.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.js"></script>

        <!-- Selections les evenemnts pour un client => JSON -->
        <script>
            $(document).ready(function () {

                function drawTable(data) {
                    for (var i = 0; i < data.length; i++) {
                        drawRow(data[i]);
                    }
                }

                function drawRow(rowData) {
                    var row = $("<tr />")
                    $("#example").append(row); //this will append tr element to table... keep its reference for a while since we will add cels into it
                    row.append($("<td>" + rowData.evenement + "</td>"));
                    row.append($("<td>" + rowData.date + "</td>"));
                    row.append($("<td>" + rowData.adresse + "</td>"));
                }
                
                $("#searchForm").submit(function(e) {
                    var form = $(this);
                    $.ajax({
                           type: "POST",
                           url: "action/client/MyEvent.php",
                           data: form.serialize(), // serializes the form's elements.
                           success: function(response)
                           {
                                response = $.parseJSON(response);
                                drawTable(response);
                                
                           }
                         });

                    e.preventDefault(); // avoid to execute the actual submit of the form.
                });

            });
        </script>

    </body>

</html>

