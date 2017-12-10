<!-- Navbar -->
<div id='navbar' class="navbar bg-primary">
  <!-- Menu button -->
  <span id="menu-button" class="float-left" onclick="toggleSidebar()" >
      <i class="material button size-18">menu</i>
  </span>

  <!-- Logo -->
  <a id='logo' class="button float-left color-light" href="">MinuteGen</a>

  <!-- Search bar -->
  <div id='search-bar' class='search-bar'>
      <input id='search-field' type="text" placeholder="Search..">
  </div>

  <!-- Profile -->
  <img class="avatar button dropdown float-right" onclick="toggleDropdown('profile')" src=<?= $_SESSION['data']['profile_url']; ?> alt="Avatar" >

  <div id="profile" class="dropdown-content" >
      <div class="pane">
          <img class="avatar float-left" src=<?= $_SESSION['data']['profile_url']; ?> alt="Avatar" >
          <div class="info float-right">
              <div class='text-large'> <?= $_SESSION['data']['full_name']; ?> </div>
              <div class='text-small'> <?= $_SESSION['user']; ?> </div>
              <div class='text-small'> <?= $_SESSION['member_type_name']; ?> </div>
          </div>
      </div>

      <div class="fit-width">
          <a class="float-left" href="#home">Settings</a>
          <a id='logout-button' class="float-right">Logout</a>
      </div>
  </div>

  <!-- Notification -->
  <span id="notification-button" class="float-right" onclick="toggleDropdown('notifications')" >
      <i class="material button dropdown">notifications</i>
  </span>

  <div id="notifications" class="dropdown-content" >
      <div class="bigtitle">Notifications</div>

      <div class="notification-item" href="#home">
          <div class='notification-item-title'> Sumedhe Dissanayake</div>
          <div class='text-small'> Minutegen, Automated Minute Tracker </div>
          <div class='text-small'> 23:59 2017.12.02 </div>
          <i class="material notification-item-close">close</i>
      </div>
      <div class="notification-item" href="#home">
          <div class='notification-item-title'> Sumedhe Dissanayake</div>
          <div class='text-small'> Minutegen, Automated Minute Tracker </div>
          <div class='text-small'> 23:59 2017.12.02 </div>
          <i class="material notification-item-close">close</i>
      </div>
      <div class="notification-item" href="#home">
          <div class='notification-item-title'> Sumedhe Dissanayake</div>
          <div class='text-small'> Minutegen, Automated Minute Tracker </div>
          <div class='text-small'> 23:59 2017.12.02 </div>
          <i class="material notification-item-close">close</i>
      </div>
      <div class="button">
          Load more
      </div>
  </div>

  <!-- Settings -->
  <span id="settings-button" class="float-right" onclick="toggleDropdown('settings')" >
      <i class="material button dropdown">settings</i>
  </span>

  <div id="settings" class="dropdown-content" >
      <a href="#home">Settings</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
  </div>



</div>
