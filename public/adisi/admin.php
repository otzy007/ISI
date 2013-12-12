<!DOCTYPE html>
<html lang="en">

<head>

<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<meta charset="utf-8">
<title>ISI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="css/flat-ui.css" rel="stylesheet">
<link href="shortcut icon" rel="images/favicon.ico">

<style>
			.center{
				width:800px;
				margin:0px auto;
				}
				
			.center2{
			background-color:#fff;
			width:1000px;
			margin:0px auto;
			}
			
			.navbar .nav li a{
			padding:22px 2px;
			}
			
			.detalii_angajat th,tr{
			text-align:center;
			}
			
			.detalii_angajat th{
			border-bottom:solid 1px;
			}
			
</style>

</head>


<body style="background-color:#69BC9C;width:1200px;height:700px;	margin:0px auto;
">
<br>

<nav class="navbar navbar-default center" role="navigation">


  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">

    <a class="navbar-brand" href="#">
	<button type="button" class="btn btn-default btn-lg">
	<span class="glyphicon glyphicon-user"></span>
	</button>	ISI 

	</a>
	
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    <ul class="nav navbar-nav navbar-right btn-group"">

		  <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><button type="button" class="btn btn-default">Administrapre<b class="caret"></b></button></a>
			<ul class="dropdown-menu">
			  <li><a href="#">Adauga angajat</a></li>
			  <li><a href="#">Adauga departament</a></li>
			  <li><a href="#">Adauga divizie</a></li>

			  <li class="divider"></li>
			  <li><a href="#">Management angajati</a></li>
			  
			</ul>
		  </li>

    </ul>

  </div><!-- /.navbar-collapse -->
</nav>
<hr>
<ol class="breadcrumb">
  <li class="active">Management angajati</li>
</ol>
<hr>
<div class="center2">

	<table >
		<tr>
			<td style="width:800px;height:300px" valign="top">
				<table class="detalii_angajat" width="100%">
					<tr>
						<th>
							Id intern
						</th>
						<th>
							Prenume
						</th>
						<th>
							Nume
						</th>
						<th>
							Email
						</th>
						<th>
							Departament
						</th>
						<th>
							Divizie
						</th>
						<th>
							Editare
						</th>
						<th>
							Stergere
						</th>
					</tr>
					<tr>
						<td>
							12751
						</td>
						<td>
							Cristian
						</td>
						<td>
							Merca
						</td>
						<td>
							cristian.merca@gmail.com
						</td>
						<td>
							HR
						</td>
						<td>
							IT
						</td>
						<td>
							Editare
						</td>
						<td>
							Stergere
						</td>
					</tr>
					
				</table>
			</td>
			<td style="width:200px;height:300px;background-color:#ECEEF0" align="center">
				<table>
					<tr>
						<td >
							Meniu secundar
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

</div>




</body>

</html>