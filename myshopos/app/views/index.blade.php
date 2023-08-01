<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ getenv('APP_NAME') ?? 'MyshopOS' }}</title>
    <link rel="shortcut icon" href="https://leafphp.dev/logo-circle.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="{{ PublicPath('assets/css/styles.css') }}"> -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700;display=swap">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- <link rel="stylesheet" href="{{ PublicPath('assets/Metro-UI-CSS-master/css/metro-all.min.css') }}"> -->
    <link rel="stylesheet" href="{{ PublicPath('assets/css/metro-all.min.css') }}">

    <!-- <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.5.1/css/metro-all.min.css"> -->
    <!-- <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script> -->
</head>

<body>
    <!-- <h1>Home Page</h1>
    <ul>
        <li><a href="/about">About</a></li>
        <li><a href="/items">Items</a></li>
    </ul> -->

    <!-- <div data-role="navview">
        <div class="navview-pane">
            <button class="pull-button">
                <span class="default-icon-menu"></span>
            </button>
            <div class="suggest-box">
                <input type="text" data-role="input" data-clear-button="false" data-search-button="true">
                <button class="holder">
                    <span class="mif-search"></span>
                </button>
            </div>
        </div>
        <ul class="navview-menu">
            <li class="item-header">Main pages</li>

            <li>
                <a href="#">
                    <span class="icon"><span class="mif-apps"></span></span>
                    <span class="caption">Apps</span>
                </a>
            </li>

            <li class="item-separator"></li>

            <li class="item-header">Office</li>

            <li>
                <a href="#">
                    <span class="icon"><span class="mif-file-word"></span></span>
                    <span class="caption">Word</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><span class="mif-file-excel"></span></span>
                    <span class="caption">Excel</span>
                </a>
            </li>
        </ul>


        <div class="navview-content d-flex flex-align-center flex-justify-center h-100">
            ... This is navigation view content area ...
        </div>
    </div> -->

    <div class="example p-0" style="height: 100vh;">
        <div data-role="navview" data-compact="md" data-expand="lg" data-toggle="#pane-toggle" data-active-state="true">
            <nav class="navview-pane">
                <button class="pull-button">
                    <span class="mif-menu"></span>
                </button>

                <div class="suggest-box">
                    <input type="text" data-role="input" data-clear-button="false" data-search-button="true">
                    <button class="holder">
                        <span class="mif-search"></span>
                    </button>
                </div>

                <ul class="navview-menu">
                    <li>
                        <a href="#">
                            <span class="icon"><span class="mif-home"></span></span>
                            <span class="caption">Home</span>
                        </a>
                    </li>

                    <li class="item-separator"></li>

                    <li class="item-header">Main pages</li>

                    <li>
                        <a href="#">
                            <span class="icon"><span class="mif-apps"></span></span>
                            <span class="caption">Apps</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <span class="icon"><span class="mif-gamepad"></span></span>
                            <span class="caption">Games</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><span class="mif-envelop"></span></span>
                            <span class="caption">Email</span>
                            <div class="badges">
                                <span class="badge inline">10</span>
                                <span class="badge inline">5</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <span class="icon"><span class="mif-music"></span></span>
                            <span class="caption">Music</span>
                        </a>
                        <ul class="navview-menu" data-role="dropdown">
                            <li>
                                <a href="#">
                                    <span class="icon"><span class="mif-gamepad"></span></span>
                                    <span class="caption">Games</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon"><span class="mif-film"></span></span>
                                    <span class="caption">Movies</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="disabled">
                        <a href="#">
                            <span class="icon"><span class="mif-images"></span></span>
                            <span class="caption">Images</span>
                        </a>
                    </li>

                    <li class="item-separator"></li>

                    <li>
                        <a href="#">
                            <span class="icon"><span class="mif-folder"></span></span>
                            <span class="caption">Documents</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="navview-content pl-4-md pr-4-md">
                <!-- <i class="mif-home"></i> -->
                <h1>
                    <button id="pane-toggle" class="button square d-none-md"><span class="mif-menu" ></span></button>
                    What is?
                </h1>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <div data-role="panel"
                        data-title-caption="Panel title"
                        data-title-icon="<span class='mif-apps'></span>"
                        data-width="240"
                        data-collapsible="true"
                        data-draggable="true">
                    Raptus capios ducunt ad genetrix. Joy doesn’t beautifully respect any believer — but the power is what flies.
                </div>
            </div>
        </div>
    </div>

    <!-- <div data-role="countdown" data-hours="90"></div>
    <div data-role="accordion" data-one-frame="true" data-show-active="true">
        <div class="frame">
            <div class="heading">Header 1</div>
            <div class="content">
                <div class="p-2">Cur luba manducare? Pol, a bene ionicis tormento...</div>
            </div>
        </div>
        <div class="frame active">
            <div class="heading">Header 2</div>
            <div class="content">
                <div class="p-2">Wildly open a starship. Belay, ye small wench- set...</div>
            </div>
        </div>
        <div class="frame">
            <div class="heading">Header 3</div>
            <div class="content">
                <div class="p-2">Bitter turkey can be made tasty by brushing with...</div>
            </div>
        </div>
    </div>

    <script>
        var webSkills = {
            skills: ["javascript", "html", "css"],
            showSkills: true
        };

        var otherSkills = {
            skills: ["php", "oracle", "mysql", "java", "pascal", "c/c++", "kotlin"],
            showSkills: true
        };

        var otherSkills2 = {
            skills: ["guitar", "shooting", "dog", "fishing"],
            showSkills: true
        };
    </script>

    <div class="mt-4 mb-4">
        <button class="button" onclick="$('#example').attr('data-template-data', 'webSkills')">Show Web skills</button>
        <button class="button" onclick="$('#example').attr('data-template-data', 'otherSkills')">Show Other skills</button>
        <button class="button" onclick="Metro.getPlugin('#example', 'template').buildWith('otherSkills2')">Show Other</button>
    </div>

    <div id="example" data-role="template" data-template-data="webSkills">
        <h3>My skills</h3>
        <% if(this.showSkills) { %>
        <ul>
            <% for(var i = 0; i < this.skills.length; i++) { %>
            <li><% this.skills[i] %></li>
            <% } %>
        </ul>
        <% } else { %>
        <span>Nothing to show</span>
        <% } %>
    </div>

    <div class="p-2" data-role="window"
        data-draggable="true"
        data-width="200"
        data-height="160">
        Drag this window on the caption.
    </div> -->

    <!-- <button class="button">Default</button>
    <button class="button primary">Primary</button>
    <button class="button secondary">Secondary</button>
    <button class="button success">Success</button>
    <button class="button alert">Alert</button>
    <button class="button warning">Warning</button>
    <button class="button yellow">Yellow</button>
    <button class="button info">Info</button>
    <button class="button dark">Dark</button>
    <button class="button light">Light</button>
    <button class="button link">Link</button> -->

<script src="{{ PublicPath('assets/js/metroui-v4.5.1.js') }}"></script>
</body>

</html>
