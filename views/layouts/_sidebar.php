<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://placehold.it/45x45" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <?=
        \yiister\adminlte\widgets\Menu::widget(
            [
                "items" => [
                    ["label" => "Home", "url" => "/", "icon" => "home"],
                    ["label" => "Layout", "url" => ["site/layout"], "icon" => "files-o"],
                    ["label" => "Error page", "url" => ["site/error-page"], "icon" => "close"],
                    [
                        "label" => "Widgets",
                        "icon" => "th",
                        "url" => "#",
                        "items" => [
                            ["label" => "Menu", "url" => ["site/menu"]],
                            ["label" => "Boxes", "url" => ["site/boxes"]],
                            ["label" => "FlashAlert", "url" => ["site/flash-alert"]],
                            ["label" => "Callouts", "url" => ["site/callouts"]],
                        ],
                    ],
                    [
                        "label" => "Badges",
                        "url" => "#",
                        "icon" => "table",
                        "items" => [
                            [
                                "label" => "Default",
                                "url" => "#",
                                "icon" => "table",
                                "badge" => "123",
                            ],
                            [
                                "label" => "Blue",
                                "url" => "#",
                                "icon" => "table",
                                "badge" => "123",
                                "badgeOptions" => [
                                    "class" => \yiister\adminlte\components\AdminLTE::BG_BLUE,
                                ],
                            ],
                        ],
                    ],
                    [
                        "label" => "Multilevel",
                        "url" => "#",
                        "icon" => "table",
                        "items" => [
                            [
                                "label" => "Second level",
                                "url" => "#",
                            ],
                            [
                                "label" => "Second level",
                                "url" => "#",
                                "icon" => "table",
                                "items" => [
                                    [
                                        "label" => "Default",
                                        "url" => "#",
                                    ],
                                    [
                                        "label" => "Red",
                                        "url" => "#",
                                        "icon" => "table",
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        )
        ?>
    </section>
    <!-- /.sidebar -->
</aside>
