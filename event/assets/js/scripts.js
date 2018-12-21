            $(document).ready(function () {

                // loading data ...  
                function dataload(){
                    $.ajax({
                      post: "GET",
                      url: "action/admin/table.php",
                      success: function(res)
                       {
                        $("#datatable1").html(res);
                        $('#example').dataTable({
                            "responsive": true,
                        });
                        var dt=  $('#example').DataTable();
                        $('.Mod').on('click',function(){
                                $("#id").val(dt.row($(this).closest('tr')).data()[0]);
                                $("#nameUpdated").val(dt.row($(this).closest('tr')).data()[1]);
                                $("#DateUpdated").val(dt.row($(this).closest('tr')).data()[2]);
                                $("#adresseUpdated").val(dt.row($(this).closest('tr')).data()[3]);
                                $('#DescModal').modal("show");
                                $('#eventFormUpdate').submit(function(e) {
                                    var form = $(this);
                                    $.ajax({
                                          type: 'POST',
                                          url: "action/admin/gerer.php",
                                          data: form.serialize()+'&action=Mod',
                                          success: function(modRes)
                                           {
                                                alert(modRes);
                                                location.reload();
                                           }
                                       });

                                    e.preventDefault(); // avoid to execute the actual submit of the form.
                                });

                        });
                        $('.Supp').on('click',function(){
                                $("#idUpdate").val(dt.row($(this).closest('tr')).data()[0]);
                                $('#SuppModal').modal("show");
                                $('#eventFormDelete').submit(function(e) {
                                    var form = $(this);
                                    $.ajax({
                                          type: 'POST',
                                          url: "action/admin/gerer.php",
                                          data: form.serialize()+'&action=Supp',
                                          success: function(supRes)
                                           {
                                                alert(supRes);
                                                location.reload();
                                           }
                                       });

                                    e.preventDefault(); // avoid to execute the actual submit of the form.
                                });

                        });
                       }
                    });
                }
                
                //on load
                $(window).load(function() {
                        dataload();
                  });

                //add event
                $("#eventForm").submit(function(e) {
                    var form = $(this);
                    $.ajax({
                           type: "POST",
                           url: 'action/event.php',
                           data: form.serialize(), // serializes the form's elements.
                           success: function(data)
                           {
                                alert(data);
                               dataload();
                           }
                         });

                    e.preventDefault(); // avoid to execute the actual submit of the form.
                });



            });