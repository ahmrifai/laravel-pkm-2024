<!DOCTYPE html>
<html lang="en">
	<head><base href="{{ url('/') }}"/>
		<title>BELAJAR LARAVEL</title>
		<meta charset="utf-8" />
		<meta name="description" content="Belajar laravel, deskripsi ini untuk SEO" />
		<meta name="keywords" content="belajar laravel, ini untuk SEO juga, metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="cms" />
		<meta property="og:title" content="Belajar laravel, deskripsi ini untuk SEO" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Belajar Laravel" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	</head>
    <body id="kt_body" class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
        <div class="d-flex flex-column flex-root">
			<style>body { background-image: url('{{ asset('assets/media/auth/bg4.jpg') }}'); } [data-bs-theme="dark"] body { background-image: url('{{ asset('assets/media/auth/bg4-dark.jpg') }}'); }</style>
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<div class="d-flex flex-center flex-lg-start flex-column">
						<a href="/" class="mb-7">
							<img alt="Logo" src="{{ asset('assets/media/logos/custom-3.svg') }}" />
						</a>
						<h2 class="text-white fw-normal m-0">BELAJAR LARAVEL (POLINDRA)</h2>
					</div>
				</div>
                @yield('body')
			</div>
		</div>
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    </body>
</html>
