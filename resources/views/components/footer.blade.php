<footer>
    <div class="mx-auto max-w-7xl px-6 py-12 md:flex md:items-center md:justify-center lg:px-8">
        <div class="flex justify-center space-x-6 md:order-2">
            @if (config('app.github_url'))
                <a href="{{ config('app.github_url') }}" class="text-white hover:text-gray-200">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                    </svg>
                </a>
            @endif

            @if (config('app.x_url'))
                <a href="{{ config('app.x_url') }}" class="text-white hover:text-gray-200">
                    <span class="sr-only">X</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
                    </svg>
                </a>
            @endif

            <a href="{{ config('meetup.url') }}" class="text-white hover:text-gray-200">
                <span class="sr-only">Meetup</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" version="1.0" class="-mt-1 h-8 w-8" viewBox="0 0 392.000000 392.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,392.000000) scale(0.100000,-0.100000)" stroke="none">
                        <path d="M1265 3535 c-28 -27 -32 -61 -10 -92 31 -44 97 -35 125 18 23 42 -21 99 -76 99 -8 0 -26 -11 -39 -25z" />
                        <path d="M2163 3451 c-49 -23 -73 -63 -73 -122 0 -111 128 -176 214 -108 56 44 72 118 36 176 -39 65 -108 86 -177 54z" />
                        <path d="M1655 3136 c-213 -49 -382 -178 -477 -362 -41 -79 -42 -80 -92 -92 -209 -50 -356 -239 -356 -458 0 -70 24 -170 54 -223 13 -23 10 -28 -30 -78 -83 -101 -118 -200 -118 -333 0 -142 65 -288 167 -375 51 -44 167 -103 217 -111 l36 -6 16 -85 c34 -179 146 -328 302 -402 165 -77 380 -65 528 30 l48 31 47 -31 c213 -141 498 -59 599 174 26 59 31 65 59 65 71 1 189 30 261 65 144 69 267 221 308 381 21 81 21 234 0 305 -9 30 -27 80 -41 111 l-25 57 36 44 c114 139 112 323 -5 451 -29 31 -73 66 -103 81 l-53 26 -7 82 c-14 176 -62 285 -180 403 -65 65 -98 89 -166 122 -47 22 -109 45 -138 51 -76 16 -212 14 -292 -5 -69 -15 -69 -15 -112 10 -24 13 -79 37 -123 52 -98 33 -264 42 -360 20z m518 -588 c12 -6 43 -29 68 -50 25 -21 51 -38 58 -38 6 0 29 9 51 20 47 24 172 28 223 6 47 -20 93 -72 107 -122 27 -95 7 -165 -138 -499 -78 -177 -102 -257 -102 -334 0 -75 22 -93 134 -114 107 -19 136 -41 136 -99 0 -88 -102 -118 -278 -82 -161 33 -252 128 -260 274 -5 79 -1 89 142 387 112 233 126 282 87 303 -27 14 -64 -2 -88 -37 -11 -15 -91 -167 -177 -338 -97 -191 -170 -323 -190 -344 -39 -39 -105 -52 -157 -31 -37 16 -62 67 -53 108 4 15 47 127 95 250 92 230 103 278 73 320 -19 27 -63 29 -92 5 -13 -11 -76 -158 -161 -373 -77 -195 -152 -371 -165 -391 -37 -54 -103 -83 -175 -76 -130 11 -221 103 -221 224 0 35 120 437 196 653 77 223 107 270 206 319 88 44 145 43 257 -8 128 -58 130 -57 210 9 34 28 71 55 83 60 33 13 106 12 131 -2z" />
                        <path d="M963 3025 c-33 -14 -63 -59 -63 -95 0 -54 51 -100 111 -100 41 0 66 15 84 50 30 59 13 115 -45 145 -35 18 -46 18 -87 0z" />
                        <path d="M3215 2691 c-42 -18 -60 -50 -60 -108 0 -49 3 -58 33 -84 26 -23 42 -29 78 -29 39 0 51 5 81 35 33 33 35 39 31 86 -7 66 -38 100 -99 105 -24 2 -53 0 -64 -5z" />
                        <path d="M3620 2257 c-32 -16 -40 -70 -14 -98 36 -40 104 -12 104 42 0 50 -46 78 -90 56z" />
                        <path d="M401 2132 c-121 -65 -74 -255 62 -255 62 0 105 26 129 79 54 123 -73 239 -191 176z" />
                        <path d="M3453 1853 c-30 -6 -63 -49 -63 -83 0 -59 72 -106 122 -79 34 18 47 40 48 80 0 54 -50 93 -107 82z" />
                        <path d="M857 972 c-36 -40 -9 -102 45 -102 49 0 78 69 42 104 -21 22 -67 20 -87 -2z" />
                        <path d="M2803 769 c-67 -14 -113 -70 -113 -138 0 -134 161 -196 249 -96 92 105 1 263 -136 234z" />
                        <path d="M1904 500 c-31 -12 -54 -49 -54 -85 1 -94 137 -116 171 -28 14 37 -6 90 -41 108 -32 17 -45 18 -76 5z" />
                    </g>
                </svg>
            </a>
        </div>
    </div>
</footer>