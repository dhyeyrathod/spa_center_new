<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="<?= base_url() ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="<?= base_url('services') ?>"><i class="app-menu__icon fa fa-tasks"></i><span class="app-menu__label">Services</span></a></li>
        <li><a class="app-menu__item" href="<?= base_url('hotels') ?>"><i class="app-menu__icon fa fa-tasks"></i><span class="app-menu__label">Hotels</span></a></li>
    </ul>
</aside>
