
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="msapplication-TileColor" content="#162946">
		<meta name="theme-color" content="#e72a1a">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="Duplex VehiclesOptimized" content="320">
		<meta name="description" content="Car Listing,Dealer,Rental Auto Classifieds Bootstrap Modern Responsive Clean HTML Template">
		<meta name="keywords" content="autotrader,autotrader dealer portal,car classifieds,autoportal,auto classifieds,car dealer template,Autolist,vehicle sale template,car dealer website,car sale template,automotive websites,auto websites,template for selling car,automotive template,car dealer website template,automotive classifieds,car for sale template,car dealer html template,automotive template,car dealer template,car dealer website template,car service template,html template,bootstrap templates,css templates,responsive template,premium html templates,template premium">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EXPERPTOS CHILE</title>
    
    @include('style.style')
  </head>
  <body>
    @yield('content')
  </body>
    @include('script.script')
</html>