                var map;
                function loadMapScenario() {
                    map = new Microsoft.Maps.Map(document.getElementById('myMap'), {});
                    map.setView({
                        zoom: 0
                    });
                    map.setOptions({
                        maxZoom: 12
                    })
                    
                }
                function search(map, query) {
                        //Create an instance of the search manager and perform the search.
                        Microsoft.Maps.loadModule('Microsoft.Maps.Search', function () {
                            searchManager = new Microsoft.Maps.Search.SearchManager(map);
                            geocodeQuery(map, query);
                        });
                    }
                    function geocodeQuery(map, query) {
                        var searchRequest = {
                            where: query,
                            callback: function (r) {
                                if (r && r.results && r.results.length > 0) {
                                    var pin, pins = [], locs = [], output = 'Results:<br/>';
                                    for (var i = 0; i < r.results.length; i++) {
                                        //Create a pushpin for each result. 
                                        pin = new Microsoft.Maps.Pushpin(r.results[i].location, {
                                            text: i + ''
                                        });
                                        pins.push(pin);
                                        locs.push(r.results[i].location);
                                        output += i + ') ' + r.results[i].name + '<br/>';
                                    }
                                    //Add the pins to the map
                                    map.entities.push(pins);
                                    //Display list of results
                                    document.getElementById('printoutPanel').innerHTML = output;
                                    //Determine a bounding box to best view the results.
                                    var bounds;
                                    if (r.results.length == 1) {
                                        bounds = r.results[0].bestView;
                                    }
                                    else {
                                        //Use the locations from the results to calculate a bounding box.
                                        bounds = Microsoft.Maps.LocationRect.fromLocations(locs);
                                    }
                                    map.setView({ bounds: bounds });
                                }
                            },
                        };
                        //Make the geocode request.
                        searchManager.geocode(searchRequest);
                    }

