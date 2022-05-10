<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Covid 19 API in Javascript</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="image">
	
</div>

 <div class="container">

 	<h1 class="text-center mt-5">Covid 19 Live Data in Table</h1>
 	<br><br>
 	<table class="table table-bordered" id="tbvalue">
    <thead>
      <tr>
        
        <th>Country</th>  
      	<th>Total Confirmed</th>
        <th>Total Recovered</th>
        <th>New deaths</th>
        <th>Total Deaths</th>
        <th>New Revovered</th>
        <th>Total Recovered</th>
      </tr>
    </thead>
    <tbody>
      <tr id="data">
       
      </tr>
    </tbody>
  </table>
  </table>
  <br>
  <button onclick = "refreshData()" class="btn btn-danger btn-block">
  	Refresh Data
  </button>
 </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script >
	init()

  function init(){
    var url = "https://api.covid19api.com/summary"

           var data = ''

    $.get(url,function(data){
          console.log(data.Countries)

          data = `
        
        <td>${data.Countries.NewConfirmed}</td>
        <td>${data.Countries.TotalConfirmed}</td>
        <td>${data.Countries.NewDeaths}</td>
        <td>${data.Countries.TotalDeaths}</td>
        <td>${data.Countries.NewRecovered}</td>
        <td>${data.Countries.TotalRecovered}</td>

          `

          $("#data").html(data)
    })

    var country = ''

    $.get(url,function(country){

      country = `

        <td>${country.Country.Country}</td>

      `
    })
  }

</script>
</html>