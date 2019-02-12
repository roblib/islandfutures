<?php
$menu = menu_navigation_links('main-menu');
?>
<header class="l-header" role="banner">
    <div class="grid-container top-bar">
        <div class="top-bar-left">
            <div class="large-logo logo-wrapper">
                <a class="site-logo" href="https://www.cbu.ca/library/" rel="home" title="<?php print t('Home'); ?>">



<!-- large logo -->
<!--                    <svg class="small logo logo--header" preserveaspectratio="xMidYMid meet" viewbox="0 0 188 176">
                        <polygon class="logo__bg-back" fill="#F89624" points="188,175.536 90.504,161.325 0,175.536 0,0 188,0"></polygon>
                        <polygon class="logo__bg-front" fill="#DD6E26" points="188,171.049 90.504,156.838 0,171.049 0,0 188,0"></polygon>
                        <g class="logo__name">
                        <g>
                        <path d="M52.203 36.086c-0.114-1.574-1.802-2.623-3.489-2.623c-4.059 0-4.812 3.717-4.812 6.611 c0 3.398 1.028 6.611 4.608 6.611c1.754 0 3.35-0.865 3.625-2.62h2.394c-0.229 2.757-3.01 4.582-6.224 4.582 c-4.858 0-6.794-3.966-6.794-8.573c0-4.035 1.78-8.731 7.296-8.571c3.17 0.09 5.541 1.642 5.791 4.583H52.203z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <path d="M61.798 42.744c-1.321 0.066-3.077 0.546-3.077 2.209c0 1.416 0.982 2.121 2.256 2.121 c2.555 0 3.033-2.212 2.988-4.331H61.798z M63.966 41.238c0-1.982-0.116-3.146-2.417-3.146c-1.094 0-2.121 0.638-2.144 1.824 h-2.279c0.113-2.508 2.076-3.398 4.332-3.398c2.349 0 4.671 0.707 4.671 3.899v5.472c0 0.502 0.023 1.459 0.093 2.418h-1.459 c-0.206 0-0.593 0.114-0.616-0.161c-0.045-0.524-0.09-1.026-0.113-1.55h-0.048c-0.704 1.438-1.981 2.052-3.555 2.052 c-1.982 0-3.99-1.025-3.99-3.259c0-3.215 2.849-4.151 5.563-4.151H63.966z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <path d="M75.044 38.092c-2.46 0-3.235 2.417-3.235 4.491c0 2.143 0.614 4.491 3.03 4.491 c2.644 0 3.444-2.348 3.444-4.491C78.284 40.44 77.645 38.092 75.044 38.092 M69.643 38.913c-0.022-0.684-0.069-1.369-0.115-2.052 h2.211l0.071 1.823h0.044c0.663-1.64 2.1-2.165 3.899-2.165c3.214 0 4.812 2.965 4.812 6.065c0 2.941-1.37 6.064-5.497 6.064 c-0.933 0-2.441-0.456-3.194-1.642H71.81v5.677h-2.167V38.913z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <path d="M90.639 41.489c0.046-1.916-0.821-3.396-2.918-3.396c-1.802 0-2.875 1.527-2.875 3.396H90.639z M84.846 42.996c-0.159 2.005 0.662 4.079 2.875 4.079c1.688 0 2.532-0.66 2.78-2.325h2.281c-0.342 2.599-2.351 3.898-5.084 3.898 c-3.672 0-5.13-2.597-5.13-5.973c0-3.351 1.687-6.157 5.312-6.157c3.42 0.069 5.039 2.233 5.039 5.404v1.073H84.846z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <path d="M43.789 68.887h3.807c1.755 0 3.214-0.776 3.214-2.805s-1.459-2.804-3.214-2.804h-3.807V68.887z M43.789 61.315h2.828c2.164 0.069 3.694-0.318 3.694-2.484c0-2.167-1.53-2.553-3.694-2.485h-2.828V61.315z M41.508 70.847V54.386 h5.882c2.828 0 5.313 1.093 5.313 4.287c0 1.708-1.163 3.102-2.782 3.557v0.045c2.119 0.32 3.284 2.212 3.284 4.265 c0 1.914-1.253 3.351-2.988 3.989c-0.843 0.319-1.846 0.343-2.828 0.319H41.508z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <path d="M58.63 70.847h-2.167V59.402h2.167v2.212h0.045c0.319-1.573 1.779-2.372 3.353-2.372 c0.272 0 0.501 0.023 0.752 0.023v2.05c-0.295-0.113-0.64-0.113-0.936-0.113c-2.737 0.091-3.214 1.549-3.214 3.966V70.847z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <path d="M72.241 64.03c0.045-1.916-0.823-3.397-2.921-3.397c-1.799 0-2.869 1.527-2.869 3.397H72.241z M66.451 65.536c-0.162 2.005 0.657 4.08 2.869 4.08c1.689 0 2.532-0.661 2.784-2.325h2.279c-0.341 2.598-2.348 3.898-5.084 3.898 c-3.669 0-5.131-2.599-5.131-5.974c0-3.352 1.687-6.157 5.313-6.157c3.42 0.068 5.038 2.234 5.038 5.403v1.074H66.451z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <path d="M77.642 59.402v-2.44l2.166-0.683v3.123l2.645-0.069v1.618l-2.645-0.021v7.386 c0 0.822 0.638 1.209 1.415 1.209c0.34 0 0.797-0.046 1.139-0.137v1.665c-0.501 0.022-0.98 0.137-1.484 0.137 c-0.521 0-0.933-0.025-1.457-0.115c-0.342-0.068-0.912-0.25-1.277-0.753c-0.388-0.548-0.501-0.591-0.501-2.119V60.93l-1.961 0.021 v-1.618L77.642 59.402z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <path d="M89.817 69.616c2.576 0 3.419-2.051 3.419-4.491c0-2.441-0.843-4.492-3.419-4.492 c-2.578 0-3.422 2.051-3.422 4.492C86.396 67.565 87.24 69.616 89.817 69.616 M95.517 65.125c0 3.557-1.938 6.065-5.699 6.065 c-3.762 0-5.699-2.508-5.699-6.065c0-3.559 1.937-6.065 5.699-6.065C93.578 59.06 95.517 61.566 95.517 65.125" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <path d="M100.736 61.09h0.045c0.729-1.438 2.327-2.03 3.465-2.03c0.799 0 4.332 0.206 4.332 3.876v7.911h-2.164 v-7.204c0-1.894-0.798-2.919-2.623-2.919c0 0-1.187-0.068-2.097 0.843c-0.321 0.32-0.913 0.822-0.913 3.056v6.224h-2.168V59.402 h2.123V61.09z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <path d="M54.781 87.823c0.068 4.24-2.166 6.863-6.634 6.863c-4.47 0-6.705-2.623-6.637-6.863v-9.942h2.281v10.488 c0.069 2.827 1.756 4.354 4.356 4.354c2.597 0 4.287-1.526 4.353-4.354V77.881h2.281V87.823z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <path d="M60.958 84.583h0.045c0.73-1.435 2.325-2.029 3.466-2.029c0.798 0 4.333 0.206 4.333 3.877v7.913h-2.166 v-7.208c0-1.891-0.797-2.917-2.624-2.917c0 0-1.184-0.068-2.096 0.843c-0.321 0.321-0.913 0.822-0.913 3.055v6.227h-2.166V82.896 h2.121V84.583z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        </g>
                        <path d="M72.607 82.896h2.167v11.448h-2.167V82.896z M72.403 77.881h2.576v2.348h-2.576V77.881z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <polygon fill="#FFFFFF" points="82.229,94.344 77.441,82.896 79.833,82.896 83.482,91.971 87.038,82.896 89.41,82.896 84.394,94.344" transform="matrix(1 0 0 1 0 0)"></polygon>
                        <g>
                        <path d="M98.756 87.526c0.046-1.916-0.821-3.397-2.918-3.397c-1.802 0-2.872 1.528-2.872 3.397H98.756z M92.966 89.031c-0.16 2.004 0.66 4.079 2.872 4.079c1.688 0 2.53-0.659 2.781-2.323h2.281c-0.342 2.598-2.35 3.898-5.087 3.898 c-3.67 0-5.128-2.6-5.128-5.974c0-3.352 1.688-6.158 5.313-6.158c3.418 0.069 5.039 2.235 5.039 5.405v1.073H92.966z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <path d="M106.256 94.344h-2.164V82.896h2.164v2.213h0.047c0.317-1.573 1.779-2.371 3.351-2.371 c0.274 0 0.501 0.021 0.751 0.021v2.051c-0.295-0.113-0.637-0.113-0.936-0.113c-2.733 0.091-3.213 1.55-3.213 3.967V94.344z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <path d="M116.765 82.554c2.167 0 4.606 0.914 4.446 3.512h-2.279c0.092-1.459-1.025-1.938-2.279-1.938 c-1.163 0-2.1 0.547-2.1 1.824c0 1.275 1.962 1.366 2.783 1.62c1.938 0.638 4.172 0.863 4.172 3.442 c0 2.804-2.736 3.671-5.085 3.671c-2.395 0-4.398-1.096-4.378-3.742h2.283c0.043 1.415 1.002 2.167 2.324 2.167 c1.275 0 2.575-0.501 2.575-1.983c0-2.552-6.954-0.637-6.954-5.107C112.273 83.626 114.691 82.554 116.765 82.554" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        </g>
                        <path d="M124.357 82.896h2.167v11.448h-2.167V82.896z M124.15 77.881h2.577v2.348h-2.577V77.881z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        <g>
                        <path d="M130.537 82.896v-2.439l2.165-0.683v3.122l2.643-0.066v1.618l-2.643-0.022v7.386 c0 0.822 0.636 1.209 1.412 1.209c0.343 0 0.8-0.045 1.14-0.137v1.664c-0.501 0.023-0.98 0.139-1.48 0.139 c-0.525 0-0.935-0.024-1.461-0.115c-0.342-0.068-0.91-0.252-1.275-0.752c-0.387-0.548-0.5-0.592-0.5-2.121v-7.273l-1.963 0.022 v-1.618L130.537 82.896z" fill="#FFFFFF" transform="matrix(1 0 0 1 0 0)"></path>
                        </g>
                        <polygon fill="#FFFFFF" points="141.363,98.719 139.154,98.719 140.886,94.298 136.122,82.896 138.537,82.896 142.116,91.926 145.766,82.896 148.092,82.896" transform="matrix(1 0 0 1 0 0)"></polygon>
                        </g>
                        <g class="logo__happen">
                        <path d="M68.159 127.129l-0.511-0.016c-1.683 0-2.573-0.536-3.033-0.986c-0.592-0.592-0.88-1.43-0.88-2.557 c0-2.468 1.849-3.882 5.075-3.882c3.773 0 5.032 3.151 5.043 3.179l0.075 0.2l-0.106 0.179 C72.296 125.82 70.393 127.129 68.159 127.129 M68.515 117.883c-2.275 0-6.586 1.188-6.586 5.688c0 1.613 0.476 2.908 1.416 3.834 c0.697 0.694 2.02 1.518 4.384 1.518c0.22 0.006 0.353 0.009 0.486 0.009c1.818 0 3.483-0.671 4.947-2.003l0.725-0.654v1.315h1.805 v-12.196c0-3.483-2.539-5.738-6.465-5.738c-3.384 0-4.957 1.102-6.625 2.431l1.135 1.405c1.492-1.195 2.721-2.028 5.49-2.028 c2.961 0 4.661 1.433 4.661 3.931v5.569l-0.761-0.874C73.107 120.068 71.185 117.883 68.515 117.883" fill="#FFFFFF"></path>
                        <path d="M79.686 136.93h1.807v-22.855l0.094-0.118c0.898-1.136 2.501-2.495 5.01-2.495 c1.967 0 6.549 0.764 6.549 7.827c0 6.416-4.648 7.825-6.438 7.825c-0.611 0-1.127-0.012-1.665-0.172l-0.014 1.853 c0.537 0.108 1.068 0.128 1.679 0.128c3.185 0 8.242-2.616 8.242-9.634c0-7.104-4.316-9.634-8.353-9.634 c-1.626 0-3.118 0.445-4.43 1.328l-0.674 0.451v-0.782h-1.807V136.93z" fill="#FFFFFF"></path>
                        <path d="M97.613 136.93h1.807v-22.855l0.093-0.118c0.896-1.136 2.495-2.495 5.009-2.495 c1.969 0 6.546 0.764 6.546 7.827c0 6.416-4.644 7.825-6.433 7.825c-0.616 0-1.131-0.012-1.671-0.172l-0.01 1.853 c0.534 0.108 1.071 0.128 1.681 0.128c3.184 0 8.24-2.616 8.24-9.634c0-7.104-4.315-9.634-8.354-9.634 c-1.632 0-3.121 0.445-4.428 1.328l-0.674 0.451v-0.782h-1.807V136.93z" fill="#FFFFFF"></path>
                        <path d="M117.892 120.215v-0.816c0-5.361 3.085-8.16 6.13-8.16c2.115 0 4.684 0.881 5.559 3.348l0.131 0.379 L117.892 120.215z M124.021 109.434c-3.944 0-7.939 3.416-7.939 9.965c0 6.895 4.548 9.352 8.803 9.352 c4.513 0 7.585-3.813 7.884-6.584h-1.819c-0.312 1.887-2.561 4.775-6.064 4.775c-1.961 0-5.422-0.584-6.598-4.514l-0.109-0.365 l13.539-6.01c-0.039-0.308-0.097-0.654-0.097-0.654C131.012 111.661 128.17 109.434 124.021 109.434" fill="#FFFFFF"></path>
                        <polygon fill="#FFFFFF" points="56.652,127.558 58.459,127.558 58.459,102.477 56.652,102.477 56.652,113.217 43.316,113.217 43.316,102.477 41.509,102.477 41.509,127.558 43.316,127.558 43.316,115.012 56.652,115.012"></polygon>
                        <path d="M147.941 127.558h1.805v-12.302c0-2.16-1.221-5.822-5.795-5.822c-2.885 0-4.916 1.279-6.188 2.242 l-0.695 0.521v-1.574h-1.804v16.935h1.804v-13.259l0.109-0.123c1.107-1.263 3.012-2.934 6.773-2.934c3.699 0 3.99 3.068 3.99 4.014 V127.558z" fill="#FFFFFF"></path>
                        <path d="M155.078 126.248c0 0.785-0.64 1.426-1.426 1.426s-1.427-0.641-1.427-1.426 c0-0.787 0.641-1.426 1.427-1.426S155.078 125.461 155.078 126.248" fill="#FFFFFF"></path>
                        </g>
                    </svg> -->
