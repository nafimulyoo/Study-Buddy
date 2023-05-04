<template>
    <div class="friend-list-item">
      <div class="leaderboard-number">{{ index }}</div>
      <img class="profile-picture" :src="friend.profilePicture" :alt="friend.username" />
      <div class="friend-info">
        <div class="username">{{ friend.username }}</div>
        <div class="study-duration">Total study: {{ friend.totalStudy }}</div>
      </div>
      <button class="open-progress" @click="openFriendProfile">Open Progress</button>
      <button class="cheer-on" @click="cheerOn">Cheer On</button>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      friend: {
        type: Object,
        required: true,
      },
      index: {
        type: Number,
        required: true,
      },
    },
    methods: {
      openFriendProfile() {
        // Implement opening friend's profile
      },
      cheerOn() {
        // Implement cheering on friend
      },
    },
  };
  </script>
  
  <style scoped>
  .friend-list-item {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
  }
  
  .leaderboard-number {
    margin-right: 1rem;
    font-size: 1.5rem;
    font-weight: bold;
  }
  
  .profile-picture {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 1rem;
  }
  
  .friend-info {
    flex: 1;
  }
  
  .open-progress,
  .cheer-on {
    margin-left: 1rem;
  }
  
  /* Other styles */
  </style>
  