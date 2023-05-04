<template>
    <div class="friend-activity-bar">
      <div class="toggle-button">
        <i class="fas fa-chevron-left"></i>
      </div>
      <h2>Friend Activity</h2>
  
      <div class="online-friends">
        <FriendActivityOnline
          v-for="friend in onlineFriends"
          :key="friend.id"
          :friend="friend"
        />
      </div>
  
      <h3>Offline</h3>
      <div class="offline-friends">
        <FriendActivityOffline
          v-for="friend in offlineFriends"
          :key="friend.id"
          :friend="friend"
        />
      </div>
    </div>
  </template>
  
<script>
import FriendActivityOnline from './FriendActivityOnline.vue';
import FriendActivityOffline from './FriendActivityOffline.vue';

export default {
  components: {
    FriendActivityOnline,
    FriendActivityOffline,
  },
  data() {
    return {
      onlineFriends: [], // Add your online friends data
      offlineFriends: [], // Add your offline friends data
    };
  },
  methods: {
    toggleActivityBar() {
      this.$el.classList.toggle('active');
    },
  },
  mounted() {
    this.$el.querySelector('.toggle-button').addEventListener('click', this.toggleActivityBar);
  },
  beforeDestroy() {
    this.$el.querySelector('.toggle-button').removeEventListener('click', this.toggleActivityBar);
  },
};
</script>

<style scoped>
.friend-activity-bar {
  position: fixed;
  right: -300px; /* Set the initial position to be hidden */
  top: 0;
  bottom: 0;
  background: #f0f0f0;
  padding: 1rem;
  overflow-y: auto;
  width: 300px;
  transition: right 0.5s ease; /* Add the transition property */
}
.friend-activity-bar.active {
  right: 0; /* Set the position to be visible when the .active class is present */
}
.toggle-button {
  position: absolute;
  left: -1.5rem;
  top: 50%;
  font-size: 1.5rem;
  cursor: pointer;
}
</style>