<!-- small logo -->
                </a>
            </div>
            <div class="small-logo logo-wrapper">
                <a class="site-logo" href="https://www.cbu.ca/library/" rel="home" title="<?php print t('Home'); ?>">
                    <svg class="large logo logo--header" preserveaspectratio="xMidYMid meet" viewbox="0 0 188 176">
    <g transform="matrix(0.918251,0,0,1,0,0)">
        <path d="M188,175.536L90.504,161.325L0,175.536L0,0L188,0L188,175.536Z" style="fill:rgb(248,150,36);fill-rule:nonzero;"/>
        <path d="M188,171.049L90.504,156.838L0,171.049L0,0L188,0L188,171.049Z" style="fill:rgb(221,110,38);fill-rule:nonzero;"/>
    </g>
    <g transform="matrix(1.28988,0,0,1.28988,-38.0325,-26.131)">
        <g>
            <g>
                <path d="M52.203,36.086C52.089,34.512 50.401,33.463 48.714,33.463C44.655,33.463 43.902,37.18 43.902,40.074C43.902,43.472 44.93,46.685 48.51,46.685C50.264,46.685 51.86,45.82 52.135,44.065L54.529,44.065C54.3,46.822 51.519,48.647 48.305,48.647C43.447,48.647 41.511,44.681 41.511,40.074C41.511,36.039 43.291,31.343 48.807,31.503C51.977,31.593 54.348,33.145 54.598,36.086L52.203,36.086Z" style="fill:white;fill-rule:nonzero;"/>
                <path d="M61.798,42.744C60.477,42.81 58.721,43.29 58.721,44.953C58.721,46.369 59.703,47.074 60.977,47.074C63.532,47.074 64.01,44.862 63.965,42.743L61.798,42.743L61.798,42.744ZM63.966,41.238C63.966,39.256 63.85,38.092 61.549,38.092C60.455,38.092 59.428,38.73 59.405,39.916L57.126,39.916C57.239,37.408 59.202,36.518 61.458,36.518C63.807,36.518 66.129,37.225 66.129,40.417L66.129,45.889C66.129,46.391 66.152,47.348 66.222,48.307L64.763,48.307C64.557,48.307 64.17,48.421 64.147,48.146C64.102,47.622 64.057,47.12 64.034,46.596L63.986,46.596C63.282,48.034 62.005,48.648 60.431,48.648C58.449,48.648 56.441,47.623 56.441,45.389C56.441,42.174 59.29,41.238 62.004,41.238L63.966,41.238Z" style="fill:white;fill-rule:nonzero;"/>
                <path d="M75.044,38.092C72.584,38.092 71.809,40.509 71.809,42.583C71.809,44.726 72.423,47.074 74.839,47.074C77.483,47.074 78.283,44.726 78.283,42.583C78.284,40.44 77.645,38.092 75.044,38.092M69.643,38.913C69.621,38.229 69.574,37.544 69.528,36.861L71.739,36.861L71.81,38.684L71.854,38.684C72.517,37.044 73.954,36.519 75.753,36.519C78.967,36.519 80.565,39.484 80.565,42.584C80.565,45.525 79.195,48.648 75.068,48.648C74.135,48.648 72.627,48.192 71.874,47.006L71.81,47.006L71.81,52.683L69.643,52.683L69.643,38.913Z" style="fill:white;fill-rule:nonzero;"/>
                <path d="M90.639,41.489C90.685,39.573 89.818,38.093 87.721,38.093C85.919,38.093 84.846,39.62 84.846,41.489L90.639,41.489ZM84.846,42.996C84.687,45.001 85.508,47.075 87.721,47.075C89.409,47.075 90.253,46.415 90.501,44.75L92.782,44.75C92.44,47.349 90.431,48.648 87.698,48.648C84.026,48.648 82.568,46.051 82.568,42.675C82.568,39.324 84.255,36.518 87.88,36.518C91.3,36.587 92.919,38.751 92.919,41.922L92.919,42.995L84.846,42.995L84.846,42.996Z" style="fill:white;fill-rule:nonzero;"/>
                <path d="M43.789,68.887L47.596,68.887C49.351,68.887 50.81,68.111 50.81,66.082C50.81,64.053 49.351,63.278 47.596,63.278L43.789,63.278L43.789,68.887ZM43.789,61.315L46.617,61.315C48.781,61.384 50.311,60.997 50.311,58.831C50.311,56.664 48.781,56.278 46.617,56.346L43.789,56.346L43.789,61.315ZM41.508,70.847L41.508,54.386L47.39,54.386C50.218,54.386 52.703,55.479 52.703,58.673C52.703,60.381 51.54,61.775 49.921,62.23L49.921,62.275C52.04,62.595 53.205,64.487 53.205,66.54C53.205,68.454 51.952,69.891 50.217,70.529C49.374,70.848 48.371,70.872 47.389,70.848L41.508,70.848L41.508,70.847Z" style="fill:white;fill-rule:nonzero;"/>
                <path d="M58.63,70.847L56.463,70.847L56.463,59.402L58.63,59.402L58.63,61.614L58.675,61.614C58.994,60.041 60.454,59.242 62.028,59.242C62.3,59.242 62.529,59.265 62.78,59.265L62.78,61.315C62.485,61.202 62.14,61.202 61.844,61.202C59.107,61.293 58.63,62.751 58.63,65.168L58.63,70.847Z" style="fill:white;fill-rule:nonzero;"/>
                <path d="M72.241,64.03C72.286,62.114 71.418,60.633 69.32,60.633C67.521,60.633 66.451,62.16 66.451,64.03L72.241,64.03ZM66.451,65.536C66.289,67.541 67.108,69.616 69.32,69.616C71.009,69.616 71.852,68.955 72.104,67.291L74.383,67.291C74.042,69.889 72.035,71.189 69.299,71.189C65.63,71.189 64.168,68.59 64.168,65.215C64.168,61.863 65.855,59.058 69.481,59.058C72.901,59.126 74.519,61.292 74.519,64.461L74.519,65.535L66.451,65.535L66.451,65.536Z" style="fill:white;fill-rule:nonzero;"/>
                <path d="M77.642,59.402L77.642,56.962L79.808,56.279L79.808,59.402L82.453,59.333L82.453,60.951L79.808,60.93L79.808,68.316C79.808,69.138 80.446,69.525 81.223,69.525C81.563,69.525 82.02,69.479 82.362,69.388L82.362,71.053C81.861,71.075 81.382,71.19 80.878,71.19C80.357,71.19 79.945,71.165 79.421,71.075C79.079,71.007 78.509,70.825 78.144,70.322C77.756,69.774 77.643,69.731 77.643,68.203L77.643,60.93L75.682,60.951L75.682,59.333L77.642,59.402Z" style="fill:white;fill-rule:nonzero;"/>
                <path d="M89.817,69.616C92.393,69.616 93.236,67.565 93.236,65.125C93.236,62.684 92.393,60.633 89.817,60.633C87.239,60.633 86.395,62.684 86.395,65.125C86.396,67.565 87.24,69.616 89.817,69.616M95.517,65.125C95.517,68.682 93.579,71.19 89.818,71.19C86.056,71.19 84.119,68.682 84.119,65.125C84.119,61.566 86.056,59.06 89.818,59.06C93.578,59.06 95.517,61.566 95.517,65.125" style="fill:white;fill-rule:nonzero;"/>
                <path d="M100.736,61.09L100.781,61.09C101.51,59.652 103.108,59.06 104.246,59.06C105.045,59.06 108.578,59.266 108.578,62.936L108.578,70.847L106.414,70.847L106.414,63.643C106.414,61.749 105.616,60.724 103.791,60.724C103.791,60.724 102.604,60.656 101.694,61.567C101.373,61.887 100.781,62.389 100.781,64.623L100.781,70.847L98.613,70.847L98.613,59.402L100.736,59.402L100.736,61.09Z" style="fill:white;fill-rule:nonzero;"/>
                <path d="M54.781,87.823C54.849,92.063 52.615,94.686 48.147,94.686C43.677,94.686 41.442,92.063 41.51,87.823L41.51,77.881L43.791,77.881L43.791,88.369C43.86,91.196 45.547,92.723 48.147,92.723C50.744,92.723 52.434,91.197 52.5,88.369L52.5,77.881L54.781,77.881L54.781,87.823Z" style="fill:white;fill-rule:nonzero;"/>
                <path d="M60.958,84.583L61.003,84.583C61.733,83.148 63.328,82.554 64.469,82.554C65.267,82.554 68.802,82.76 68.802,86.431L68.802,94.344L66.636,94.344L66.636,87.136C66.636,85.245 65.839,84.219 64.012,84.219C64.012,84.219 62.828,84.151 61.916,85.062C61.595,85.383 61.003,85.884 61.003,88.117L61.003,94.344L58.837,94.344L58.837,82.896L60.958,82.896L60.958,84.583Z" style="fill:white;fill-rule:nonzero;"/>
            </g>
            <path d="M72.607,82.896L74.774,82.896L74.774,94.344L72.607,94.344L72.607,82.896ZM72.403,77.881L74.979,77.881L74.979,80.229L72.403,80.229L72.403,77.881Z" style="fill:white;fill-rule:nonzero;"/>
            <path d="M82.229,94.344L77.441,82.896L79.833,82.896L83.482,91.971L87.038,82.896L89.41,82.896L84.394,94.344L82.229,94.344Z" style="fill:white;fill-rule:nonzero;"/>
            <g>
                <path d="M98.756,87.526C98.802,85.61 97.935,84.129 95.838,84.129C94.036,84.129 92.966,85.657 92.966,87.526L98.756,87.526ZM92.966,89.031C92.806,91.035 93.626,93.11 95.838,93.11C97.526,93.11 98.368,92.451 98.619,90.787L100.9,90.787C100.558,93.385 98.55,94.685 95.813,94.685C92.143,94.685 90.685,92.085 90.685,88.711C90.685,85.359 92.373,82.553 95.998,82.553C99.416,82.622 101.037,84.788 101.037,87.958L101.037,89.031L92.966,89.031L92.966,89.031Z" style="fill:white;fill-rule:nonzero;"/>
                <path d="M106.256,94.344L104.092,94.344L104.092,82.896L106.256,82.896L106.256,85.109L106.303,85.109C106.62,83.536 108.082,82.738 109.654,82.738C109.928,82.738 110.155,82.759 110.405,82.759L110.405,84.81C110.11,84.697 109.768,84.697 109.469,84.697C106.736,84.788 106.256,86.247 106.256,88.664L106.256,94.344Z" style="fill:white;fill-rule:nonzero;"/>
                <path d="M116.765,82.554C118.932,82.554 121.371,83.468 121.211,86.066L118.932,86.066C119.024,84.607 117.907,84.128 116.653,84.128C115.49,84.128 114.553,84.675 114.553,85.952C114.553,87.227 116.515,87.318 117.336,87.572C119.274,88.21 121.508,88.435 121.508,91.014C121.508,93.818 118.772,94.685 116.423,94.685C114.028,94.685 112.025,93.589 112.045,90.943L114.328,90.943C114.371,92.358 115.33,93.11 116.652,93.11C117.927,93.11 119.227,92.609 119.227,91.127C119.227,88.575 112.273,90.49 112.273,86.02C112.273,83.626 114.691,82.554 116.765,82.554" style="fill:white;fill-rule:nonzero;"/>
            </g>
            <path d="M124.357,82.896L126.524,82.896L126.524,94.344L124.357,94.344L124.357,82.896ZM124.15,77.881L126.727,77.881L126.727,80.229L124.15,80.229L124.15,77.881Z" style="fill:white;fill-rule:nonzero;"/>
            <path d="M130.537,82.896L130.537,80.457L132.702,79.774L132.702,82.896L135.345,82.83L135.345,84.448L132.702,84.426L132.702,91.812C132.702,92.634 133.338,93.021 134.114,93.021C134.457,93.021 134.914,92.976 135.254,92.884L135.254,94.548C134.753,94.571 134.274,94.687 133.774,94.687C133.249,94.687 132.839,94.663 132.313,94.572C131.971,94.504 131.403,94.32 131.038,93.82C130.651,93.272 130.538,93.228 130.538,91.699L130.538,84.426L128.575,84.448L128.575,82.83L130.537,82.896Z" style="fill:white;fill-rule:nonzero;"/>
            <path d="M141.363,98.719L139.154,98.719L140.886,94.298L136.122,82.896L138.537,82.896L142.116,91.926L145.766,82.896L148.092,82.896L141.363,98.719Z" style="fill:white;fill-rule:nonzero;"/>
        </g>
        <g>
            <path d="M68.159,127.129L67.648,127.113C65.965,127.113 65.075,126.577 64.615,126.127C64.023,125.535 63.735,124.697 63.735,123.57C63.735,121.102 65.584,119.688 68.81,119.688C72.583,119.688 73.842,122.839 73.853,122.867L73.928,123.067L73.822,123.246C72.296,125.82 70.393,127.129 68.159,127.129M68.515,117.883C66.24,117.883 61.929,119.071 61.929,123.571C61.929,125.184 62.405,126.479 63.345,127.405C64.042,128.099 65.365,128.923 67.729,128.923C67.949,128.929 68.082,128.932 68.215,128.932C70.033,128.932 71.698,128.261 73.162,126.929L73.887,126.275L73.887,127.59L75.692,127.59L75.692,115.394C75.692,111.911 73.153,109.656 69.227,109.656C65.843,109.656 64.27,110.758 62.602,112.087L63.737,113.492C65.229,112.297 66.458,111.464 69.227,111.464C72.188,111.464 73.888,112.897 73.888,115.395L73.888,120.964L73.127,120.09C73.107,120.068 71.185,117.883 68.515,117.883" style="fill:white;fill-rule:nonzero;"/>
            <path d="M79.686,136.93L81.493,136.93L81.493,114.075L81.587,113.957C82.485,112.821 84.088,111.462 86.597,111.462C88.564,111.462 93.146,112.226 93.146,119.289C93.146,125.705 88.498,127.114 86.708,127.114C86.097,127.114 85.581,127.102 85.043,126.942L85.029,128.795C85.566,128.903 86.097,128.923 86.708,128.923C89.893,128.923 94.95,126.307 94.95,119.289C94.95,112.185 90.634,109.655 86.597,109.655C84.971,109.655 83.479,110.1 82.167,110.983L81.493,111.434L81.493,110.652L79.686,110.652L79.686,136.93Z" style="fill:white;fill-rule:nonzero;"/>
            <path d="M97.613,136.93L99.42,136.93L99.42,114.075L99.513,113.957C100.409,112.821 102.008,111.462 104.522,111.462C106.491,111.462 111.068,112.226 111.068,119.289C111.068,125.705 106.424,127.114 104.635,127.114C104.019,127.114 103.504,127.102 102.964,126.942L102.954,128.795C103.488,128.903 104.025,128.923 104.635,128.923C107.819,128.923 112.875,126.307 112.875,119.289C112.875,112.185 108.56,109.655 104.521,109.655C102.889,109.655 101.4,110.1 100.093,110.983L99.419,111.434L99.419,110.652L97.612,110.652L97.612,136.93L97.613,136.93Z" style="fill:white;fill-rule:nonzero;"/>
            <path d="M117.892,120.215L117.892,119.399C117.892,114.038 120.977,111.239 124.022,111.239C126.137,111.239 128.706,112.12 129.581,114.587L129.712,114.966L117.892,120.215ZM124.021,109.434C120.077,109.434 116.082,112.85 116.082,119.399C116.082,126.294 120.63,128.751 124.885,128.751C129.398,128.751 132.47,124.938 132.769,122.167L130.95,122.167C130.638,124.054 128.389,126.942 124.886,126.942C122.925,126.942 119.464,126.358 118.288,122.428L118.179,122.063L131.718,116.053C131.679,115.745 131.621,115.399 131.621,115.399C131.012,111.661 128.17,109.434 124.021,109.434" style="fill:white;fill-rule:nonzero;"/>
            <path d="M56.652,127.558L58.459,127.558L58.459,102.477L56.652,102.477L56.652,113.217L43.316,113.217L43.316,102.477L41.509,102.477L41.509,127.558L43.316,127.558L43.316,115.012L56.652,115.012L56.652,127.558Z" style="fill:white;fill-rule:nonzero;"/>
            <path d="M147.941,127.558L149.746,127.558L149.746,115.256C149.746,113.096 148.525,109.434 143.951,109.434C141.066,109.434 139.035,110.713 137.763,111.676L137.068,112.197L137.068,110.623L135.264,110.623L135.264,127.558L137.068,127.558L137.068,114.299L137.177,114.176C138.284,112.913 140.189,111.242 143.95,111.242C147.649,111.242 147.94,114.31 147.94,115.256L147.94,127.558L147.941,127.558Z" style="fill:white;fill-rule:nonzero;"/>
            <path d="M155.078,126.248C155.078,127.033 154.438,127.674 153.652,127.674C152.866,127.674 152.225,127.033 152.225,126.248C152.225,125.461 152.866,124.822 153.652,124.822C154.438,124.822 155.078,125.461 155.078,126.248" style="fill:white;fill-rule:nonzero;"/>
        </g>
    </g>
</svg>
                </a>
            </div>

        <h1><a href="/"><span class="cbu">Island </span>
<span class="scholar">Futures</span>
</a></h1>

            <?php print theme('links__main-menu', array('links' => $menu, 'attributes' => array('class'=> 'main-menu button-group menu'))); ?>
        </div>
        <div class="top-bar-right">
            <?php if ($content): ?>
            <div>
                <?php print $content; ?>
            </div>
            <?php endif; ?>
        <!-- <button class="mobile-menu__button button" data-toggle="offCanvas" type="button">Open Menu</button> -->
<span class="hamburger mobile-menu__button" data-toggle="offCanvas"></span>
        </div>
    </div>
</header>
