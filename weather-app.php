<!DOCTYPE html>
<html>
    
    <head>
        
        <title>Weather Scrapper</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        
        <style type="text/css">
            
            .jumbotron1 {
                text-align: center;
            }
            
            html { 
  
                background: url(images/background.jpeg) no-repeat center center fixed; 
  
                -webkit-background-size: cover;
  
                -moz-background-size: cover;
  
                -o-background-size: cover;
  
                background-size: cover;

            }
            
            body {
                background: none;
            }
            
            #cityName {
                text-align: center;
            }
            
        </style>
        
    </head>
    
    <body>
        
        <div class="container">
        <div class="jumbotron1">
            
            <br><br>
            
            <h1>What's The Weather?</h1>

            <p>Enter the name of a city.</p>

            
            
            <form method="post">

                <div class="form-group">
                                    
                    <input type="text" class="form-control" id="cityName" name="city" placeholder="City">

                    <br>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            
            </form>
            
            <?php
            
                if($_POST){
                    
                    $city = $_POST['city'];
                    
                    $weather = @file_get_contents("http://www.weather-forecast.com/locations/$city/forecasts/latest");
                    
                    if($weather){
                       
                        $array = explode('Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">',$weather);
                    
                  
                        $split1 = $array[1];
                    
                    
                        $split2 = explode('</span></span></span></p><div class="forecast-cont"><div class="units-cont"><a class="units metric active">',$split1);
                    
                    
                        echo $result = $split2[0];
                        
                    } else {
                        echo "City not found";
                    }
                       
                    
                    
                    
                }
            
            ?>
            
        </div>
        </div>
        
        
    </body>
    
</html>