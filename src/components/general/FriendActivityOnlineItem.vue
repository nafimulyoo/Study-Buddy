<template>
    <div class="friend-activity-online">
      <img :src="friend.profilePicture" :alt="friend.username" />
      <p>{{ friend.username }}</p>
      <p>{{ friend.studySubject }}</p>
      <p>{{ friend.hours }}h {{ friend.minutes }}m</p>
      <p>{{ friend.music }}</p>
      <button @click="cheerOn">Cheer On</button>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      friend: {
        type: Object,
        required: true,
      },
    },
    methods: {
      cheerOn() {
        // Add your implementation for cheering on a friend
      },
    },
  };
  </script>
  
  <style scoped>
  .friend-activity-online {
    display: flex;
    align-items: center;
    padding: 0.5rem;
    margin-bottom: 1rem;
  }
  img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 0.5rem;
  }
  </style>
  