            $(document).ready(function () {

                // loading data ...  
                function dataload(){
                    $.ajax({
                      post: "GET",
                      url: "action/client/dataset.php",
                      success: function(res)
                       {
                        $("#datatable1").html(res);
                        $('#example').dataTable({
                            "responsive": true,
                        });
                        var dt=  $('#example').DataTable();
                        $('.Mod').on('click',function(){
                                
                                map.entities.push(Microsoft.Maps.TestDataGenerator.getPushpins(1, map.getBounds()));
                                    for (var i = map.entities.getLength() - 1; i >= 0; i--) {
                                        var pushpin = map.entities.get(i);
                                        if (pushpin instanceof Microsoft.Maps.Pushpin) {
                                            map.entities.removeAt(i);
                                        }
                                    }
                                $("#ref").val(dt.row($(this).closest('tr')).data()[0]);
                                search(map, dt.row($(this).closest('tr')).data()[3]);
                        });
                        
                       }
                    });
                }
                
                //on load
                $(window).load(function() {
                        dataload();
                        loadMapScenario();
                  });

                
                $("#registerForm").submit(function(e) {
                    var form = $(this);
                    $.ajax({
                           type: "POST",
                           url: 'action/client/dashboard.php',
                           data: form.serialize(), // serializes the form's elements.
                           success: function(data)
                           {
                               alert(data);
                           }
                         });

                    e.preventDefault(); // avoid to execute the actual submit of the form.
                });


            });