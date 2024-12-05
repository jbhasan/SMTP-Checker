<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }
		.w-40 {
			width: 40rem
		}

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        :root {
            --color-light: white;
            --color-dark: #212121;
            --color-signal: #fab700;
            --color-background: var(--color-light);
            --color-text: var(--color-dark);
            --color-accent: var(--color-signal);
            --size-bezel: .5rem;
            --size-radius: 4px;
            line-height: 1.4;
            font-family: "Inter", sans-serif;
            font-size: calc(.6rem + .4vw);
            color: var(--color-text);
            background: var(--color-background);
            font-weight: 300;
            padding: 0 calc(var(--size-bezel) * 3);
        }

        h1,
        h2,
        h3 {
            font-weight: 900;
        }

        mark {
            background: var(--color-accent);
            color: var(--color-text);
            font-weight: bold;
            padding: 0 0.2em;
        }

        .card {
            background: var(--color-background);
            padding: calc(4 * var(--size-bezel));
            margin-top: calc(4 * var(--size-bezel));
            border-radius: var(--size-radius);
            border: 3px solid var(--color-shadow, currentColor);
            box-shadow: 0.5rem 0.5rem 0 var(--color-shadow, currentColor);
        }

        .card--inverted {
            --color-background: var(--color-dark);
            color: var(--color-light);
            --color-shadow: var(--color-accent);
        }

        .card--accent {
            --color-background: var(--color-signal);
            --color-accent: var(--color-light);
            color: var(--color-dark);
        }

        .card *:first-child {
            margin-top: 0;
        }

        .l-design-widht {
            max-width: 40rem;
            padding: 1rem;
        }

        .input {
            position: relative;
        }

        .input__label {
            position: absolute;
            left: 0;
            top: 0;
            padding: calc(var(--size-bezel) * 0.75) calc(var(--size-bezel) * .5);
            margin: calc(var(--size-bezel) * 0.75 + 3px) calc(var(--size-bezel) * .5);
            background: pink;
            white-space: nowrap;
            transform: translate(0, 0);
            transform-origin: 0 0;
            background: var(--color-background);
            transition: transform 120ms ease-in;
            font-weight: bold;
            line-height: 1.2;
        }

        .input__field {
            box-sizing: border-box;
            display: block;
            width: 100%;
            border: 3px solid currentColor;
            padding: calc(var(--size-bezel) * 1.5) var(--size-bezel);
            color: currentColor;
            background: transparent;
            border-radius: var(--size-radius);
        }

        .input__field:not(:-moz-placeholder-shown)+.input__label {
            transform: translate(0.25rem, -65%) scale(0.8);
            color: var(--color-accent);
        }

        .input__field:not(:-ms-input-placeholder)+.input__label {
            transform: translate(0.25rem, -65%) scale(0.8);
            color: var(--color-accent);
        }

        .input__field:focus+.input__label,
        .input__field:not(:placeholder-shown)+.input__label {
            transform: translate(0.25rem, -65%) scale(0.8);
            color: var(--color-accent);
        }

        .button-group {
            margin-top: calc(var(--size-bezel) * 2.5);
        }

        button {
            color: currentColor;
            padding: var(--size-bezel) calc(var(--size-bezel) * 2);
            background: var(--color-accent);
            border: none;
            border-radius: var(--size-radius);
            font-weight: 900;
        }

        button[type=reset] {
            background: var(--color-background);
            font-weight: 200;
        }

        button+button {
            margin-left: calc(var(--size-bezel) * 2);
        }

        .icon {
            display: inline-block;
            width: 1em;
            height: 1em;
            margin-right: 0.5em;
        }

        .hidden {
            display: none;
        }

    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 w-40">
            <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
				<img src="data:image/png;base64,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" />
            </div>

			<div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
				<div class="card">
					<form action="#" method="post">
						@csrf
						<h4>SMTP Configuration</h4>
						<div style="margin-bottom:10px;">
							<label class="input">
								<input class="input__field" type="text" placeholder=" " name="host" required />
								<span class="input__label">Host</span>
							</label>
						</div>
					
						<div style="margin-bottom:10px;">
							<label class="input">
								<input class="input__field" type="text" placeholder=" " name="port" required />
								<span class="input__label">Port</span>
							</label>
						</div>
					
						<div style="margin-bottom:10px;">
							<label class="input">
								<select class="input__field" placeholder=" " name="encryption">
									<option value="tls">TLS</option>
                                    <option value="startls">STARTLS</option>
									<option value="ssl">SSL</option>
									<option value="null">NULL</option>
									<option value="">EMPTY</option>
								</select>
								<span class="input__label">Encryption</span>
							</label>
						</div>
					
						<div style="margin-bottom:10px;">
							<label class="input">
								<input class="input__field" type="text" placeholder=" " name="username" required />
								<span class="input__label">Username</span>
							</label>
						</div>
					
						<div style="margin-bottom:10px;">
							<label class="input">
								<input class="input__field" type="text" placeholder=" " name="password" required />
								<span class="input__label">Password</span>
							</label>
						</div>

						<div style="margin-bottom:10px;">
							<label class="input">
								<input class="input__field" type="email" placeholder=" " name="mail_from" required />
								<span class="input__label">Mail From</span>
							</label>
						</div>

						<div style="margin-bottom:10px;">
							<label class="input">
								<input class="input__field" type="email" placeholder=" " name="to" required />
								<span class="input__label">Send To</span>
							</label>
						</div>

						<div style="margin-bottom:10px;">
							<div class="button-group">
								<button>Send Mail</button>
							</div>
						</div>
					</form>

					@if(session('error'))
					<hr>
					<div style="margin-bottom:10px;border:dashed 1px red;padding:5px;">
						{{ session('error') }}
					</div>
					@endif
					@if(session('success'))
					<hr>
					<div style="margin-bottom:10px;border:dashed 1px green;padding:5px;">
						{{ session('success') }}
					</div>
					@endif
				</div>
			</div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>

                        <a href="https://github.com/jbhasan" target="_blank" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    SMTP CHECKER v{{ "0.0.1" }}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
