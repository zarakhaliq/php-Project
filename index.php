
<html lang=en>
<head>
<meta charset="UTF-8">
<link href= 'stylesheet.css' rel='stylesheet' type='text/css' /> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

<table style="border: solid 1px black" id='table'>
        <thead>
        <tr>
        <th id='heading'>Geonames</th>
        </tr>
        <tr>
            <th>lng</th>
            <th>observation</th>
            <th>ICAO</th>
            <th>clouds</th>
            <th>datetime</th>
            <th>temperature</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td id="lng"> </td>
            <td id="observation"> </td>
            <td id="ICAO"> </td>
            <td id="clouds"></td>
            <td id="datetime"> </td>
            <td id="temperature"></td>
        </tr>
        <tr>
            <td id="lng1"> </td>
            <td id="observation1"> </td>
            <td id="ICAO1"> </td>
            <td id="clouds1"></td>
            <td id="datetime1"> </td>
            <td id="temperature1"></td>
        </tr>
        <tr>
            <td id="lng2"> </td>
            <td id="observation2"> </td>
            <td id="ICAO2"> </td>
            <td id="clouds2"></td>
            <td id="datetime2"> </td>
            <td id="temperature2"></td>
        </tr>
        <tr>
            <td id="lng3"> </td>
            <td id="observation3"> </td>
            <td id="ICAO3"> </td>
            <td id="clouds3"></td>
            <td id="datetime3"> </td>
            <td id="temperature3"></td>
        </tr>
        </tbody>
        </table>
</body>
</html>

<script type="text/javascript">

$(document).ready(function(){
    
        $.ajax({
        url:"data.php",
        method:'POST',
        data:{},
        dataType:'json',
        success:function(JSONresponse, status){
           
        //row1:
        $('#lng').append(JSONresponse.weatherObservations[0].lng);
        $('#observation').append(JSONresponse.weatherObservations[0].observation);
        $('#ICAO').append(JSONresponse.weatherObservations[0].ICAO);
        $('#clouds').append(JSONresponse.weatherObservations[0].clouds);
        $('#datetime').append(JSONresponse.weatherObservations[0].datetime);
        $('#temperature').append(JSONresponse.weatherObservations[0].temperature);
        
        //row2:
        $('#lng1').append(JSONresponse.weatherObservations[1].lng);
        $('#observation1').append(JSONresponse.weatherObservations[1].observation);
        $('#ICAO1').append(JSONresponse.weatherObservations[1].ICAO);
        $('#clouds1').append(JSONresponse.weatherObservations[1].clouds);
        $('#datetime1').append(JSONresponse.weatherObservations[1].datetime);
        $('#temperature1').append(JSONresponse.weatherObservations[1].temperature);
        
        //row3:
        $('#lng2').append(JSONresponse.weatherObservations[2].lng);
        $('#observation2').append(JSONresponse.weatherObservations[2].observation);
        $('#ICAO2').append(JSONresponse.weatherObservations[2].ICAO);
        $('#clouds2').append(JSONresponse.weatherObservations[2].clouds);
        $('#datetime2').append(JSONresponse.weatherObservations[2].datetime);
        $('#temperature2').append(JSONresponse.weatherObservations[2].temperature);

        //row4:
        $('#lng3').append(JSONresponse.weatherObservations[3].lng);
        $('#observation3').append(JSONresponse.weatherObservations[3].observation);
        $('#ICAO3').append(JSONresponse.weatherObservations[3].ICAO);
        $('#clouds3').append(JSONresponse.weatherObservations[3].clouds);
        $('#datetime3').append(JSONresponse.weatherObservations[3].datetime);
        $('#temperature3').append(JSONresponse.weatherObservations[3].temperature);

    }
        
    })

});
</script>

