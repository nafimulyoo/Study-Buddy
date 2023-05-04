<template>
    <div class="friend-and-leaderboard-view">
      <LeftNavigationBar />
      <FriendActivityBar />
  
      <div class="content">
        <div class="search-and-sort">
          <input type="text" v-model="searchQuery" placeholder="Search friend" @input="searchFriend" />
          <button @click="sortFriendList">Sort</button>
          <!-- Sort options and ordering -->
        </div>
  
        <div class="friend-list">
          <FriendListItem
            v-for="friend in sortedFriends"
            :key="friend.id"
            :friend="friend"
          />
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import LeftNavigationBar from '@/components/general/LeftNavigationBar.vue';
  import FriendActivityBar from '@/components/general/FriendActivityBar.vue';
  import FriendListItem from '@/components/general/FriendListItem.vue';
  
  export default {
    components: {
      LeftNavigationBar,
      FriendActivityBar,
      FriendListItem,
    },
    data() {
      return {
        searchQuery: '',
        friends: [], // Populate with your friend data
        sortedFriends: [],
      };
    },
    methods: {
      searchFriend() {
        // Implement search functionality
      },
      sortFriendList() {
        // Implement sorting functionality
      },
    },
    created() {
      this.sortedFriends = this.friends;
    },
  };
  </script>
  
  <style scoped>
  .friend-and-leaderboard-view {
    display: flex;
  }
  
  .content {
    flex: 1;
    padding: 2rem;
  }
  
  .search-and-sort {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1rem;
  }
  
  /* Other styles */
  </style>
  