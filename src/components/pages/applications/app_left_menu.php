
<!-- checkSelectedLeftMenuLink() is in the header, so all left-menu's have access to the function -->
<div class="wrap">
    <div id="menu-left">
        <a href="<?php echo checkSelectedLeftMenuLink( "APPPAGE", "app_page.php" ); ?>">
            <div <?php echo checkSelectedLeftMenu( "APPPAGE" ); ?>>
                <?php include $assetsPath."svg/list.svg"; ?>
                <p>App page</p>
            </div>
        </a>
        <a href="<?php echo checkSelectedLeftMenuLink( "APPSETS", "app_sets.php" ); ?>">
            <div <?php echo checkSelectedLeftMenu( "APPSETS" ); ?>>
                <?php include $assetsPath."svg/list.svg"; ?>
                <p>App Sets</p>
            </div>
        </a>
        <a href="<?php echo checkSelectedLeftMenuLink( "APPLICATIONS", "applications_page.php" ); ?>">
            <div <?php echo checkSelectedLeftMenu( "APPLICATIONS" ); ?>>
                <?php include $assetsPath."svg/list.svg"; ?>
                <p>Apps</p>
            </div>
        </a>
        <a href="<?php echo checkSelectedLeftMenuLink( "APPLIST", "app_list.php" ); ?>">
            <div <?php echo checkSelectedLeftMenu( "APPLIST" ); ?>>
                <?php include $assetsPath."svg/list.svg"; ?>
                <p>app List</p>
            </div>
        </a>
        <a href="<?php echo checkSelectedLeftMenuLink( "APPCOMPONENTSLIST", "app_components_list.php" ); ?>">
            <div <?php echo checkSelectedLeftMenu( "APPCOMPONENTSLIST" ); ?>>
                <?php include $assetsPath."svg/list.svg"; ?>
                <p>app component list</p>
            </div>
        </a>
    </div>
</div>
