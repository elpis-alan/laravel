<!--// resources/views/layouts/app.blade.php-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <!-- CSSとJavaScript -->
	<link href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel = "stylesheet" >
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- ナビバーの内容 -->
		<h3 style="text-align:center;">laravel</h3>
            </nav>
        </div>

        @yield('content')
    </body>
</html>
