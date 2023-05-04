<template>
  <nav class="left-navbar">
    <div class="logo">
      <img src="./assets/logo.png" alt="Study Buddy Logo">
    </div>
    <ul>
      <li>
        <router-link to="/" class="nav-link">
          <i class="fas fa-home"></i>
          <span>Home</span>
        </router-link>
      </li>
      <li>
        <router-link to="/studyplan" class="nav-link">
          <i class="fas fa-graduation-cap"></i>
          <span>Study Plan</span>
        </router-link>
      </li>
      <li>
        <router-link to="/peertopeer" class="nav-link">
          <i class="fas fa-users"></i>
          <span>Friends</span>
        </router-link>
      </li>
      <li>
        <router-link to="/progress" class="nav-link">
          <i class="fas fa-chart-line"></i>
          <span>Progress</span>
        </router-link>
      </li>
      <li>
        <router-link to="/discussion" class="nav-link">
          <i class="fas fa-comments"></i>
          <span>Discussion</span>
        </router-link>
      </li>
      <li>
        <router-link to="/studynow" class="nav-link">
          <i class="fas fa-play-circle"></i>
          <span>Study Now</span>
        </router-link>
      </li>
      <li>
        <router-link to="/settings" class="nav-link">
          <i class="fas fa-cog"></i>
          <span>Settings</span>
        </router-link>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: 'LeftNavbar'
}
</script>

<style scoped>
.left-navbar {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  background-color: #f8f8f8;
  width: 200px;
  height: 100%;
  position: fixed;
  left: 0;
  top: 0;
  padding: 20px;
}

.logo img {
  width: 100%;
  height: auto;
  margin-bottom: 20px;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

li {
  margin-bottom: 20px;
}

.nav-link {
  display: flex;
  align-items: center;
  color: #333;
  text-decoration: none;
  font-size: 16px;
}

.nav-link i {
  font-size: 20px;
  margin-right: 10px;
}
</style>
