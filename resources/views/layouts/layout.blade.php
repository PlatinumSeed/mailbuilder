<!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 		<title></title>
 		<meta name="description" content=" " />
 		<meta name="author" content=" " />
 		<meta name="HandheldFriendly" content="true" />
 		<meta name="MobileOptimized" content="320" />
 		<!-- Use maximum-scale and user-scalable at your own risk. It disables pinch/zoom. Think about usability/accessibility before including.-->
 		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
 		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
 		<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
 	</head>
 	<body>
 		@yield('content')

        <script src="{{asset('js/app.js')}}"></script>
 	</body>
 </html>
